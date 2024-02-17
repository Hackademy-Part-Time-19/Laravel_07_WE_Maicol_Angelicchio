<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'=>'required|max:10',
            'category'=>'required|max:20',
            'description'=>'required|max:150',
            'body'=>'required|max:5000'
        ];
    }
    public function messages(){
        return[
            'title.required'=>'il titolo deve sesitere',
            'title.max'=>'il titolo deve avere massimo 50 caratteri',
            'category.required'=>'la categoria deve esitere',
            'category.max'=>'la categoria deve avere massimo 20 caratteri',
            'description.required'=>'la descrizione deve esistere',
            'description.max'=>'la descrizione deve avere massimo 150 caratteri',
            'body.required'=>'il corpo deve esistere',
            'body.max'=>'il corpo deve avere massimo 5000 caratteri'
        ];
    }
}
