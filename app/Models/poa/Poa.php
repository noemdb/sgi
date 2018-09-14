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
        $i=0;
        while($token !== false && $i<=6) {
            $i++;
            $code .= strtoupper(substr($token,0,1));
            $token = strtok(" ");
        }

        // dd($cadena,$token,$code);

        return $code;
    }

    public static function getActPoa($finicial,$ffinal,$limit=10)
    {
        $poas = Poa::Select('poas.*')
                ->Where('poas.created_at', '>=', $finicial)
                ->Where('poas.created_at', '<=', $ffinal)
                ->get()
                ->take($limit);

        return ($poas) ? $poas : 0;
    }

}
