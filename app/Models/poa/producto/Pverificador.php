<?php

namespace App\Models\poa\producto;

use Illuminate\Database\Eloquent\Model;

class Pverificador extends Model
{
    protected $fillable = [
        'mproducto_id', 'verificador'
    ];


    /*INI relaciones entre modelos*/
    public function mproducto()
    {
        return $this->belongsTo('App\Models\poa\producto\Mproducto');
    }
    /*FIN relaciones entre modelos*/

    public function getTruncVerificadorAttribute()
    {
        $string = $this->verificador;
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
