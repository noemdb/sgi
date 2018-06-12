<?php

namespace App\Models\poa\presupuestaria;

use Illuminate\Database\Eloquent\Model;

class Presupuestaria extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'mobjetivo_id', 'descripcion'
    ];

    /*INI relaciones entre modelos*/
    public function mobjetivo()
    {
        return $this->belongsTo('App\Models\poa\objetivo\Mobjetivo');
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
}
