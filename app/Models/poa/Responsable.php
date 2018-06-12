<?php

namespace App\Models\poa;

use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{


    protected $fillable = [
        'direccion_id', 'nombre'
    ];

	/*INI relaciones entre modelos*/
	public function mactividads()
    {
        return $this->hasMany('App\Models\poa\actividades\Mactividad');
    }
	public function direccion()
    {
        return $this->belongsTo('App\Models\poa\Direccion');
    }
    /*FIN relaciones entre modelos*/
}
