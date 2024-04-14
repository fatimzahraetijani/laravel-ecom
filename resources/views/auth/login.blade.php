
<link rel="icon" type="image/png" href="home/images/mode.png">
<title>La regina</title>
<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <img style="border-top: 2px solid; border-left: 2px solid; border-right: 2px solid;" src="home/images/main-logo.png" alt="">
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">

                <x-button class="ml-4">
                    {{ __('Log in') }}
                </x-button>
                
            </div>
        </form>
                <a href="{{ route('register') }}">
                <x-button  class="ml-4">
                    {{ __('Register') }}
                </x-button>
                </a>
    </x-authentication-card>
</x-guest-layout>
