<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4 bg-light-primary"/>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Correo Electrónico') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>
            <div class="flex justify-between mt-4">
                <label for="remember_me" class="flex items-center hover:font-bold">
                    <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                    <span class="ml-2 text-sm text-black">{{ __('Recuerdame') }}</span>
                </label>
                @if (Route::has('password.request'))
                    <a class="text-sm text-black hover:underline" href="{{ route('password.request') }}">
                        {{ __('¿Olvido su contraseña?') }}
                    </a>
                @endif
            </div>
            <div class="flex items-center justify-end mt-4">
                <a class="text-sm text-black hover:underline" href="{{ route('register') }}">
                    {{ __('¿Aún no tienes cuenta?') }}
                </a>
                <x-jet-button class="ml-4">
                    {{ __('Ingresar') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
