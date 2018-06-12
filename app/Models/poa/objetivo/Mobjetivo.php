<?php

namespace App\Models\poa\objetivo;

use Illuminate\Database\Eloquent\Model;

class Mobjetivo extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'mproblema_id', 'objetivo'
    ];

    /*INI relaciones entre modelos*/
    public function mproblema()
    {
        return $this->belongsTo('App\Models\poa\problema\Mproblema');
    }
    public function presupuestarias()
    {
        return $this->hasMany('App\Models\poa\presupuestaria\Presupuestaria');
    }
    public function mproductos()
    {
        return $this->hasMany('App\Models\poa\producto\Mproducto');
    }
    /*FIN relaciones entre modelos*/

    public function getTruncObjetivoAttribute()
    {
        $string = $this->objetivo;
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
