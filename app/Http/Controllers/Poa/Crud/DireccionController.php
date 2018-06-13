<?php

namespace App\Http\Controllers\Poa\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//validation request
use App\Http\Requests\Poa\CreateDireccionRequest;
use App\Http\Requests\Poa\UpdateDireccionRequest;

//Helpers
// use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

//models
use App\Models\poa\Institucion;
use App\Models\poa\Direccion;
// use App\Models\poa\Poa;
// use App\Models\poa\Mlogico;
// use App\Models\poa\problema\Mproblema;
// use App\User;

class DireccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $direccions = Direccion::OrderBy('direccions.id','DESC')
            // ->join('users', 'users.id', '=', 'direccions.user_id')
            ->with('institucion')
            ->get();
        // dd($direccions);

        return view('poa.direccions.index', compact('direccions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $institucions_list = Institucion::select('institucions.id','institucions.nombre')
                ->orderby('institucions.nombre','asc')
                ->pluck('nombre', 'id');

        return view('poa.direccions.create', compact('institucions_list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateDireccionRequest $request)
    {
        $direccion = Direccion::create($request->all());

        Session::flash('operp_ok','Registro guardado exitasamente');

        return redirect()->route('direccions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $direccion = Direccion::findOrFail($id);

        $institucion = Institucion::Where('id',$direccion->institucion_id)->first();

        // dd($poa,$mlogicos,$mproblemas,$user);

        return view('poa.direccions.show',compact('direccion','institucion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $direccion = Direccion::findOrFail($id);
        $institucions_list = Institucion::select('institucions.*')
                ->orderby('institucions.nombre','asc')
                ->pluck('nombre', 'id');

        // dd($poa,$mlogicos,$mproblemas,$user);

        return view('poa.direccions.edit',compact('direccion','institucions_list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDireccionRequest $request, $id)
    {
        $direccion = Direccion::findOrFail($id);

        $direccion->fill($request->all());

        $direccion->save();

        $messenge = trans('db_oper_result.user_update_ok');

        Session::flash('operp_ok',$messenge);

        Session::flash('class_oper','success');

        return redirect()->route('direccions.edit',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $direccion = Direccion::findOrFail($id);
        $direccion->delete();

        $operation= 'delete';
        $messenge = trans('db_oper_result.delete_ok');

        if($request->ajax()){

            return response()->json([
                "messenge"=>$messenge,
                "operation"=>$operation,
            ]);

        }

        Session::flash('operp_ok',$messenge.' -> ('.$poa->descripcion.')');

        return redirect()->route('direccions.index');
    }
}
