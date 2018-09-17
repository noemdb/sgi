<?php

namespace App\Http\Controllers\Poa\Chart;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Helpers
use Illuminate\Support\Carbon;
use Jenssegers\Date\Date;
use Illuminate\Support\Facades\DB;

use App\Models\poa\Poa;
use App\Models\poa\actividades\Mactividad;

class MactividadController extends Controller
{
    public function index()
    {        
        return view('poa.mactividads.mactividads.charts');
    }

    public function ActivMonths(Request $request)
    {
        $range = ($request->input('range')!=null) ? $request->input('range') : 'Todos';

        if ($range=='Todos') {
            $finicial = Carbon::now()->SubYear(10);
            $ffinal = Carbon::now()->AddYear(10);
        }else{
            $finicial = Carbon::now()->subMonth($range);
            $ffinal = Carbon::now();
        }

        // dd($finicial,$ffinal);

        $month = Mactividad::select(DB::raw('count(id) as value'),DB::raw('MONTH(finicial) as month'))
            ->Where('finicial', '>=', $finicial)
            ->Where('finicial', '<=', $ffinal)
            ->groupby('month')
            ->orderBy('month', 'asc');
            // ->get();

        // dd($month);

        //INI nombre de los meses en español
        $labels = $month->pluck('month');
        foreach ($labels as $key => $value) {
            $dateObj   = Date::createFromFormat('!m', $value);
            $label_month[] = ucfirst($dateObj->format('F'));
        }
        $values = $month->pluck('value');
        //FIN nombre de los meses en español

        for ($i=0; $i < count($labels) ; $i++) {
        	$colors[] = 'rgba('.rand(0,255).', '.rand(0,255).', '.rand(0,255).', 1)';
        }

        $ChartDataSQL = [
            'labels'=>$label_month,
            'datasets'=>[
                [
                    "label"=>"Act.Registrados",
                    "backgroundColor"=>$colors,
                    "borderColor"=>$colors,
                    "borderWidth"=>2,
                    "data"=>$values
                ]
            ]
        ];

        return json_encode($ChartDataSQL);
    }

    public function ActivResp(Request $request)
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

		$mactividads = Mactividad::getActRes($finicial,$ffinal,$limit); // return username,user_id,value

        $labels = $mactividads->pluck('nombre');
		$responsable_id = $mactividads->pluck('responsable_id');

        $activ_iniciadas = Mactividad::getCountTotal($responsable_id,$finicial,$ffinal,'INICIADA');
        $activ_finalizadas = Mactividad::getCountTotal($responsable_id,$finicial,$ffinal,'FINALIZADA');
        $activ_reprogramadas = Mactividad::getCountTotal($responsable_id,$finicial,$ffinal,'REPROGRAMADA');
        $activ_asignadas = Mactividad::getCountTotal($responsable_id,$finicial,$ffinal,'');

		unset($ChartDataSQL);
		$ChartDataSQL = [
			'labels'=>$labels,
			'datasets'=>[
				[
	                "label"=>"Iniciadas",
	                "backgroundColor"=>"rgba(245,105,84,1)",
	                "borderColor"=>"rgba(245,105,84,1)",
                    "borderWidth"=>1,
	                "data"=>$activ_iniciadas
                ],
                [
	                "label"=>"Finalizadas",
	                "backgroundColor"=>"rgba(0,166,90,1)",
	                "borderColor"=>"rgba(0,166,90,1)",
                    "borderWidth"=>1,
	                "data"=>$activ_finalizadas
                ],
                [
	                "label"=>"Reprogramadas",
	                "backgroundColor"=>"rgba(0,50,100,1)",
	                "borderColor"=>"rgba(0,50,100,1)",
                    "borderWidth"=>1,
	                "data"=>$activ_reprogramadas
                ],
                [
	                "label"=>"Asignadas",
	                "backgroundColor"=>"rgba(0,192,239,1)",
	                "borderColor"=>"rgba(0,192,239,1)",
                    "borderWidth"=>1,
	                "data"=>$activ_asignadas
                ]
            ]
        ];

		// dd($tasks);

		return json_encode($ChartDataSQL);
	}

    public function ActivEstado(Request $request)
    {

        $range = ($request->input('range')!=null) ? $request->input('range') : 'Todos';
        $limit = ($request->input('limit')!=null) ? $request->input('limit') : 8;

        if($range=='Todos'){
            $finicial = Carbon::now()->SubYear(1000);
            $ffinal = Carbon::now()->AddYear(1000);
        }else{
            $finicial = Carbon::now()->subMonth($range);
            $ffinal = Carbon::now();
        }       

        $estados = Mactividad::select('aestados.estado as estado', DB::raw('count(aestados.estado) as value'))
            ->join('aestados', 'mactividads.id', '=', 'aestados.mactividad_id')
            ->Where('aestados.created_at', '>=', $finicial)
            ->Where('aestados.created_at', '<=', $ffinal)
            ->groupby('aestados.estado')
            ->orderBy('aestados.estado', 'asc')
            ->get()
            ->take($limit);

        //dd($estados);//to-do corregir, los estados contabilizado deben ser uno por usuario (el mas reciente)

        if($estados->count()>0){

            $labels = $estados->pluck('estado');
            $values = $estados->pluck('value');

            for ($i=0; $i < count($labels) ; $i++) { 
                $colors[] = 'rgba('.rand(0,255).', '.rand(0,255).', '.rand(0,255).', 1)';
            }

            unset($ChartDataSQL);
            //tipo pie
            $ChartDataSQL = [
                'labels'=>$labels,
                'datasets'=>[
                    [
                        "label"=>"Actividades por Estado",
                        "backgroundColor"=>$colors,
                        "borderColor"=>"rgba(0, 0, 0,0.2)",
                        "data"=>$values
                    ]
                ]
            ];

            return json_encode($ChartDataSQL);

        }

    }

}
