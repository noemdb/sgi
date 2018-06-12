<?php

namespace App\Models\poa\actividades;

use Illuminate\Database\Eloquent\Model;

class Aestado extends Model
{
    protected $fillable = [
        'mactividad_id', 'user_id', 'estado'
    ];


    /*INI relaciones entre modelos*/
    public function mactividad()
    {
        return $this->belongsTo('App\Models\poa\actividades\Mactividad');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    /*FIN relaciones entre modelos*/
}
