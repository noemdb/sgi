<?php

namespace App\Http\Requests\Poa;

use Illuminate\Foundation\Http\FormRequest;
// use Illuminate\Routing\Route;
// use Illuminate\Http\Request;

class UpdatePoaRequest extends FormRequest
{

    // private $route;

    // public function __construct(Route $route){

    //     $this->route = $route;

    // }
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
            'descripcion' => 'required|max:255|min:5',
            'area' => 'required|max:255|min:5',
            'estrategia' => 'required|max:255|min:5',
            'user_id' => 'required',
        ];
    }
}
