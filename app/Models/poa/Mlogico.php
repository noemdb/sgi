<?php

namespace App\Models\poa;

use Illuminate\Database\Eloquent\Model;

class Mlogico extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'poa_id', 'tipo', 'resumen', 'indicadores', 'mverificacion', 'supuestos'
    ];

	/*INI relaciones entre modelos*/
    public function poa()
    {
        return $this->belongsTo('App\Models\poa\Poa');
    }
	/*FIN relaciones entre modelos*/

	public function getTruncResumenAttribute()
    {
      
        $string = $this->resumen;

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
