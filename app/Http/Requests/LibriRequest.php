<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LibriRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title'=>'required',
            'author'=>'required',
            // 'category'=>'required',
            'year'=>'required',
            'price'=>'required',
            'synopsis'=>'required',
        ]; 
    }
    public function messages(){
        return[
            'title.required'=>'Devi inserire il titolo!',
            'author.required'=>'Devi inserire l\'autore!',
            // 'category.required'=>'Devi inserire la categoria!',
            'year.required'=>'Devi inserire l\'anno!',
            'price.required'=>'Devi inserire il prezzo!',
            'synopsis.required'=>'Devi inserire la sinossi!'
        ];
    }
}
