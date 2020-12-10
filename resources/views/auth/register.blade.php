<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Nombre') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Correo Electrónico') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirmar contraseña') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="text-sm text-black hover:underline" href="{{ route('login') }}">
                    {{ __('¿Ya tienes una cuenta?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Crear Cuenta') }}
                </x-jet-button>
            </div>
        </form>
        <div class="my-4 w-full flex">
            <a class="ml-1 w-full flex btn btn-primary login-facebook" href="{{ url('auth/facebook') }}" id="btn-fblogin">
                <div class="flex items-center ml-2">
                    <i class="fa fa-facebook-square flex items-center" aria-hidden="true"></i>
                </div>
                <div class="block w-full text-center">
                    <p>
                        Continuar con Facebook
                    </p>
                </div>
            </a>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
