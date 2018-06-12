<?php

namespace App\Models\poa\producto;

use Illuminate\Database\Eloquent\Model;

class Mproducto extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'mobjetivo_id', 'producto'
    ];

    /*INI relaciones entre modelos*/
    public function mobjetivo()
    {
        return $this->belongsTo('App\Models\poa\objetivo\Mobjetivo');
    }
    public function pindicadors()
    {
        return $this->hasMany('App\Models\poa\producto\Pindicador');
    }
    public function psupuestos()
    {
        return $this->hasMany('App\Models\poa\producto\Psupuesto');
    }
    public function pverificadors()
    {
        return $this->hasMany('App\Models\poa\producto\Pverificador');
    }
    public function mactividads()
    {
        return $this->hasMany('App\Models\poa\actividades\Mactividad');
    }
    /*FIN relaciones entre modelos*/

    public function getTruncProductoAttribute()
    {
        $string = $this->producto;
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

    public function getFullCodeAttribute()
    {
      
        $cadena = $this->producto;
        $token = strtok($cadena, " ");
        $code = '';
        
        while($token !== false) {
            $code .= strtoupper(substr($token,0,2));
            $token = strtok(" ");
        }

        return substr($code,0,15);
    }
}
