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
            'title.required'=>'Il titolo deve esitere',
            'title.max'=>'Il titolo deve avere massimo 50 caratteri',
            'category.required'=>'La categoria deve esitere',
            'category.max'=>'La categoria deve avere massimo 20 caratteri',
            'description.required'=>'La descrizione deve esistere',
            'description.max'=>'La descrizione deve avere massimo 150 caratteri',
            'body.required'=>'Il corpo deve esistere',
            'body.max'=>'Il corpo deve avere massimo 5000 caratteri'
        ];
    }
}
