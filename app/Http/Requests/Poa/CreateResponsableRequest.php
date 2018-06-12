<?php

namespace App\Http\Requests\Admin\poa;

use Illuminate\Foundation\Http\FormRequest;

class CreateResponsableRequest extends FormRequest
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
            'direccion_id' => 'required',
            'nombre' => 'required|max:64|min:5',          
        ];
    }
}
