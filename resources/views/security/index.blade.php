<x-app-layout>
    <div class="py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <x-card>
                <x-slot:header>
                    <x-slot:title>Update Password</x-slot:title>
                    <x-slot:description>Ensure your account is using a long, random password to stay secure.</x-slot:description>
                </x-slot:header>
                <x-slot:content>
                    <form method="post" action="{{ route('security') }}" class="-mt-6 space-y-6">
                        @csrf
                        @method('put')

                        <div>
                            <x-label for="current_password" :value="__('Current Password')" />
                            <x-input id="current_password" name="current_password" type="password" class="mt-1 block w-full"
                                autocomplete="current-password" />
                            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                        </div>

                        <div>
                            <x-label for="password" :value="__('New Password')" />
                            <x-input id="password" name="password" type="password" class="mt-1 block w-full"
                                autocomplete="new-password" />
                            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                        </div>

                        <div>
                            <x-label for="password_confirmation" :value="__('Confirm Password')" />
                            <x-input id="password_confirmation" name="password_confirmation" type="password"
                                class="mt-1 block w-full" autocomplete="new-password" />
                            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                        </div>

                        <div class="flex items-center gap-4">
                            <x-button>{{ __('Save') }}</x-button>

                            @if (session('status') === 'password-updated')
                                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                                    class="text-sm text-gray-600">{{ __('Saved.') }}</p>
                            @endif
                        </div>
                    </form>
                </x-slot:content>
            </x-card>
        </div>
    </div>
</x-app-layout>
