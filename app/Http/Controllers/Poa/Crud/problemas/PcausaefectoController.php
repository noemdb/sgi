<?php

namespace App\Http\Controllers\Poa\Crud\problemas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//validation request
use App\Http\Requests\Poa\mproblemas\CreatePcausaefectoRequest;
use App\Http\Requests\Poa\mproblemas\UpdatePcausaefectoRequest;

//Helpers
// use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

//models
// use App\Models\poa\Direccion;
// use App\Models\poa\Poa;
use App\Models\poa\problema\Pcausaefecto;
use App\Models\poa\problema\Mproblema;

class PcausaefectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pcausaefectos = Pcausaefecto::OrderBy('pcausaefectos.id','DESC')
            // ->join('users', 'users.id', '=', 'poas.user_id')
            ->with('Mproblema')
            ->get();

        // dd($pdeterminates);

        return view('poa.mproblemas.pcausaefectos.index', compact('pcausaefectos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mproblemas_list = Mproblema::Select('mproblemas.*')
                ->orderby('mproblemas.problema','asc')
                ->pluck('problema', 'id');

        return view('poa.mproblemas.pcausaefectos.create', compact('mproblemas_list'));
    }

    public function createWithid($mproblema_id)
    {
        $mproblemas_list = Mproblema::Select('mproblemas.*')
                ->where('id',$mproblema_id)
                ->orderby('mproblemas.problema','asc')
                ->pluck('problema', 'id');

        // $mproblema_id = $id;

        return view('poa.mproblemas.pcausaefectos.create', compact('mproblemas_list','mproblema_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePcausaefectoRequest $request)
    {
        $pcausaefecto = Pcausaefecto::create($request->all());

        Session::flash('operp_ok','Registro guardado exitasamente');

        return redirect()->route('pcausaefectos.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pcausaefecto = Pcausaefecto::OrderBy('pcausaefectos.id','DESC')
            // ->join('users', 'users.id', '=', 'poas.user_id')
            ->with('Mproblema')
            ->where('id',$id)
            ->first();

        return view('poa.mproblemas.pcausaefectos.show', compact('pcausaefecto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pcausaefecto = Pcausaefecto::OrderBy('pcausaefectos.id','DESC')
            // ->join('users', 'users.id', '=', 'poas.user_id')
            ->with('Mproblema')
            ->where('id',$id)
            ->first();

        $mproblemas_list = Mproblema::Select('mproblemas.*')
                ->orderby('mproblemas.problema','asc')
                ->pluck('problema', 'id');

        return view('poa.mproblemas.pcausaefectos.edit', compact('pcausaefecto','mproblemas_list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePcausaefectoRequest $request, $id)
    {
        $pcausaefecto = Pcausaefecto::findOrFail($id);

        $pcausaefecto->fill($request->all());

        $pcausaefecto->save();

        $messenge = trans('db_oper_result.user_update_ok');

        Session::flash('operp_ok',$messenge);

        Session::flash('class_oper','success');

        return redirect()->route('pcausaefectos.edit',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $pcausaefecto = Pcausaefecto::findOrFail($id);
        $pcausaefecto->delete();

        $operation= 'delete';
        $messenge = trans('db_oper_result.delete_ok');

        if($request->ajax()){

            return response()->json([
                "messenge"=>$messenge,
                "operation"=>$operation,
            ]);

        }

        Session::flash('operp_ok',$messenge);

        return redirect()->route('mproblemas.index');
    }
}
