<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
class StoreTodoRequest extends FormRequest
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
            'title' => 'required|unique:todos',
            'description'=> 'required',
            'qtt_hours'=> 'required',
            'remaining_time'=> 'required',
            'category_id'=> 'required',
            'tag_id'=> 'required',
            'project_id'=> 'required',
            'phase_id'=> 'required',
            'deadline'=> 'required',
            'order'=> 'required|numeric|min:1',
        ];
    }
    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success'   => false,
            'message'   => 'Erros de validação',
            'data'      => $validator->errors()
        ]));
    }
    public function messages() 
    {
        return [
            'title.required' => 'Título é obrigatório',
            'title.unique' => 'Título deve ser único',
            'description.required' => 'Descrição é obrigatório',
            'qtt_hours.required' => 'Quantidade de horas é obrigatório',
            'remaining_time.required' => 'Tempo restante é obrigatório',
            'category_id.required' => 'Categoria é obrigatório',
            'tag_id.required' => 'Tag é obrigatório',
            'project_id.required' => 'Projeto é obrigatório',
            'phase_id.required' => 'Fase é obrigatório',
            'deadline.required' => 'Previsão de entrega é obrigatório',
            'order.required' => 'Ordem é obrigatório',
            'order.min' => 'Ordem não pode ser menor que 1',


        ];
    }
}
