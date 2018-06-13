<?php

namespace App\Http\Controllers\Poa\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//validation request
use App\Http\Requests\Poa\CreatePoaRequest;
use App\Http\Requests\Poa\UpdatePoaRequest;

//Helpers
// use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

//models
use App\Models\poa\Institucion;
use App\Models\poa\Direccion;
use App\Models\poa\Poa;
use App\Models\poa\Mlogico;
use App\Models\poa\problema\Mproblema;
use App\Models\poa\problema\Pdeterminante;
use App\User;


class PoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $poas = Poa::OrderBy('poas.id','DESC')
            // ->join('users', 'users.id', '=', 'poas.user_id')
            // ->with('profile')
            ->get();

        // dd($poas);

        return view('poa.poas.index', compact('poas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User;
        $institucions_list = Institucion::select('institucions.*')
                ->orderby('institucions.nombre','asc')
                ->pluck('nombre', 'id');

        return view('poa.poas.create', compact('institucions_list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePoaRequest $request)
    {
        $poa = Poa::create($request->all());

        Session::flash('operp_ok','Registro guardado exitasamente');

        return redirect()->route('poas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $poa = Poa::findOrFail($id);

        $user = User::Where('id',$poa->user_id)->first();

        // dd($poa,$mlogicos,$mproblemas,$user);

        return view('poa.poas.show',compact('poa','user'));
    }


    public function showFull($id) {

        // dd($id);

        $poa = Poa::findOrFail($id);

        $user = User::Where('id',$poa->user_id)->first();

        $mlogicos = Mlogico::Where('poa_id',$poa->id)->get();

        $direccions = Direccion::Where('institucion_id',$poa->institucion_id)
            ->orderby('id','asc')
            ->with('mproblemas')
            ->get();

        $mproblemas = Mproblema::Where('poa_id',$poa->id)
            ->orderby('mproblemas.direccion_id','asc')
            ->with('direccion')
            ->with('pdeterminantes')
            ->with('pcausaefectos')
            ->with('mobjetivos')
            ->get();

        // dd($poa, $user, $mlogicos,$direccions, $mproblemas);

        return view('poa.poas.showfull',compact('poa','mlogicos','direccions','mproblemas','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $poa = Poa::findOrFail($id);

        $user = User::Where('id',$poa->user_id)->first();

        $mlogicos = Mlogico::Where('poa_id',$poa->id)->get();

        $mproblemas = Mproblema::Where('poa_id',$poa->id)->get();

        $institucions_list = Institucion::select('institucions.*')
                ->orderby('institucions.nombre','asc')
                ->pluck('nombre', 'id');

        // dd($poa,$mlogicos,$mproblemas,$user);

        return view('poa.poas.edit',compact('poa','mlogicos','mproblemas','user','institucions_list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePoaRequest $request, $id)
    {
        $poa = Poa::findOrFail($id);

        $poa->fill($request->all());

        $poa->save();

        $messenge = trans('db_oper_result.user_update_ok');

        Session::flash('operp_ok',$messenge);

        Session::flash('class_oper','success');

        return redirect()->route('poas.edit',$id);
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

        $poa = Poa::findOrFail($id);
        $poa->delete();

        $operation= 'delete';
        $messenge = trans('db_oper_result.delete_ok');

        if($request->ajax()){

            return response()->json([
                "messenge"=>$messenge,
                "operation"=>$operation,
            ]);

        }

        Session::flash('operp_ok',$messenge.' -> ('.$poa->descripcion.')');

        return redirect()->route('poas.index');
    }
}
