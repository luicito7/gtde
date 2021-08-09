<x-guest-layout>
    <div style="background-image: url('img/img_uros.jpg')" class="w-full h-full bg-no-repeat bg-cover">
    
        <x-authentication-card>
            <x-slot name="logo">
                <img src="img/Escudo_de_Puno_mini.png" alt="" class="w-10 ">
                <p class="col-span-2 text-white">Municipalidad provincial Puno</p>
            </x-slot>
    

            <x-jet-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 text-sm font-medium text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mt-4">
                    <x-jet-label for="dni" value="{{ __('Dni') }}" />
                    <x-jet-input id="dni" class="block w-full mt-1" type="text" name="dni" :value="old('dni')" required autofocus />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <x-jet-input id="password" class="block w-full mt-1" type="password" name="password" required autocomplete="current-password" />
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Recuerdame') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Olvido su password?') }}
                        </a>
                    @endif

                    <x-jet-button class="ml-4">
                        {{ __('Ingresar') }}
                    </x-jet-button>
                </div>
            </form>
        </x-authentication-card>
    </div>
</x-guest-layout>
