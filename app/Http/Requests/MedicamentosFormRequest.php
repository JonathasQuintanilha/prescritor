<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedicamentosFormRequest extends FormRequest
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

        'nome' => 'required',
        
        'uso_id' => 'required',
            //
        ];
    }


    public function messages() {
        return [
        'nome.required' => 'O campo NOME é obrigatório',
        'uso_id.required' => 'O campo TIPO DE USO é obrigatório',
        
        ];
    }
}
