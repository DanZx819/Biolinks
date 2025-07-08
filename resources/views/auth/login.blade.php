<x-layout.app>

    <x-container>
        <x-card title="Login">

            <x-form :route="route('login')" post id="login-form">

                <x-input name="email" placeholder="Email" value="{{ old('email')}}"/>

                <x-input name="password" type="password" placeholder="Senha"/>

            </x-form>

            <x-slot:actions>


                <x-button type="submit" form="login-form">Logar</x-button>


            </x-slot:actions>
        </x-card>

    </x-container>
    
    
</x-layout.app>
