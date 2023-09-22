@extends('layouts.app')

@section('contenido')
<div class="md:flex md:justify-center md:items-center">
    <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-2xl">
        <div class="md:flex md:justify-center hidden sm:block">
            <img class="rounded-full sm:h-40 h-20 m-auto" src="{{ asset('img/user.jpg') }}" alt="Imagen de perfil">
        </div>
        
        <hr class="mb-5">

        <form action="/edit" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{auth()->user()->id}}">
            <div class="mb-5">
                <label for="name" class="mb-2 block uppercase text-gray-500 font-bold ">
                    New Name
                </label>
                <input 
                    id="name"
                    name="name"
                    type="text"
                    placeholder="New Name"
                    class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                >
                @error('name')
                <p class=" bg-red-500 text-white my-2 rounded-lg">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="username" class="mb-2 block uppercase text-gray-500 font-bold ">
                    New Username
                </label>
                <input 
                    id="username"
                    name="username"
                    type="text"
                    placeholder="New Username"
                    class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror"
                >
                @error('username')
                <p class=" bg-red-500 text-white my-2 rounded-lg">{{$message}}</p>
                @enderror
            </div>
          
            <input 
                type="submit"
                value="Edit Profile"
                class="bg-gray-400 hover:bg-blue-400 transition-colors cursor-pointer uppercase w-full p-3 text-white rounded-lg font-bold"
            >    
        </form>
    </div>
</div>
    
@endsection