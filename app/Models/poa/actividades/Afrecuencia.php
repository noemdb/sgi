<?php

namespace App\Models\poa\actividades;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Afrecuencia extends Model
{
    protected $fillable = [
        'mactividad_id', 'cantidad', 'lapso' /*,'finicial', 'ffinal'*/
    ];


    /*INI relaciones entre modelos*/
    public function mactividad()
    {
        return $this->belongsTo('App\Models\poa\actividades\Mactividad');
    }
    /*FIN relaciones entre modelos*/

    public function getNomLapsoAttribute()
    {
        switch ($this->lapso) {
            case '1': return '1er'; break;
            case '2': return '2do'; break;
            case '3': return '3er'; break;
            case '4': return '4to'; break;
            case '5': return '5to'; break;
            case '6': return '6to'; break;
            case '7': return '7mo'; break;
            case '8': return '8vo'; break;
            case '9': return '9no'; break;
            case '10': return '10mo'; break;
            case '11': return '11vo'; break;
            case '12': return '12vo'; break;
            default: return $this->frecuencia;break;
        }

    }

    //1er trimestre
    public function getTriemestre1erAttribute()
    {
        $ano = substr($this->finicial, 0, 4);
        $finicial = new Carbon($this->finicial);
        $lapsos= ['ini_1er'=> new Carbon($ano.'0101'),'fin_1er'=> new Carbon($ano.'0331')];
        if ($finicial->gte($lapsos['ini_1er']) && $finicial->lte($lapsos['fin_1er']))
            // return true;
            return $this->frecuencia;

        return false;
    }

    //2do trimestre
    public function getTriemestre2doAttribute()
    {
        $ano = substr($this->finicial, 0, 4);
        $finicial = new Carbon($this->finicial);
        $lapsos= ['ini_1er'=> new Carbon($ano.'0401'),'fin_1er'=> new Carbon($ano.'0630')];
        if ($finicial->gte($lapsos['ini_1er']) && $finicial->lte($lapsos['fin_1er']))
            // return true;
            return $this->frecuencia;

        return false;
    }

    //3er trimestre
    public function getTriemestre3erAttribute()
    {
        $ano = substr($this->finicial, 0, 4);
        $finicial = new Carbon($this->finicial);
        $lapsos= ['ini_1er'=> new Carbon($ano.'0701'),'fin_1er'=> new Carbon($ano.'0930')];
        if ($finicial->gte($lapsos['ini_1er']) && $finicial->lte($lapsos['fin_1er']))
            // return true;
            return $this->frecuencia;

        return false;
    }

    //4to trimestre
    public function getTriemestre4toAttribute()
    {
        $ano = substr($this->finicial, 0, 4);
        $finicial = new Carbon($this->finicial);
        $lapsos= ['ini_1er'=> new Carbon($ano.'1001'),'fin_1er'=> new Carbon($ano.'1231')];
        if ($finicial->gte($lapsos['ini_1er']) && $finicial->lte($lapsos['fin_1er']))
            // return true;
            return $this->frecuencia;

        return false;
    }

    public static function findByFrecuencia($mactividad_id)
	{
	    $afrecuencia = static::where('mactividad_id', $mactividad_id)->get();

	    // dd($afrecuencia);

	    // $ano = substr($this->finicial, 0, 4);

	    return $afrecuencia;
	}

}
