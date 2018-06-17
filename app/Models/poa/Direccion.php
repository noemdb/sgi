<?php

namespace App\Models\poa;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'institucion_id', 'nombre', 'descripcion'
    ];

	/*INI relaciones entre modelos*/
	public function institucion()
    {
        return $this->belongsTo('App\Models\poa\Institucion');
    }
    public function responsables()
    {
        return $this->hasMany('App\Models\poa\Responsable');
    }
    public function mproblemas()
    {
        return $this->hasMany('App\Models\poa\problema\Mproblema');
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
