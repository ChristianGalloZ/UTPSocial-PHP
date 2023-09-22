<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegisterRequest extends FormRequest
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
            
                'name'=> 'required|max:50',
                'username' => 'required|unique:users',
                'email' => 'required|unique:users',
                'password' => ['required', 'confirmed', Password::defaults()]
        ];
    }

    public function messages(){
        return[
            'name.required'=>'You must enter the name.',
            'name.max'=> 'You entered more then 50 characters.',
            'username'=> 'You must enter the username.',
            'username.unique' => 'The username is invalid.',
            'email.required' => 'You must enter the email.',
            'email.unique' => 'The email is invalid.',
            'password.required' => 'Password required.',
            'password.confirmed' => 'Password confirmation invalid.',
            'password.min' => 'At least 8 characters.'
        ];
    }
}
