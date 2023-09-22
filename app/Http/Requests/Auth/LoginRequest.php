<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class LoginRequest extends FormRequest{

    public function rules()
    {
        return [
            
                'name'=> 'required|max:50',
                'username' => 'required|unique:users,username',
        ];
    }

    public function messages(){
        return[
            'name.required'=>'You must enter the name.',
            'name.max'=> 'You entered more then 50 characters.',
            'username'=> 'You must enter the username.',
            'username.unique' => 'The username is invalid.',
            
        ];
    }
}