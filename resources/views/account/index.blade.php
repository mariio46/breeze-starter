<x-auth-layout title="Account">
    <x-slot:header>
        Account Information
    </x-slot:header>
    <x-settings-tabs class="max-w-xl">
        <x-card>
            <x-slot:header>
                <x-slot:title>Account Information</x-slot:title>
                <x-slot:description>Update your account's accout information and email address.</x-slot:description>
            </x-slot:header>
            <x-slot:content>
                <form method="post" action="{{ route('settings.account') }}">
                    @csrf
                    @method('patch')
                    <div>
                        <x-label for="name" :value="__('Name')" />
                        <x-input class="mt-1 block w-full" id="name" name="name" type="text" :value="old('name', $user->name)" required autofocus autocomplete="name" />
                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                    </div>

                    <div class="mt-6">
                        <x-label for="email" :value="__('Email')" />
                        <x-input class="mt-1 block w-full" id="email" name="email" type="email" :value="old('email', $user->email)" required autocomplete="username" />
                        <x-input-error class="mt-2" :messages="$errors->get('email')" />

                        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                            <div>
                                <p class="mt-2 text-sm text-gray-800">
                                    {{ __('Your email address is unverified.') }}

                                    <button class="rounded-md text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                                        form="send-verification">
                                        {{ __('Click here to re-send the verification email.') }}
                                    </button>
                                </p>

                                <x-action-message status="verification-link-sent" :message="__('A new verification link has been sent to your email address.')" />
                            </div>
                        @endif
                    </div>

                    <div class="mt-6 flex items-center gap-4">
                        <x-button>{{ __('Save') }}</x-button>

                        <x-action-message status="account-updated" />
                    </div>
                </form>
            </x-slot:content>
        </x-card>
    </x-settings-tabs>
</x-auth-layout>
