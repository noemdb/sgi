<?php

namespace App\Http\Requests\Admin\poa\productos;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePsupuestoRequest extends FormRequest
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
            'mproducto_id' => 'required',
            'supuesto' => 'required|max:255|min:5',            
        ];
    }
}
