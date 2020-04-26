<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemRequest extends FormRequest
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
            // Indicamos reglas para el envío del artículo
            'name'=> 'required|min:3',
            'content'=> 'required|min:10',
            'currency.*' => 'in:s/.,$',
            'price'=> 'required',
            'cant'=> 'required',
            'category_id'=> 'required',
        ];
    }
}
