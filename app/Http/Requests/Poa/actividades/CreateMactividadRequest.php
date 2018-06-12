<?php

namespace App\Http\Requests\Admin\poa\actividades;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class CreateMactividadRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**'mproducto_id', 'responsable_id','ractividada_id', 'descripcion','ubicaion', 'finicial', 'ffinal'
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        
        // $request = Request::All();

        //INI validando que finicial no esté vacio
        // $date_after = '';
        // if(isset($request['finicial'])){
            // $date_after = "|after:".$request['finicial'];
        // }
        //FIN validando que finicial no esté vacio

        return [
            'mproducto_id' => 'required',
            'responsable_id' => 'required',
            // 'ractividada_id' => 'required',
            'descripcion' => 'required|max:255|min:5',
            'ubicaion' => 'required|max:255|min:5',
            'frecuencia' => 'required|max:2|min:1',
            // 'finicial' => 'required|date',
            // 'ffinal' => 'required|date'.$date_after,
            
        ];
    }
}
