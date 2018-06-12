<?php

namespace App\Http\Requests\Admin\poa\productos;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMproductoRequest extends FormRequest
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
            'producto' => 'required|max:255|min:5',
            'mobjetivo_id' => 'required',
        ];
    }
}
