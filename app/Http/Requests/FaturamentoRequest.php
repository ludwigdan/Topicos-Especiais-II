<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FaturamentoRequest extends FormRequest
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
            'valor'=>'required|integer',
			'estabelecimento_id'=>'required',
			'produto_id'=>'required',
            'periodo_id'=>'required'
        ];
    }
}
