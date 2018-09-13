<?php

namespace App\Models\poa\actividades;

use Illuminate\Database\Eloquent\Model;

// Helpers
use Illuminate\Support\Carbon;
use Jenssegers\Date\Date;
use Illuminate\Support\Facades\DB;

// Modelos
use App\User;

class Mactividad extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'mproducto_id', 'responsable_id','ractividada_id', 'descripcion','ubicaion', 'finicial', 'ffinal', 'frecuencia'
    ];

    /*INI relaciones entre modelos*/
    public function mproducto()
    {
        return $this->belongsTo('App\Models\poa\producto\Mproducto');
    }
    public function responsable()
    {
        return $this->belongsTo('App\Models\poa\Responsable');
    }
    public function aestados()
    {
        return $this->hasMany('App\Models\poa\actividades\Aestado');
    }
    public function afrecuencias()
    {
        return $this->hasMany('App\Models\poa\actividades\Afrecuencia');
    }
    /*FIN relaciones entre modelos*/

    public static function getActRes($finicial,$ffinal,$limit=10)
    {
        $data = Mactividad::select('responsables.nombre','mactividads.responsable_id',DB::raw('count(mactividads.id) as count'))
          ->join('responsables', 'responsables.id', '=', 'mactividads.responsable_id')
          ->Where('mactividads.created_at', '>=', $finicial)
          ->Where('mactividads.created_at', '<=', $ffinal)
          ->groupby('responsables.id')
          ->orderBy('count', 'desc')
          ->get()
          ->take($limit);

        return ($data) ? $data : 0;
    }


    public static function getCountTotal($arr_user_id,$finicial,$ffinal, $estado)
    {
        //INI array con los totales de las mactividads
        foreach ($arr_user_id as $key => $value) {
            $mactividads =
                Mactividad::join('aestados', 'mactividads.id', '=', 'aestados.mactividad_id')
                    ->Where('mactividads.created_at', '>=', $finicial)
                    ->where('mactividads.created_at', '<=', $ffinal)
                    ->where('aestados.estado', 'like', '%'.$estado.'%')
                    ->where('mactividads.responsable_id',$value)
                    ->groupBy('mactividads.responsable_id')
                    // ->orderby('aestados.created_at','desc')
                    ->get([ DB::raw('COUNT(*) as value') ]);
            // dd($mactividads);
            if( $mactividads->count()>0){
              $arr_total[] = $mactividads->first()->value;
            }
        }
        //FIN array con los totales de las mactividads

        return (isset($arr_total)) ? $arr_total : 0;
    }

    public function getTruncDescripcionAttribute()
    {
        $string = $this->descripcion;
        $length = 15;
        $ellipsis = "...";
        $words = explode(' ', $string);
        if (count($words) > $length){
            return implode(' ', array_slice($words, 0, $length)) ." ". $ellipsis;
        }
        else{
            return $string;
        }
    }

    public function getClassAttribute()
    {      
        $estado = Aestado::where('mactividad_id',$this->id)
                ->orderby('mactividad_id','desc')
                ->first();

        // dd($estado);

        switch ($estado->estado) {
            case 'INICIADA':
                $class = 'primary'; break;
            case 'FINALIZADA':
                $class = 'success'; break;
            case 'REPROGRAMADA':
                $class = 'info'; break;
            default:
                $class = 'default'; break;
        }

        return $class;
    }

    public function getNomFrecuenciaAttribute()
    {
        switch ($this->frecuencia) {
            case '1': return 'Anual'; break;
            case '2': return 'Semestral'; break;
            case '3': return 'Cuatrimestral'; break;
            case '4': return 'Trimestral'; break;
            case '6': return 'Bimestral'; break;
            case '12': return 'Mensual'; break;
            default: return $this->frecuencia; break;
        }

    }

    public function getUniFrecuenciaAttribute()
    {
        switch ($this->frecuencia) {
            case '1': return 'Año'; break;
            case '2': return 'Semestre'; break;
            case '3': return 'Cuatrimestre'; break;
            case '4': return 'Trimestre'; break;
            case '6': return 'Bimes'; break;
            case '12': return 'Mes'; break;            
            default: return $this->frecuencia; break;
        }

    }

}
