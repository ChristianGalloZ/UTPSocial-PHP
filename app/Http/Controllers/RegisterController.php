<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request ->validate([
            'name'=> 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        User::create([
            'name' => $request->name,
            'username'=> $request->username,
            'email'=> $request->email,
            'password'=>$request->password
        ]);

        dd('fin');

    }


}
