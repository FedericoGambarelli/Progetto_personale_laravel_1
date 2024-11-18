<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestMailCustom extends FormRequest
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
            'name'=>'required',
            'email'=>'required|email',
            'messaggio'=>'required|min:10'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Il campo nome è richiesto',
            'email.required' => 'Il campo E-mail è richiesto',
            'email.email' => 'Il campo E-mail deve contenere un indirizzo e-mail valido',
            'messaggio.required' => 'Il campo messaggio è richiesto',
            'messaggio.min' => 'Il messaggio deve contenere almeno 10 caratteri'
        ];
    }
}
