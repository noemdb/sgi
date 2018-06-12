<?php

namespace App\Models\poa\problema;

use Illuminate\Database\Eloquent\Model;

class Mproblema extends Model
{

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'poa_id', 'direccion_id', 'problema'
    ];

    /*INI relaciones entre modelos*/
    public function poa()
    {
        return $this->belongsTo('App\Models\poa\Poa');
    }
    public function direccion()
    {
        return $this->belongsTo('App\Models\poa\Direccion');
    }

    public function pdeterminantes()
    {
        return $this->hasMany('App\Models\poa\problema\Pdeterminante');
    }

    public function pcausaefectos()
    {
        return $this->hasMany('App\Models\poa\problema\Pcausaefecto');
    }

    public function mobjetivos()
    {
        return $this->hasMany('App\Models\poa\objetivo\Mobjetivo');
    }
	/*FIN relaciones entre modelos*/

	public function getTruncProblemaAttribute()
    {
        $string = $this->problema;
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
