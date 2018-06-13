<?php

namespace App\Http\Controllers\Poa\Crud\presupuestarias;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//validation request
use App\Http\Requests\Poa\presupuestarias\CreatePresupuestariaRequest;
use App\Http\Requests\Poa\presupuestarias\UpdatePresupuestariaRequest;

//Helpers
// use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

//models
// use App\Models\poa\Direccion;
// use App\Models\poa\Poa;
use App\Models\poa\objetivo\Mobjetivo;
use App\Models\poa\presupuestaria\Presupuestaria;
use App\Models\sys\SelectOpt;

class PresupuestariaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $presupuestarias = Presupuestaria::OrderBy('presupuestarias.id','DESC')
            // ->join('users', 'users.id', '=', 'poas.user_id')
            ->with('mobjetivo')
            ->get();

        // dd($presupuestarias);

        return view('poa.presupuestarias.presupuestarias.index', compact('presupuestarias'));
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

        $asignacion_list = SelectOpt::select('select_opts.*')
            ->where('table','presupuestarias')
            ->where('view','presupuestarias.create')
            // ->orderby('value')
            ->pluck('name','value');

        // dd($mobjetivos_list);

        return view('poa.presupuestarias.presupuestarias.create', compact('mobjetivos_list','asignacion_list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePresupuestariaRequest $request)
    {
        $presupuestaria = Presupuestaria::create($request->all());

        Session::flash('operp_ok','Registro guardado exitasamente');

        return redirect()->route('presupuestarias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $presupuestaria = Presupuestaria::OrderBy('presupuestarias.id','DESC')
            // ->join('users', 'users.id', '=', 'poas.user_id')
            ->with('mobjetivo')
            ->where('id',$id)
            ->first();

        return view('poa.presupuestarias.presupuestarias.show', compact('presupuestaria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $presupuestaria = Presupuestaria::OrderBy('presupuestarias.id','DESC')
            // ->join('users', 'users.id', '=', 'poas.user_id')
            ->with('mobjetivo')
            ->where('id',$id)
            ->first();

        $asignacion_list = SelectOpt::select('select_opts.*')
            ->where('table','presupuestarias')
            ->where('view','presupuestarias.create')
            // ->orderby('value')
            ->pluck('name','value');

        $mobjetivos_list = Mobjetivo::Select('mobjetivos.*')
                ->orderby('mobjetivos.objetivo','asc')
                ->pluck('objetivo', 'id');

        return view('poa.presupuestarias.presupuestarias.edit', compact('presupuestaria','mobjetivos_list','asignacion_list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePresupuestariaRequest $request, $id)
    {
        $presupuestaria = Presupuestaria::findOrFail($id);

        $presupuestaria->fill($request->all());

        $presupuestaria->save();

        $messenge = trans('db_oper_result.user_update_ok');

        Session::flash('operp_ok',$messenge);

        Session::flash('class_oper','success');

        return redirect()->route('presupuestarias.edit',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $presupuestaria = Presupuestaria::findOrFail($id);
        $presupuestaria->delete();

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
