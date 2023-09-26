@extends('layouts.app')
@section('contenido')
<div class="md:flex md:justify-center md:items-center">
    <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-2xl">
        <div class="md:flex md:justify-center hidden sm:block">
            <img class="rounded-full sm:h-40 h-20 m-auto" src="{{ asset('img/user.jpg') }}" alt="Imagen de perfil">
        </div>
        <hr class="mb-5"> 
    {{-- <x-card-main text="Edit Profile"> --}}
        <form action="/edit" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{auth()->user()->id}}">
            <x-forms.input name="name" title="New Name" type="text" placeholder="New Name" />
            <x-forms.input name="username" title="New Username" type="text" placeholder="New Username"/>
            <x-forms.input-button type="submit" value=" Edit Profile"/>
        </form>
    {{-- </x-card-main>  --}}
    </div>
</div> 
@endsection