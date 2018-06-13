<?php

namespace App\Http\Controllers\Poa\Crud\productos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//validation request
use App\Http\Requests\Poa\productos\CreatePsupuestoRequest;
use App\Http\Requests\Poa\productos\UpdatePsupuestoRequest;

//Helpers
// use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

//models
use App\Models\poa\producto\Mproducto;
use App\Models\poa\producto\Psupuesto;

class PsupuestoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $psupuestos = Psupuesto::OrderBy('psupuestos.id','DESC')
            // ->join('users', 'users.id', '=', 'poas.user_id')
            ->with('mproducto')
            ->get();

        // dd($psupuestos);

        return view('poa.mproductos.psupuestos.index', compact('psupuestos'));
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

        return view('poa.mproductos.psupuestos.create', compact('mproductos_list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePsupuestoRequest $request)
    {
        $psupuesto = Psupuesto::create($request->all());

        Session::flash('operp_ok','Registro guardado exitasamente');

        return redirect()->route('psupuestos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $psupuesto = Psupuesto::OrderBy('psupuestos.id','DESC')
            // ->join('users', 'users.id', '=', 'poas.user_id')
            ->with('mproducto')
            ->where('id',$id)
            ->first();

        // dd($psupuesto);

        return view('poa.mproductos.psupuestos.show', compact('psupuesto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $psupuesto = Psupuesto::OrderBy('psupuestos.id','DESC')
            // ->join('users', 'users.id', '=', 'poas.user_id')
            ->with('mproducto')
            ->where('id',$id)
            ->first();
        $mproductos_list = Mproducto::Select('mproductos.*')
                ->orderby('mproductos.producto','asc')
                ->pluck('producto', 'id');

        return view('poa.mproductos.psupuestos.edit', compact('psupuesto','mproductos_list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePsupuestoRequest $request, $id)
    {
        $psupuesto = Psupuesto::findOrFail($id);

        $psupuesto->fill($request->all());

        $psupuesto->save();

        $messenge = trans('db_oper_result.user_update_ok');

        Session::flash('operp_ok',$messenge);

        Session::flash('class_oper','success');

        return redirect()->route('psupuestos.edit',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $psupuesto = Psupuesto::findOrFail($id);
        $psupuesto->delete();

        $operation= 'delete';
        $messenge = trans('db_oper_result.delete_ok');

        if($request->ajax()){

            return response()->json([
                "messenge"=>$messenge,
                "operation"=>$operation,
            ]);

        }

        Session::flash('operp_ok',$messenge);

        return redirect()->route('psupuestos.index');
    }
}
