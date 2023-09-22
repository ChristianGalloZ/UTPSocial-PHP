<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use Facades\App\Models\User;


class UserController extends Controller
{
    public function index()
    {
        return view('profile.editprofile');
    }

    public function store(LoginRequest $request)
    {
       // dd($request->all());
       
       User::saveOrUpdate($request->all());
        return redirect()->route('post',$request->username);
    }
}
