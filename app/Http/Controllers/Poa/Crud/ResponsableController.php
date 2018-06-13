<?php

namespace App\Http\Controllers\Poa\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//validation request
use App\Http\Requests\Poa\CreateResponsableRequest;
use App\Http\Requests\Poa\UpdateResponsableRequest;

//Helpers
// use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;

//models
use App\Models\poa\Direccion;
use App\Models\poa\Responsable;

class ResponsableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $responsables = Responsable::OrderBy('responsables.id','DESC')
            ->with('direccion')
            // ->with('rols')
            ->get();

        // dd($institucions);

        return view('poa.responsables.index', compact('responsables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $direccion_list = Direccion::select('direccions.*')
                ->orderby('direccions.nombre','asc')
                ->pluck('nombre', 'id');

        return view('poa.responsables.create', compact('direccion_list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateResponsableRequest $request)
    {
        $responsable = Responsable::create($request->all());

        Session::flash('operp_ok','Registro guardado exitasamente');

        return redirect()->route('responsables.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $responsable = Responsable::findOrFail($id);

        $direccions = Direccion::Where('id',$responsable->direccion_id)->first();

        // dd($institucion,$direccions,$poas);

        return view('poa.responsables.show',compact('direccions','responsable'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $responsable = Responsable::findOrFail($id);

        $direccion_list = Direccion::select('direccions.*')
                ->orderby('direccions.nombre','asc')
                ->pluck('nombre', 'id');

        // dd($institucion,$direccions,$poas);

        return view('poa.responsables.edit',compact('responsable','direccion_list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateResponsableRequest $request, $id)
    {
        $responsable = Responsable::findOrFail($id);

        $responsable->fill($request->all());

        $responsable->save();

        $messenge = trans('db_oper_result.user_update_ok');

        Session::flash('operp_ok',$messenge);

        Session::flash('class_oper','success');

        return redirect()->route('responsables.edit',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $responsable = Responsable::findOrFail($id);
        $responsable->delete();
        $operation= 'delete';
        $messenge = trans('db_oper_result.delete_ok');
        if($request->ajax()){
            return response()->json([
                "messenge"=>$messenge,
                "operation"=>$operation,
            ]);
        }
        Session::flash('operp_ok',$messenge.' -> ('.$institucion->nombre.')');

        return redirect()->route('responsables.index');
    }
}
