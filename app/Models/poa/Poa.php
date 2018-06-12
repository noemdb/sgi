<?php

namespace App\Models\poa;

use Illuminate\Database\Eloquent\Model;

class Poa extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'descripcion', 'area', 'estrategia', 'user_id','periodo', 'institucion_id'
    ];

	/*INI relaciones entre modelos*/
	public function institucion()
    {
        return $this->belongsTo('App\Models\poa\Institucion');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function mlogicos()
    {
        return $this->hasMany('App\Models\poa\Mlogico');
    }

    public function mproblemas()
    {
        return $this->hasMany('App\Models\poa\problema\Mproblema');
    }

    /*FIN relaciones entre modelos*/

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

    public function getTruncEstrategiaAttribute()
    {
      
        $string = $this->estrategia;

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
      
        $cadena = $this->descripcion;
        $token = strtok($cadena, " ");
        $code = '';
        
        while($token !== false) {
            $code .= strtoupper(substr($token,0,2));
            $token = strtok(" ");
        }

        return $code;
    }

}
