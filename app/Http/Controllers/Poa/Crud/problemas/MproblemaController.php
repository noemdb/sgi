<?php

namespace App\Http\Controllers\Poa\Crud\problemas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//validation request
use App\Http\Requests\Poa\mproblemas\CreateMproblemaRequest;
use App\Http\Requests\Poa\mproblemas\UpdateMproblemaRequest;

//Helpers
// use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

//models
use App\Models\poa\Direccion;
use App\Models\poa\Poa;
use App\Models\poa\problema\Mproblema;

class MproblemaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mproblemas = Mproblema::OrderBy('mproblemas.id','DESC')
            // ->join('users', 'users.id', '=', 'poas.user_id')
            ->with('poa')
            ->with('direccion')
            ->get();

        // dd($mproblemas);

        return view('poa.mproblemas.mproblemas.index', compact('mproblemas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $poa_list = Poa::select('poas.*')
                ->orderby('poas.descripcion','asc')
                ->pluck('descripcion', 'id');

        $direccion_list = Direccion::select('direccions.*')
                ->orderby('direccions.nombre','asc')
                ->pluck('nombre', 'id');

        return view('poa.mproblemas.mproblemas.create', compact('poa_list','direccion_list'));
    }

    public function createWithid($poa_id)
    {
        $poa = Poa::findOrFail($poa_id);

        $poa_list = Poa::Select('poas.*')
                ->where('id',$poa_id)
                ->orderby('poas.id','asc')
                ->pluck('descripcion', 'id');

        $direccion_list = Direccion::select('direccions.*')
                ->where('institucion_id',$poa->institucion_id)
                ->orderby('direccions.nombre','asc')
                ->pluck('nombre', 'id');

        // $mproblema_id = $id;

        return view('poa.mproblemas.mproblemas.create', compact('poa_list','direccion_list','poa_id','poa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateMproblemaRequest $request)
    {
        $Mproblema = Mproblema::create($request->all());

        Session::flash('operp_ok','Registro guardado exitasamente');

        return redirect()->route('mproblemas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Mproblema = Mproblema::OrderBy('mproblemas.id','DESC')
            // ->join('users', 'users.id', '=', 'poas.user_id')
            ->with('poa')
            ->with('direccion')
            ->where('id',$id)
            ->first();

        return view('poa.mproblemas.mproblemas.show', compact('Mproblema'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Mproblema = Mproblema::findOrFail($id);

        $poa_list = Poa::select('poas.*')
                ->orderby('poas.descripcion','asc')
                ->pluck('descripcion', 'id');

        $direccion_list = Direccion::select('direccions.*')
                ->orderby('direccions.nombre','asc')
                ->pluck('nombre', 'id');

        // dd($Mproblema,$poa_list,$direccion_list);

        return view('poa.mproblemas.mproblemas.edit', compact('Mproblema','poa_list','direccion_list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMproblemaRequest $request, $id)
    {
        $Mproblema = Mproblema::findOrFail($id);

        $Mproblema->fill($request->all());

        $Mproblema->save();

        $messenge = trans('db_oper_result.user_update_ok');

        Session::flash('operp_ok',$messenge);

        Session::flash('class_oper','success');

        return redirect()->route('mproblemas.edit',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $Mproblema = Mproblema::findOrFail($id);
        $Mproblema->delete();

        $operation= 'delete';
        $messenge = trans('db_oper_result.delete_ok');

        if($request->ajax()){

            return response()->json([
                "messenge"=>$messenge,
                "operation"=>$operation,
            ]);

        }

        Session::flash('operp_ok',$messenge);

        return redirect()->route('mproblemas.index');
    }
}
