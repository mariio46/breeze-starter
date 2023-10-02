<x-app-layout>
    <div class="py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8 space-y-6">
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
                    <x-button x-data="" variant="destructive"
                        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">{{ __('Delete Account') }}</x-button>

                    <x-modal maxWidth="xl" name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
                        <form method="post" action="{{ route('danger') }}" class="p-6">
                            @csrf
                            @method('delete')

                            <h2 class="text-xl font-semibold leading-none tracking-tight mb-2">
                                {{ __('Are you sure you want to delete your account?') }}
                            </h2>

                            <p class="text-sm text-muted-foreground">
                                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                            </p>

                            <div class="mt-6">
                                <x-label for="password" value="{{ __('Password') }}" class="sr-only" />

                                <x-input id="password" name="password" type="password" class="mt-1 block w-full"
                                    placeholder="{{ __('Password') }}" />

                                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                            </div>

                            <div class="mt-6 flex justify-end">
                                <x-button variant="outline" x-on:click="$dispatch('close')">
                                    {{ __('Cancel') }}
                                </x-button>

                                <x-button variant="destructive" class="ml-3">
                                    {{ __('Delete Account') }}
                                </x-button>
                            </div>
                        </form>
                    </x-modal>
                </x-slot:content>
            </x-card>
        </div>
    </div>
</x-app-layout>
