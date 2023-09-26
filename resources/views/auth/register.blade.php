<x-layout title="Register">
    <x-card-main text="Sign Up to see your friend's Pictures and Videos.">            
        <x-forms.form route="{{route('register')}}" method="POST" status="warning">    
            <x-forms.input name="name" title="Name" type="text" :value="old('name') ?? old('name')" placeholder="Full Name"/>
            <x-forms.input name="username" title="Username" type="text" :value="old('username') ?? old('username')" placeholder="Username"/>
            <x-forms.input name="email" title="Email" type="email" :value="old('email') ?? old('email')" placeholder="Email Address"/>
            <x-forms.input name="password" type="password" title="Password" placeholder="Password"/>                
            <x-forms.input name="password_confirmation" type="password" title="Confirm your Password" placeholder="Confirm Your Password"/>
            <x-forms.input-button type="submit" value="Create Account"/>
        </x-forms.form>  
    </x-card-main>    
    <x-card-footer text="Have an account?" route="{{route('login')}}" textSecondary="Log In" />
</x-layout>