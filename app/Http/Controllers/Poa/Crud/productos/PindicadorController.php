<?php

namespace App\Http\Controllers\Poa\Crud\productos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//validation request
use App\Http\Requests\Poa\productos\CreatePindicadorRequest;
use App\Http\Requests\Poa\productos\UpdatePindicadorRequest;

//Helpers
// use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

//models
use App\Models\poa\producto\Mproducto;
use App\Models\poa\producto\Pindicador;

class PindicadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pindicadors = Pindicador::OrderBy('pindicadors.id','DESC')
            // ->join('users', 'users.id', '=', 'poas.user_id')
            ->with('mproducto')
            ->get();

        // dd($pindicadors);

        return view('poa.mproductos.pindicadors.index', compact('pindicadors'));
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

        return view('poa.mproductos.pindicadors.create', compact('mproductos_list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePindicadorRequest $request)
    {
        $pindicador = Pindicador::create($request->all());

        Session::flash('operp_ok','Registro guardado exitasamente');

        return redirect()->route('pindicadors.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pindicador = Pindicador::OrderBy('pindicadors.id','DESC')
            // ->join('users', 'users.id', '=', 'poas.user_id')
            ->with('mproducto')
            ->where('id',$id)
            ->first();

        // dd($pindicador);

        return view('poa.mproductos.pindicadors.show', compact('pindicador'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pindicador = Pindicador::OrderBy('pindicadors.id','DESC')
            // ->join('users', 'users.id', '=', 'poas.user_id')
            ->with('mproducto')
            ->where('id',$id)
            ->first();
        $mproductos_list = Mproducto::Select('mproductos.*')
                ->orderby('mproductos.producto','asc')
                ->pluck('producto', 'id');

        return view('poa.mproductos.Pindicadors.edit', compact('pindicador','mproductos_list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePindicadorRequest $request, $id)
    {
        $pindicador = Pindicador::findOrFail($id);

        $pindicador->fill($request->all());

        $pindicador->save();

        $messenge = trans('db_oper_result.user_update_ok');

        Session::flash('operp_ok',$messenge);

        Session::flash('class_oper','success');

        return redirect()->route('pindicadors.edit',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $pindicador = Pindicador::findOrFail($id);
        $pindicador->delete();

        $operation= 'delete';
        $messenge = trans('db_oper_result.delete_ok');

        if($request->ajax()){

            return response()->json([
                "messenge"=>$messenge,
                "operation"=>$operation,
            ]);

        }

        Session::flash('operp_ok',$messenge);

        return redirect()->route('pindicadors.index');
    }
}
