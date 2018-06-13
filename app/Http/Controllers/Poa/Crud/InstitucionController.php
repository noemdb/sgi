<?php

namespace App\Http\Controllers\Poa\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//validation request
use App\Http\Requests\Poa\CreateInstitucionRequest;
use App\Http\Requests\Poa\UpdateInstitucionRequest;

//Helpers
// use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;

//models
use App\Models\poa\Institucion;
use App\Models\poa\Direccion;
use App\Models\poa\Poa;

class InstitucionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $institucions = Institucion::OrderBy('institucions.id','DESC')
            // ->with('profile')
            // ->with('rols')
            ->get();

        // dd($institucions);

        return view('poa.institucions.index', compact('institucions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('poa.institucions.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateInstitucionRequest $request)
    {
        $institucion = Institucion::create($request->all());

        Session::flash('operp_ok','Registro guardado exitasamente');

        return redirect()->route('institucions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $institucion = Institucion::findOrFail($id);

        $direccions = Direccion::Where('institucion_id',$institucion->id)->get();

        $poas = Poa::Where('institucion_id',$institucion->id)->get();

        // dd($institucion,$direccions,$poas);

        return view('poa.institucions.show',compact('institucion','direccions','poas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $institucion = Institucion::findOrFail($id);

        $direccions = Direccion::Where('institucion_id',$institucion->id)->get();

        $poas = Poa::Where('institucion_id',$institucion->id)->get();

        // dd($institucion,$direccions,$poas);

        return view('poa.institucions.edit',compact('institucion','direccions','poas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInstitucionRequest $request, $id)
    {
        $institucion = Institucion::findOrFail($id);

        $institucion->fill($request->all());

        $institucion->save();

        $messenge = trans('db_oper_result.user_update_ok');

        Session::flash('operp_ok',$messenge);

        Session::flash('class_oper','success');

        return redirect()->route('institucions.edit',$id);
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

        $institucion = Institucion::findOrFail($id);
        // $institucion->Direccion()->delete();
        // $institucion->Poa()->delete();
        $institucion->delete();

        $operation= 'delete';
        $messenge = trans('db_oper_result.delete_ok');

        if($request->ajax()){

            return response()->json([
                "messenge"=>$messenge,
                "operation"=>$operation,
            ]);

        }

        Session::flash('operp_ok',$messenge.' -> ('.$institucion->nombre.')');

        return redirect()->route('institucions.index');
    }
}
