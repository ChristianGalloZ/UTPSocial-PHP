<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PostController extends Controller
{
    public function index(User $user)
    {
        
        return view('post', ['user' => $user]);
    }
}