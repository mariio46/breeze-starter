<x-guest-layout title="Login">
    <x-card>
        <x-slot:header>
            <x-slot:title>Login</x-slot:title>
            <x-slot:description>
                Welcome back, just login and jump to your dashboard</x-slot:description>
        </x-slot:header>
        <x-slot:content>
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-label for="email" :value="__('Email')" />
                    <x-input class="mt-1 block w-full" id="email" name="email" type="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error class="mt-2" :messages="$errors->get('email')" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-label for="password" :value="__('Password')" />

                    <x-input class="mt-1 block w-full" id="password" name="password" type="password" required autocomplete="current-password" />

                    <x-input-error class="mt-2" :messages="$errors->get('password')" />
                </div>

                <div class="mt-4 flex items-center justify-start">
                    <label class="inline-flex items-center" for="remember_me">
                        <x-checkbox id="remember_me" name="remember_me" />
                        <span class="ml-2 select-none text-sm text-muted-foreground">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="mt-4 flex items-center justify-end">
                    <a class="text-sm text-muted-foreground hover:text-foreground" href="{{ route('register') }}">
                        {{ __('Register?') }}
                    </a>

                    <x-button class="ml-3">
                        {{ __('Log in') }}
                    </x-button>
                </div>
            </form>
        </x-slot:content>
    </x-card>

</x-guest-layout>
