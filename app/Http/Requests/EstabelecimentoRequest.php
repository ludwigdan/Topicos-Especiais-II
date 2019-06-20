<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstabelecimentoRequest extends FormRequest
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
            'razao_social'=>'required|max:40',
			'cnpj'=>'required|max:14',
			'nome_fantasia'=>'required|max:40',
			'numero'=>'integer',
			'rua'=>'max:50',
			'bairro'=>'max:20',
			'cidade'=>'max:30'
        ];
    }
}
