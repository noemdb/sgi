<?php

namespace App\Http\Controllers\Poa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\sys\Task;
use App\Models\sys\Alert;
use App\Models\poa\actividades\Mactividad;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function poa()
    {

        $tasks = Task::OrderBy('created_at', 'desc')
                    //->where('destino_user_id',\Auth::user()->id)
                    ->get();

        $alerts = Alert::OrderBy('created_at', 'desc')
                    //->where('destino_user_id',\Auth::user()->id)
                    ->get();

        $mactividads = Mactividad::select('mactividads.*','aestados.estado as estado')
            ->join('aestados', 'mactividads.id', '=', 'aestados.mactividad_id')
            ->OrderBy('mactividads.created_at', 'desc')
            //->where('destino_user_id',\Auth::user()->id)
            ->get();

        return view('poa.home',compact('tasks','alerts','mactividads'));

    }
}
