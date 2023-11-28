<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registerRequest extends FormRequest
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
            'nom'=>'required|max:225',
            'prenom'=>'required|max:225',
            'email'=>'required|email',
            'age'=>'required',
            'contact'=>'required|max:20',
            'formation'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'nom.required' => 'le champ nom est obligatoire',
            'nom.max' => 'le nom doit contenir au maximun 255 caracteres',
            'prenom.required' => 'le champ prenom est obligatoire',
            'prenom.max' => 'le prenom doit contenir au maximun 255 caracteres',
            'email.required' => 'le champ email est obligatoire',
            'email.email' => 'l\'adresse email doit être valide ',
            'age.required' => 'le champ age est obligatoire ',
            'contact.required' => 'le champ numero est obligatoire',
            'contact.max' => 'le numero doit contenir au maximun 20 caracteres',
            'formation.required' => 'le champ formation est obligatoire',

        ];
    }
}
