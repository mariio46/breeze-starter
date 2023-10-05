<x-base-layout>
    <div class="min-h-screen">
        <x-navigations />
        <x-side-navigation />
        @isset($header)
            <header class="border-b py-6 shadow-sm sm:py-8 lg:py-12">
                <x-container>
                    <h1 class="text-xl font-semibold text-foreground">
                        {{ $header }}
                    </h1>
                </x-container>
            </header>
        @endisset
        <main class="py-3">
            {{ $slot }}
        </main>
    </div>
</x-base-layout>
