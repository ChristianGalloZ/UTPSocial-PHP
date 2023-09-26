<form action="{{$route}}" method="{{$method}}">
    @csrf
    @if (session($status))
        <p class=" bg-red-500 text-white my-2 rounded-lg p-2 text-center">{{ session('warning') }}</p>
    @endif
    {{$slot}}
</form>