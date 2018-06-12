<?php

namespace App\Models\poa\producto;

use Illuminate\Database\Eloquent\Model;

class Psupuesto extends Model
{

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'mproducto_id', 'supuesto'
    ];


    /*INI relaciones entre modelos*/
    public function mproducto()
    {
        return $this->belongsTo('App\Models\poa\producto\Mproducto');
    }
    /*FIN relaciones entre modelos*/

    public function getTruncSupuestoAttribute()
    {
        $string = $this->supuesto;
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
