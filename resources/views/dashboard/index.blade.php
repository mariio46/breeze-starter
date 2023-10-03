<x-auth-layout title="Dashboard">
    <div class="px-6 py-10 sm:px-8 sm:py-14">
        <x-card>
            <x-slot:header>
                <x-slot:title>
                    Dashboard
                </x-slot:title>
                <x-slot:description>
                    All statistics related to your account.
                </x-slot:description>
            </x-slot:header>
            <x-slot:content>
                {{ __("You're logged in") }}
            </x-slot:content>
        </x-card>
    </div>
</x-auth-layout>
