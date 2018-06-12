<?php

namespace App\Models\poa\problema;

use Illuminate\Database\Eloquent\Model;

class Pdeterminante extends Model
{

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'mproblema_id', 'determinante'
    ];

    /*INI relaciones entre modelos*/
    public function Mproblema()
    {
        return $this->belongsTo('App\Models\poa\problema\Mproblema');
    }

    public function getTruncDeterminanteAttribute()
    {
        $string = $this->determinante;
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
