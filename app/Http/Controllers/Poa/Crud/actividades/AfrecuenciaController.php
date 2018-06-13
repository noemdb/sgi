<?php

namespace App\Http\Controllers\Poa\Crud\actividades;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//validation request
use App\Http\Requests\Poa\actividades\CreateAfrecuenciaRequest;
use App\Http\Requests\Poa\actividades\UpdateAfrecuenciaRequest;

//Helpers
// use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

//models
// use App\Models\poa\Direccion;
// use App\Models\poa\Poa;
// use App\Models\poa\Responsable;
use App\Models\poa\producto\Mproducto;
use App\Models\poa\actividades\Afrecuencia;
use App\Models\poa\actividades\Mactividad;
use App\Models\sys\SelectOpt;

class AfrecuenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $afrecuencias = Afrecuencia::OrderBy('afrecuencias.id','DESC')
            ->with('mactividad')
            ->get();

        // dd($mactividads);

        return view('poa.mactividads.afrecuencias.index', compact('afrecuencias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $afrecuencia = Afrecuencia::OrderBy('afrecuencias.id','DESC')
            ->with('mactividad')
            ->where('id',$id)
            ->first();

        // dd($mactividad);

        return view('poa.mactividads.afrecuencias.show', compact('afrecuencia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $afrecuencia = Afrecuencia::OrderBy('afrecuencias.id','DESC')
            ->with('mactividad')
            ->where('id',$id)
            ->first();

        $mactividads_list = Mactividad::Select('mactividads.*')
                ->orderby('mactividads.id','asc')
                ->pluck('descripcion', 'id');

        $lapsos_list = SelectOpt::select('select_opts.*')
            ->where('table','afrecuencias')
            ->where('view','afrecuencias.create')
            // ->orderby('value')
            ->pluck('name','value');

        return view('poa.mactividads.afrecuencias.edit', compact('afrecuencia','mactividads_list', 'lapsos_list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAfrecuenciaRequest $request, $id)
    {
        $afrecuencia = Afrecuencia::findOrFail($id);

        $afrecuencia->fill($request->all());

        $afrecuencia->save();

        $messenge = trans('db_oper_result.update_ok');

        Session::flash('operp_ok',$messenge);

        Session::flash('class_oper','success');

        return redirect()->route('afrecuencias.edit',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
