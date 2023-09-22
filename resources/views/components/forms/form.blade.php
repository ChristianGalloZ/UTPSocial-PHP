<form action="{{$route}}" method="{{$method}}">
    @csrf
    @if (session($status))
        <p class=" bg-red-500 text-white my-2 rounded-lg p-2 text-center">{{ session('warning') }}</p>
    @endif
    {{$slot}}
   
    <input 
        type="submit"
        value="Log In"
        class="bg-gray-400 hover:bg-blue-400 transition-colors cursor-pointer uppercase w-full p-3 text-white rounded-lg font-bold"
    >    

</form>