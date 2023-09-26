<x-layout title="LOG IN">
    <x-card-main text="Register to see your friend's posts">
        <x-forms.form route="{{route('login')}}" method="POST" status="warning"> 
            <x-forms.input name="email" title="Email" placeholder="Email Address" type="email"/>
            <x-forms.input name="password" title="Password" placeholder="Password" type="password"/>
            <x-forms.input-button type="submit" value="Log In"/>
        </x-forms.form>
        <hr class="mt-5 mb-5">
        <h2 class="text-center"><a class=" text-blue-600" href="{{ route('register') }}">Forgot your Password?</a></h2>
    </x-card-main>
    <x-card-footer text="Don't have an account?" route="{{route('register')}}" textSecondary="Sign UP" />
</x-layout>
