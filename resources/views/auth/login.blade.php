@extends('layouts.app')

@section('titulo')
    LOGIN
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:items-center">
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-2xl">
            <div class="md:flex md:justify-center hidden sm:block">
                <img class="max-h-20" src="{{ asset('img/utp.png')}}" alt="UTP Social">
            </div>

            <h2 class="mb:5 text-gray-600 font-bold font-sans text-center "> Inicia Sesion</h2>

            <form action="{{route('login')}}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold ">
                        Username
                    </label>
                    <input
                    id="username"
                    name="username" 
                    type="text"
                    placeholder="Username"
                    class="border p-3 w-full rounded-lg"
                    >
                </div>

                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold ">
                        Password
                    </label>
                    <input 
                        id="password"
                        name="password"
                        type="password"
                        placeholder="Password"
                        class="border p-3 w-full rounded-lg"
                    >
                </div>
                <input 
                    type="submit"
                    value="Log In"
                    class="bg-gray-400 hover:bg-green-500 transition-colors cursor-pointer uppercase w-full p-3 text-white rounded-lg font-bold"
                >    

            </form>
        </div>
    </div>
    <div class="md:flex md:justify-center md:items-center mt-10">
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-2xl">
            <h2 class="text-center">No tienes una cuenta? <a class=" text-blue-600" href="/register">  Registrate</a></h2>

        </div>

    </div>
    
@endsection