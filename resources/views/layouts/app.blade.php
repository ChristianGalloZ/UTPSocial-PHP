<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class=" bg-gray-200">
  <header class=" p-5 border-b bg-white shadow">
    <div class="container mx-auto flex justify-between">
        <img class="max-h-10" src="{{ asset('img/utp.png') }}" alt="Logo UTP">
        <h1 class="text-3xl font-black hidden sm:block">
            UTP Social
        </h1>
        <nav class="flex gap-2 items-center">
            <a class="font-bold uppercase text-gray-600 text-sm" href="{{route('login')}}">Login</a>
            
            <a class="font-bold uppercase text-gray-600 text-sm" href="{{route('register')}}">Registrarse</a>
        </nav>
    </div>  
  </header>
   <main class=" container mx-auto mt-10">
        <h2 class=" font-black text-center text-3xl mb-10">@yield('titulo')</h2>
        @yield('contenido')
   </main>
    <footer class="mt:10 text-center p-5 text-gray-500 font-bold uppercase">
        Todos los derechos reservados {{now()->year}}
    </footer>

</body>
</html>