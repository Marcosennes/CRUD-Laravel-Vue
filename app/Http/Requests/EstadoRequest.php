<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstadoRequest extends FormRequest
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
            'nome' => 'required | max:100',
            'abreviacao' => 'required | size:2',
        ];
    }

    public function messages()
    {
        return [
            'required'  => ':attribute é obrigatório.',
            'size'       => ':attribute deve possuir exatamente :size caracteres.',
        ];
    }
}
