<?php

namespace App\Http\Requests\Poa\mproblemas;

use Illuminate\Foundation\Http\FormRequest;

class CreateMproblemaRequest extends FormRequest
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
            'problema' => 'required|max:255|min:5',
            'poa_id' => 'required',
            'direccion_id' => 'required',
        ];
    }
}
