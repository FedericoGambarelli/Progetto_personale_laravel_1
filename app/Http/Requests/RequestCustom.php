<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestCustom extends FormRequest
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
            'title'=>'required|unique:games',
            'description'=>'required|max:1000',
            'price'=>'required|numeric',
            'cover'=>'image|mimes:jpg,png,webp'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Devi inserire il titolo del gioco',
            'cover.required' => 'Devi inserire l\'immagine di copertina',
            'description.required' => 'Devi inserire la descrizione',
            'description.max' => 'La descrizione può avere al massimo 1000 caratteri',
            'price.required' => 'Devi inserire il prezzo del videogioco'

        ];
    }
}
