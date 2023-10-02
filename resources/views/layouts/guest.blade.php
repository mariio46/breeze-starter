<x-base-layout>
    <main class="flex min-h-screen flex-col items-center px-4 pt-6 sm:justify-center sm:pt-0">
        <div class="mt-6 w-full max-w-md pt-6">
            {{ $slot }}
        </div>

        <x-theme-toggle
            class="fixed bottom-0 right-0 mb-4 mr-8 ml-2 hidden border-0 bg-transparent p-0 text-muted-foreground hover:bg-transparent lg:block" />
    </main>
</x-base-layout>
