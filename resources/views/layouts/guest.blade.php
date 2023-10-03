<x-base-layout>
    <main class="flex min-h-screen flex-col items-center px-4 pt-6 sm:justify-center sm:pt-0">
        <div class="mt-6 w-full max-w-md pt-6">
            {{ $slot }}
        </div>

        <div class="fixed bottom-0 right-0 mb-4 mr-4">
            <x-theme-toggle class="h-[2.7rem] w-[2.7rem]" size="icon" variant="toggle" />
        </div>
    </main>
</x-base-layout>
