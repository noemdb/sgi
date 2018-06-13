<?php

namespace App\Http\Controllers\Poa\Crud\productos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//validation request
use App\Http\Requests\Poa\productos\CreateMproductoRequest;
use App\Http\Requests\Poa\productos\UpdateMproductoRequest;

//Helpers
// use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

//models
// use App\Models\poa\Direccion;
// use App\Models\poa\Poa;
use App\Models\poa\objetivo\Mobjetivo;
use App\Models\poa\producto\Mproducto;


class MproductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mproductos = Mproducto::OrderBy('mproductos.id','DESC')
            // ->join('users', 'users.id', '=', 'poas.user_id')
            ->with('mobjetivo')
            ->get();

        // dd($mproductos);

        return view('poa.mproductos.mproductos.index', compact('mproductos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mobjetivos_list = Mobjetivo::Select('mobjetivos.*')
                ->orderby('mobjetivos.objetivo','asc')
                ->pluck('objetivo', 'id');

        // dd($mobjetivos_list);

        return view('poa.mproductos.mproductos.create', compact('mobjetivos_list'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateMproductoRequest $request)
    {
        $mproducto = Mproducto::create($request->all());

        Session::flash('operp_ok','Registro guardado exitasamente');

        return redirect()->route('mproductos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mproducto = Mproducto::OrderBy('mproductos.id','DESC')
            // ->join('users', 'users.id', '=', 'poas.user_id')
            ->with('mobjetivo')
            ->where('id',$id)
            ->first();

        return view('poa.mproductos.mproductos.show', compact('mproducto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mproducto = Mproducto::OrderBy('mproductos.id','DESC')
            // ->join('users', 'users.id', '=', 'poas.user_id')
            ->with('mobjetivo')
            ->where('id',$id)
            ->first();

        $mobjetivos_list = Mobjetivo::Select('mobjetivos.*')
                ->orderby('mobjetivos.objetivo','asc')
                ->pluck('objetivo', 'id');

        return view('poa.mproductos.mproductos.edit', compact('mproducto','mobjetivos_list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMproductoRequest $request, $id)
    {
        $mproducto = Mproducto::findOrFail($id);

        $mproducto->fill($request->all());

        $mproducto->save();

        $messenge = trans('db_oper_result.user_update_ok');

        Session::flash('operp_ok',$messenge);

        Session::flash('class_oper','success');

        return redirect()->route('mproductos.edit',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $mproducto = Mproducto::findOrFail($id);
        $mproducto->delete();

        $operation= 'delete';
        $messenge = trans('db_oper_result.delete_ok');

        if($request->ajax()){

            return response()->json([
                "messenge"=>$messenge,
                "operation"=>$operation,
            ]);

        }

        Session::flash('operp_ok',$messenge);

        return redirect()->route('presupuestarias.index');
    }
}
