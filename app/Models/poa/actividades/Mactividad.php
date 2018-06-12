<?php

namespace App\Models\poa\actividades;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

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
