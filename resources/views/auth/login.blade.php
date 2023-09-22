<x-layout title="LOG IN">
    <div class="md:flex md:justify-center md:items-center">
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-2xl">
            <div class="md:flex md:justify-center hidden sm:block">
                <img class="max-h-20" src="{{ asset('img/utp.png')}}" alt="UTP Social">
            </div>
            <h2 class="mb:5 text-gray-600 font-bold font-sans text-center ">Log in</h2>
            <hr class="mb-5">
            <x-forms.form route="route{{'login'}}" method="POST" status="warning"> 
                <x-forms.input name="email" title="Email" placeholder="Email Address" type="email"/>
                <x-forms.input name="password" title="Password" placeholder="Password" type="password"/>
            </x-forms.form>
            <hr class="mt-5 mb-5">
            <h2 class="text-center"><a class=" text-blue-600" href="{{ route('register') }}">Forgot your Password?</a></h2>
         </div>
    </div>
    <x-card-footer text="Don't have an account?" route="route{{'register'}}" textSecondary="Sign UP" />
</x-layout>
