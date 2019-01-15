<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class expedientesRequest extends FormRequest
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
            'name' => 'max:120|required',
            'nacimiento' => 'required',
            'edad' => 'numeric|min:1|max:100|required',
            'direccion' => 'max:120|required',
            'telefono' => 'max:120|required',
            'sexo' => 'max:120|required',
            'ocupacion' => 'max:120|required',
            'tratamiento' => 'max:120|required',
            'diagnostico' => 'max:120|required',
            'alergias' => 'max:120|required',
        ];
    }
}
