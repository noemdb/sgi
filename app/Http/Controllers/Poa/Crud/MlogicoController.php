<?php

namespace App\Http\Controllers\Poa\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//validation request
use App\Http\Requests\Poa\CreateMlogicoRequest;
use App\Http\Requests\Poa\UpdateMlogicoRequest;

//Helpers
// use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

//models
// use App\Models\poa\Institucion;
// use App\Models\poa\Direccion;
use App\Models\poa\Poa;
use App\Models\poa\Mlogico;
// use App\Models\poa\problema\Mproblema;
use App\User;

class MlogicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mlogicos = Mlogico::OrderBy('mlogicos.id','DESC')
            // ->join('poas', 'poas.id', '=', 'mlogicos.poa_id')
            // ->select('mlogicos.*','poas.descripcion as poa')
            ->with('poa')
            ->get();

        // $poa = Poa::Where('id',$mlogicos->poa_id)->first();

        // dd($poas);

        return view('poa.mlogicos.index', compact('mlogicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $poas_list = Poa::select('poas.id','poas.descripcion')
                ->orderby('poas.descripcion','asc')
                ->pluck('descripcion', 'id');

        return view('poa.mlogicos.create', compact('poas_list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateMlogicoRequest $request)
    {
        $mlogico = Mlogico::create($request->all());

        Session::flash('operp_ok','Registro guardado exitasamente');

        return redirect()->route('mlogicos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $mlogico = Mlogico::findOrFail($id);

        $poa = Poa::Where('id',$mlogico->poa_id)->get();

        // dd($poa,$mlogicos,$mproblemas,$user);

        return view('poa.mlogicos.show',compact('mlogico','poa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mlogico = Mlogico::findOrFail($id);

        $poa = Poa::Where('id',$mlogico->poa_id)->get();

        $poas_list = Poa::select('poas.id','poas.descripcion')
                ->orderby('poas.descripcion','asc')
                ->pluck('descripcion', 'id');

        return view('poa.mlogicos.edit',compact('mlogico','poa','poas_list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMlogicoRequest $request, $id)
    {
        $mlogico = Mlogico::findOrFail($id);

        $mlogico->fill($request->all());

        $mlogico->save();

        $messenge = trans('db_oper_result.user_update_ok');

        Session::flash('operp_ok',$messenge);

        Session::flash('class_oper','success');

        return redirect()->route('mlogicos.edit',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {

        $mlogico = Mlogico::findOrFail($id);
        $mlogico->delete();

        $operation= 'delete';
        $messenge = trans('db_oper_result.delete_ok');

        if($request->ajax()){
            return response()->json([
                "messenge"=>$messenge,
                "operation"=>$operation,
            ]);
        }

        Session::flash('operp_ok',$messenge);

        return redirect()->route('mlogicos.index');
    }
}
