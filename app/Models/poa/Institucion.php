<?php

namespace App\Models\poa;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Institucion extends Model
{
    use Notifiable;

    protected $fillable = [
        'nombre', 'descripcion'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // protected $hidden = [
        // 'password', 'remember_token',
    // ];

    /*INI relaciones entre modelos*/
    public function direccions()
    {
        return $this->hasMany('App\Models\poa\Direccion');
    }

    public function poas()
    {
        return $this->hasMany('App\Models\poa\Poa');
    }

    public function responsable()
    {
        return $this->hasMany('App\Models\poa\Responsable');
    }


    public function getFullCodeAttribute()
    {

        $cadena = $this->nombre;
        $token = strtok($cadena, " ");
        $code = '';

        while($token !== false) {
            $code .= strtoupper(substr($token,0,2));
            $token = strtok(" ");
        }

        return $code;
    }

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
