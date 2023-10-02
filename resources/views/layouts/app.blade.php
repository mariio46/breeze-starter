<x-base-layout>
    <div class="min-h-screen">
        {{-- @include('layouts.navigation') --}}
        <x-navigation />
        <main class="py-3">
            {{ $slot }}
        </main>
    </div>
</x-base-layout>
