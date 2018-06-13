<?php

namespace App\Http\Controllers\Poa\Crud\actividades;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//validation request
use App\Http\Requests\Poa\actividades\CreateMactividadRequest;
use App\Http\Requests\Poa\actividades\UpdateMactividadRequest;

//Helpers
// use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

//models
// use App\Models\poa\Direccion;
// use App\Models\poa\Poa;
use App\Models\sys\SelectOpt;
use App\Models\poa\Responsable;
use App\Models\poa\producto\Mproducto;
use App\Models\poa\actividades\Mactividad;


class MactividadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mactividads = Mactividad::OrderBy('mactividads.id','DESC')
            // ->join('users', 'users.id', '=', 'poas.user_id')
            ->with('mproducto')
            ->with('responsable')
            ->get();

        // dd($mactividads);

        return view('poa.mactividads.mactividads.index', compact('mactividads'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mproductos_list = Mproducto::Select('mproductos.*')
                ->orderby('mproductos.producto','asc')
                ->pluck('producto', 'id');

        $responsables_list = Responsable::Select('responsables.*')
                ->orderby('responsables.nombre','asc')
                ->pluck('nombre', 'id');

        $mactividads_list = Mactividad::Select('mactividads.*')
                ->orderby('mactividads.id','asc')
                ->pluck('descripcion', 'id');

        $frecuencias_list = SelectOpt::select('select_opts.*')
            ->where('table','mactividads')
            ->where('view','mactividads.create')
            ->where('name','frecuencia')
            ->orderby('value')
            ->pluck('value','value');
            // ->prepend('Seleccionar','');

        $frecuencias_list = SelectOpt::select('select_opts.*')
            ->where('table','mactividads')
            ->where('view','mactividads.create')
            // ->orderby('value')
            ->pluck('name','value');
         // dd($frecuencias_list);

        // dd($mproductos_list,$responsables_list);

        return view('poa.mactividads.mactividads.create', compact('mproductos_list','responsables_list','mactividads_list','frecuencias_list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateMactividadRequest $request)
    {
        $mactividad = Mactividad::create($request->all());

        Session::flash('operp_ok','Registro guardado exitasamente');

        return redirect()->route('mactividads.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mactividad = Mactividad::OrderBy('mactividads.id','DESC')
            // ->join('users', 'users.id', '=', 'poas.user_id')
            ->with('mproducto')
            ->where('id',$id)
            ->first();

        // dd($mactividad);

        return view('poa.mactividads.mactividads.show', compact('mactividad'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $mactividad = Mactividad::OrderBy('mactividads.id','DESC')
            // ->join('users', 'users.id', '=', 'poas.user_id')
            ->with('mproducto')
            ->where('id',$id)
            ->first();

        $mproductos_list = Mproducto::Select('mproductos.*')
                ->orderby('mproductos.producto','asc')
                ->pluck('producto', 'id');

        $responsables_list = Responsable::Select('responsables.*')
                ->orderby('responsables.nombre','asc')
                ->pluck('nombre', 'id');

        $mactividads_list = Mactividad::Select('mactividads.*')
                ->orderby('mactividads.id','asc')
                ->pluck('descripcion', 'id');

        $frecuencias_list = SelectOpt::select('select_opts.*')
            ->where('table','mactividads')
            ->where('view','mactividads.create')
            // ->orderby('value')
            ->pluck('name','value');
         // dd($frecuencias_list);

        return view('poa.mactividads.mactividads.edit', compact('mactividad','mproductos_list','responsables_list','mactividads_list','frecuencias_list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMactividadRequest $request, $id)
    {
        $mactividad = Mactividad::findOrFail($id);

        $mactividad->fill($request->all());

        $mactividad->save();

        $messenge = trans('db_oper_result.update_ok');

        Session::flash('operp_ok',$messenge);

        Session::flash('class_oper','success');

        return redirect()->route('mactividads.edit',$id);
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

        $mactividad = Mactividad::findOrFail($id);
        $mactividad->delete();

        $operation= 'delete';
        $messenge = trans('db_oper_result.delete_ok');

        if($request->ajax()){

            return response()->json([
                "messenge"=>$messenge,
                "operation"=>$operation,
            ]);

        }

        Session::flash('operp_ok',$messenge.' -> ('.$poa->descripcion.')');

        return redirect()->route('mactividads.index');
    }
}
