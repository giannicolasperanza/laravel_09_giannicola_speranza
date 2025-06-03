<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticoloRequest extends FormRequest
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
            'title'=>'required',
            'description'=>'required',
            'price'=>'required',
            'img'=>'required|image',
            

        ];
    }

    public function messages(){
        return [
            'title.required'=>'Il titolo è obbligatorio',
            'description.required'=>'La descrizione è obbligatoria',
            'price.required'=>'Il prezzo è obbligatorio',
            'img.required'=>'L\'immagine è obbligatoria',
            'img.image'=>'Il file deve essere una immagine'


            
        ];
    }
}
