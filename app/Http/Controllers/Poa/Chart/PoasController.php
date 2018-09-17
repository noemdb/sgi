<?php

namespace App\Http\Controllers\Poa\Chart;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Helpers
use Illuminate\Support\Carbon;
use Jenssegers\Date\Date;
use Illuminate\Support\Facades\DB;

// Modelos adicionadas
use App\Models\poa\Poa;
use App\Models\poa\actividades\Mactividad;

class PoasController extends Controller
{

    public function index()
    {        
        return view('poa.poas.charts');
    }
 
    public function PoaActividad(Request $request)
    {
        $range = ($request->input('range')!=null) ? $request->input('range') : 'Todos';
        $limit = ($request->input('limit')!=null) ? $request->input('limit') : 8;

        if($range=='Todos'){
            $finicial = Carbon::now()->SubYear(10);
            $ffinal = Carbon::now()->AddYear(10);
        }else{
            $finicial = Carbon::now()->subMonth($range);
            $ffinal = Carbon::now();
        }

        $poas = Poa::getActPoa($finicial,$ffinal,$limit); // return cod_poa,poa_id,value

        // dd($poas);

        // $labels = $poas->pluck('fullcode');
        foreach ($poas as $poa) {
            $labels [] = $poa->fullcode;
        }
        $poa_id = $poas->pluck('id');

        // dd($labels, $poa_id);

        $poas_iniciadas = Mactividad::getCountPoa($poa_id,$finicial,$ffinal,'INICIADA');
        $poas_finalizadas = Mactividad::getCountPoa($poa_id,$finicial,$ffinal,'FINALIZADA');
        $poas_reprogramadas = Mactividad::getCountPoa($poa_id,$finicial,$ffinal,'REPROGRAMADA');
        $poas_asignadas = Mactividad::getCountPoa($poa_id,$finicial,$ffinal,'');

        // dd($poas_iniciadas,$poas_finalizadas,$poas_reprogramadas,$poas_asignadas);

        if($poa_id->count()>0){

            unset($ChartDataSQL);
            $ChartDataSQL = [
                'labels'=>$labels,
                'datasets'=>[
                    [
                        "label"=>"Iniciadas",
                        "backgroundColor"=>"rgba(245,105,84,1)",
                        "borderColor"=>"rgba(245,105,84,1)",
                        "borderWidth"=>1,
                        "data"=>$poas_iniciadas
                    ],
                    [
                        "label"=>"Finalizadas",
                        "backgroundColor"=>"rgba(0,166,90,1)",
                        "borderColor"=>"rgba(0,166,90,1)",
                        "borderWidth"=>1,
                        "data"=>$poas_finalizadas
                    ],
                    [
                        "label"=>"Reprogramadas",
                        "backgroundColor"=>"rgba(0,50,100,1)",
                        "borderColor"=>"rgba(0,50,100,1)",
                        "borderWidth"=>1,
                        "data"=>$poas_reprogramadas
                    ],
                    [
                        "label"=>"Asignadas",
                        "backgroundColor"=>"rgba(0,192,239,1)",
                        "borderColor"=>"rgba(0,192,239,1)",
                        "borderWidth"=>1,
                        "data"=>$poas_asignadas
                    ]
                ]
            ];

            return json_encode($ChartDataSQL);

        }
        
    }

}
