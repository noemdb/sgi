<?php

namespace App\Http\Requests\Admin\poa;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMlogicoRequest extends FormRequest
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
            'poa_id' => 'required',
            'tipo' => 'required|max:100|min:5',
            'resumen' => 'required|max:255|min:5',
            'indicadores' => 'required|max:255|min:5',
            'mverificacion' => 'required|max:255|min:5',
            'supuestos' => 'required|max:255|min:5',
        ];
    }
}
