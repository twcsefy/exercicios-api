<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ExercicioUmForRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'primeiro_numero' => 'required|numeric',
            'segundo_numero' => 'required|numeric',

        ];
    }
    public function failedValidation(Validator $validator){
        throw new HttpResponseException(
            response()->json([
                'sucess' => false,
                'error' =>$validator->errors()

            ]));
    }
    public function messages()
    {
        return[
            'primeiro_numero.required' => 'Preencha o campo primeiro número',
            'primeiro_numero.numeric' => 'O campo é somente números',
            'primeiro_numero.required' => 'Preencha o campo primeiro número',
            'primeiro_numero.numeric' => 'O campo é somente números',
        ];
    }
}
