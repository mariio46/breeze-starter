<x-auth-layout title="Danger">
    <x-slot:header>
        Danger Zone
    </x-slot:header>
    <x-settings-tabs class="max-w-xl">
        <x-card>
            <x-slot:header>
                <x-slot:title>
                    Delete Account
                </x-slot:title>
                <x-slot:description>
                    Once your account is deleted, all of its resources and data will be permanently deleted. Before
                    deleting your account, please download any data or information that you wish to retain.
                </x-slot:description>
            </x-slot:header>
            <x-slot:content>
                <x-button x-data="" variant="destructive" x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">{{ __('Delete Account') }}</x-button>
                <x-modal name="confirm-user-deletion" maxWidth="xl" :show="$errors->userDeletion->isNotEmpty()" focusable>
                    <form class="p-6" method="post" action="{{ route('settings.danger') }}">
                        @csrf
                        @method('delete')
                        <h2 class="mb-2 text-xl font-semibold leading-none tracking-tight">
                            {{ __('Are you sure you want to delete your account?') }}
                        </h2>
                        <p class="text-sm text-muted-foreground">
                            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                        </p>
                        <div class="mt-6">
                            <x-label class="sr-only" for="password" value="{{ __('Password') }}" />
                            <x-input class="mt-1 block w-full" id="password" name="password" type="password" placeholder="{{ __('Password') }}" />
                            <x-input-error class="mt-2" :messages="$errors->userDeletion->get('password')" />
                        </div>
                        <div class="mt-6 flex justify-end">
                            <x-button variant="outline" x-on:click="$dispatch('close')">
                                {{ __('Cancel') }}
                            </x-button>
                            <x-button class="ml-3" variant="destructive">
                                {{ __('Delete Account') }}
                            </x-button>
                        </div>
                    </form>
                </x-modal>
            </x-slot:content>
        </x-card>
    </x-settings-tabs>
</x-auth-layout>
