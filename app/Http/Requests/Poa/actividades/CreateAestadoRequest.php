<?php

namespace App\Http\Requests\Admin\poa\actividades;

use Illuminate\Foundation\Http\FormRequest;

class CreateAestadoRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'mactividad_id' => 'required',
            'user_id' => 'required',
            'estado' => 'required',            
        ];
    }
}
