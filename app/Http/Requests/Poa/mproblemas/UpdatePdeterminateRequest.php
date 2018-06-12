<?php

namespace App\Http\Requests\Admin\poa\mproblemas;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePdeterminateRequest extends FormRequest
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
            'determinante' => 'required|max:255|min:5',
            'mproblema_id' => 'required',
        ];
    }
}
