<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class cuentaRequest extends FormRequest
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
            'monto' => 'required',
            'descripcion' => 'max:120|required',
            'fechaPago' => 'required',
            'tipoCita' => 'max:120|required',
            'expediente_id' => 'numeric|min:1|max:1000|required',
        ];
    }
}
