<x-guest-layout>
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
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                        required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-label for="password" :value="__('Password')" />

                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                {{-- <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div> --}}
                <div class="mt-4 flex items-center justify-between">
                    <label for="remember_me" class="inline-flex items-center">
                        <x-checkbox id="remember_me" name="remember_me" />
                        <span class="ml-2 select-none text-sm text-muted-foreground">{{ __('Remember me') }}</span>
                    </label>
                    @if (Route::has('password.request'))
                        <a class="text-sm text-muted-foreground hover:text-foreground"
                            href="{{ route('password.request') }}" wire:navigate>
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
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
