<?php

namespace App\Http\Controllers\Poa\Crud\problemas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//validation request
use App\Http\Requests\Poa\mproblemas\CreatePdeterminateRequest;
use App\Http\Requests\Poa\mproblemas\UpdatePdeterminateRequest;

//Helpers
// use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

//models
// use App\Models\poa\Direccion;
// use App\Models\poa\Poa;
use App\Models\poa\problema\Pdeterminante;
use App\Models\poa\problema\Mproblema;

class PdeterminanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pdeterminantes = Pdeterminante::OrderBy('pdeterminantes.id','DESC')
            // ->join('users', 'users.id', '=', 'poas.user_id')
            ->with('Mproblema')
            ->get();

        // dd($pdeterminates);

        return view('poa.mproblemas.pdeterminantes.index', compact('pdeterminantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mproblemas_list = Mproblema::Select('mproblemas.*')
                ->orderby('mproblemas.problema','asc')
                ->pluck('problema', 'id');

        return view('poa.mproblemas.pdeterminantes.create', compact('mproblemas_list'));
    }

    public function createWithid($mproblema_id)
    {
        $mproblemas_list = Mproblema::Select('mproblemas.*')
                ->where('id',$mproblema_id)
                ->orderby('mproblemas.problema','asc')
                ->pluck('problema', 'id');

        // $mproblema_id = $id;

        return view('poa.mproblemas.pdeterminantes.create', compact('mproblemas_list','mproblema_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePdeterminateRequest $request)
    {
        $pdeterminante = Pdeterminante::create($request->all());

        Session::flash('operp_ok','Registro guardado exitasamente');

        return redirect()->route('pdeterminantes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pdeterminante = Pdeterminante::OrderBy('pdeterminantes.id','DESC')
            // ->join('users', 'users.id', '=', 'poas.user_id')
            ->with('mproblema')
            ->where('id',$id)
            ->first();

        return view('poa.mproblemas.pdeterminantes.show', compact('pdeterminante'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pdeterminante = Pdeterminante::OrderBy('pdeterminantes.id','DESC')
            // ->join('users', 'users.id', '=', 'poas.user_id')
            ->with('Mproblema')
            ->where('id',$id)
            ->first();

        $mproblemas_list = Mproblema::Select('mproblemas.*')
                ->orderby('mproblemas.problema','asc')
                ->pluck('problema', 'id');

        return view('poa.mproblemas.pdeterminantes.edit', compact('pdeterminante','mproblemas_list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePdeterminateRequest $request, $id)
    {
        $pdeterminante = Pdeterminante::findOrFail($id);

        $pdeterminante->fill($request->all());

        $pdeterminante->save();

        $messenge = trans('db_oper_result.user_update_ok');

        Session::flash('operp_ok',$messenge);

        Session::flash('class_oper','success');

        return redirect()->route('pdeterminantes.edit',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $pdeterminante = Pdeterminante::findOrFail($id);
        $pdeterminante->delete();

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
