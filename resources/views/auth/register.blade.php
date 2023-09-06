@extends('layouts.app')

@section('titulo')
    Registrate
        
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:items-center">
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-2xl">
            <div class="md:flex md:justify-center hidden sm:block">
                <img class="max-h-20" src="{{ asset('img/utp.png')}}" alt="UTP Social">
            </div>
            
            <h2 class="mb:5 text-gray-600 font-bold font-sans text-center ">
                Registrate para ver fotos y videos de tus amigos.
            </h2>
            <hr class="mb-5">

            <form action="{{route('register')}}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold ">
                        Nombre
                    </label>
                    <input 
                        id="name"
                        name="name"
                        type="text"
                        placeholder="Tu Nombre"
                        class="border p-3 w-full rounded-lg"
                    >
                    @error('name')
                        <p class=" bg-red-500 text-white my-2 rounded-lg">{{$message}}</p>
                     @enderror
                </div>
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
                    @error('username')
                        <p class=" bg-red-500 text-white my-2 rounded-lg">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold ">
                        Email
                    </label>
                    <input 
                        id="email"
                        name="email"
                        type="email"
                        placeholder="Email"
                        class="border p-3 w-full rounded-lg"
                    >
                    @error('email')
                        <p class=" bg-red-500 text-white my-2 rounded-lg">{{$message}}</p>
                    @enderror
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
                    @error('password')
                        <p class=" bg-red-500 text-white my-2 rounded-lg">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold ">
                        Repeat Password
                    </label>
                    <input 
                        id="password_confirmation"
                        name="password_confirmation"
                        type="password"
                        placeholder="Repeat your Password"
                        class="border p-3 w-full rounded-lg"
                    >
                </div>
                <input 
                    type="submit"
                    value="Crear cuenta"
                    class="bg-gray-400 hover:bg-green-500 transition-colors cursor-pointer uppercase w-full p-3 text-white rounded-lg font-bold"
                >    
            </form>
        </div>
    </div>
    <div class="md:flex md:justify-center md:items-center mt-10">
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-2xl">
            <h2 class="text-center">Tienes una cuenta? <a class=" text-blue-600" href="/login"> Inicia Sesion</a></h2>

        </div>

    </div>
    
@endsection