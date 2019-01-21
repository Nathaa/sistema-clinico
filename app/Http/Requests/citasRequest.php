<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class citasRequest extends FormRequest
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
            'title' => 'max:120|required',
            'start' => 'required',
            'end' => 'max:120|required',
            'hora_inicio' => 'required',
            'hora_final' => 'required',
            'expediente_id' => 'numeric|min:1|max:1000|required',
        ];
    }
}
