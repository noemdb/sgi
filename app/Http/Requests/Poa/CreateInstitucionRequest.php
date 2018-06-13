<?php

namespace App\Http\Requests\Poa;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Routing\Route;
use Illuminate\Http\Request;

class CreateInstitucionRequest extends FormRequest
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
        $request = Request::All();

        return [
            'nombre' => 'required|max:64|min:5',
            'descripcion' => 'required|max:255|min:5',
        ];
    }
}
