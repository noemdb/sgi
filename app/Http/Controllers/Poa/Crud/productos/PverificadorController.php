<?php

namespace App\Http\Controllers\Poa\Crud\productos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//validation request
use App\Http\Requests\Poa\productos\CreatePverificadorRequest;
use App\Http\Requests\Poa\productos\UpdatePverificadorRequest;

//Helpers
// use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

//models
use App\Models\poa\producto\Mproducto;
use App\Models\poa\producto\Pverificador;

class PverificadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pverificadors = Pverificador::OrderBy('pverificadors.id','DESC')
            // ->join('users', 'users.id', '=', 'poas.user_id')
            ->with('mproducto')
            ->get();

        // dd($pverificadors);

        return view('poa.mproductos.pverificadors.index', compact('pverificadors'));
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

        // dd($mproductos_list);

        return view('poa.mproductos.pverificadors.create', compact('mproductos_list'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePverificadorRequest $request)
    {
        $pverificador = Pverificador::create($request->all());

        Session::flash('operp_ok','Registro guardado exitasamente');

        return redirect()->route('pverificadors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pverificador = Pverificador::OrderBy('pverificadors.id','DESC')
            // ->join('users', 'users.id', '=', 'poas.user_id')
            ->with('mproducto')
            ->where('id',$id)
            ->first();

        // dd($pverificador);

        return view('poa.mproductos.pverificadors.show', compact('pverificador'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pverificador = Pverificador::OrderBy('pverificadors.id','DESC')
            // ->join('users', 'users.id', '=', 'poas.user_id')
            ->with('mproducto')
            ->where('id',$id)
            ->first();
        $mproductos_list = Mproducto::Select('mproductos.*')
                ->orderby('mproductos.producto','asc')
                ->pluck('producto', 'id');

        return view('poa.mproductos.pverificadors.edit', compact('pverificador','mproductos_list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePverificadorRequest $request, $id)
    {
        $pverificador = Pverificador::findOrFail($id);

        $pverificador->fill($request->all());

        $pverificador->save();

        $messenge = trans('db_oper_result.user_update_ok');

        Session::flash('operp_ok',$messenge);

        Session::flash('class_oper','success');

        return redirect()->route('pverificadors.edit',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $pverificador = Pverificador::findOrFail($id);
        $pverificador->delete();

        $operation= 'delete';
        $messenge = trans('db_oper_result.delete_ok');

        if($request->ajax()){

            return response()->json([
                "messenge"=>$messenge,
                "operation"=>$operation,
            ]);

        }

        Session::flash('operp_ok',$messenge);

        return redirect()->route('pverificadors.index');
    }
}
