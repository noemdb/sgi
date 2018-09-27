<?php

namespace App\Models\poa;

use Illuminate\Database\Eloquent\Model;

// Helpers
use Illuminate\Support\Carbon;
use Jenssegers\Date\Date;
use Illuminate\Support\Facades\DB;

use App\Models\poa\actividades\Mactividad;

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


    public static function CountAct($id,$estado='')
    {
        $data =
            Mactividad::select('mproblemas.poa_id',DB::raw('count(mactividads.id) as value'))
            ->join('aestados', 'mactividads.id', '=', 'aestados.mactividad_id')
            ->join('mproductos', 'mproductos.id', '=', 'mactividads.mproducto_id')
            ->join('mobjetivos', 'mobjetivos.id', '=', 'mproductos.mobjetivo_id')
            ->join('mproblemas', 'mproblemas.id', '=', 'mobjetivos.mproblema_id')
            ->join('poas', 'poas.id', '=', 'mproblemas.poa_id')
            // ->Where('mactividads.finicial', '>=', $finicial)
            // ->Where('mactividads.finicial', '<=', $ffinal)
            ->where('aestados.estado', 'like', '%'.$estado.'%')
            ->where('poas.id',$id)
            ->groupby('poas.id')
            ->orderBy('value', 'desc')
            // ->get()
            ->first()
            // ->value
            // ->toArray()
            ;

        // dd($data);

        return $data;
    }

    /*
    Funcion para obtener la class bootstrap para el progressbar
    del estado general del POA relacionado al porcentaje de finalizacion de
    sus actividades registradas
    */
    public function getClassProgressBarAttribute()
    {
        // $iniciadas      = $this->countact($this->id,'INICIADA')->value;
        // $reprogramadas  = $this->countact($this->id,'REPROGRAMADA')->value;
        $finalizadas    = $this->countact($this->id,'FINALIZADA')->value;
        $asignadas      = $this->countact($this->id,'')->value;
        $porcentaje     = round($finalizadas / $asignadas * 100,2);

        if ($porcentaje <= 25) {
            $pregress_class = 'danger';
        }

        if ($porcentaje > 25 && $porcentaje <= 50) {
            $pregress_class = 'warning';
        }

        if ($porcentaje > 50 && $porcentaje <= 75) {
            $pregress_class = 'info';
        }

        if ($porcentaje > 75 && $porcentaje <= 99.99) {
            $pregress_class = 'primary';
        }

        if ($porcentaje > 99.99) {
            $pregress_class = 'success';
        }

        return $pregress_class;
    }

    
    /*
    Funcion para la obtencion del porcentaje de finilazacion de un POA
    segun sus actividades finalizadas
    */
    public function getPorcetanjeAttribute()
    {
        $finalizadas    = $this->countact($this->id,'FINALIZADA')->value;
        $asignadas      = $this->countact($this->id,'')->value;
        $porcentaje     = round($finalizadas / $asignadas * 100,2);

        return $porcentaje;
    }

}
