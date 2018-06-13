<?php

namespace App\Http\Controllers\Poa\Crud\actividades;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//validation request
use App\Http\Requests\Poa\actividades\CreateAestadoRequest;
use App\Http\Requests\Poa\actividades\UpdateAestadoRequest;

//Helpers
// use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

//models
use App\User;
use App\Models\sys\SelectOpt;
use App\Models\poa\actividades\Aestado;
use App\Models\poa\actividades\Mactividad;

class AestadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aestados = Aestado::OrderBy('aestados.id','DESC')
            // ->join('users', 'users.id', '=', 'poas.user_id')
            ->with('mactividad')
            ->with('user')
            ->get();

        // dd($aestados);

        return view('poa.mactividads.aestados.index', compact('aestados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $mactividads_list = Mactividad::Select('mactividads.*')
                ->orderby('mactividads.id','asc')
                ->pluck('descripcion', 'id');

        $estados_list = SelectOpt::select('select_opts.*')
            ->where('table','aestados')
            ->where('view','aestados.create')
            ->where('name','estado')
            ->orderby('value')
            ->pluck('value','value');
            // ->prepend('Seleccionar','');

        // dd($mproductos_list,$responsables_list);

        return view('poa.mactividads.aestados.create', compact('mactividads_list','estados_list'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAestadoRequest $request)
    {
        $aestado = Aestado::create($request->all());

        Session::flash('operp_ok','Registro guardado exitasamente');

        return redirect()->route('aestados.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aestado = Aestado::OrderBy('aestados.id','DESC')
            // ->join('users', 'users.id', '=', 'poas.user_id')
            ->with('mactividad')
            ->where('id',$id)
            ->first();

        // dd($mactividad);

        return view('poa.mactividads.aestados.show', compact('aestado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $mactividads_list = Mactividad::Select('mactividads.*')
                ->orderby('mactividads.id','asc')
                ->pluck('descripcion', 'id');

        $estados_list = SelectOpt::select('select_opts.*')
            ->where('table','aestados')
            ->where('view','aestados.create')
            ->where('name','estado')
            ->orderby('value')
            ->pluck('value','value');

        $aestado = Aestado::OrderBy('aestados.id','DESC')
            ->with('mactividad')
            ->where('id',$id)
            ->first();

        return view('poa.mactividads.aestados.edit', compact('aestado','mactividads_list','estados_list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAestadoRequest $request, $id)
    {
        $aestado = Aestado::findOrFail($id);

        $aestado->fill($request->all());

        $aestado->save();

        $messenge = trans('db_oper_result.update_ok');

        Session::flash('operp_ok',$messenge);

        Session::flash('class_oper','success');

        return redirect()->route('aestados.edit',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        // dd($id);

        $aestado = Aestado::findOrFail($id);
        $aestado->delete();

        $operation= 'delete';
        $messenge = trans('db_oper_result.delete_ok');

        if($request->ajax()){

            return response()->json([
                "messenge"=>$messenge,
                "operation"=>$operation,
            ]);

        }

        Session::flash('operp_ok',$messenge);

        return redirect()->route('aestados.index');
    }
}
