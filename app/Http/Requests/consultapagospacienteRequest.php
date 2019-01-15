<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class consultapagospacienteRequest extends FormRequest
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
            'expediente_id' => 'numeric|min:1|max:1000|required',
        ];
    }
}
