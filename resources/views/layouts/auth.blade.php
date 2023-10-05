<x-base-layout>
    <div class="min-h-screen">
        <x-side-navigation />
        <div class="fixed bottom-0 left-0 mb-2 ml-4 hidden lg:block">
            <x-theme-toggle class="hidden h-[2.7rem] w-[2.7rem] lg:block" size="icon" variant="toggle" />
        </div>

        <div class="mx-auto flex max-w-screen-2xl">
            <x-aside>
                <li class="mb-8">
                    <div class="flex items-center font-normal">
                        <div class="mr-3 shrink-0">
                            <x-avatar class="h-12 w-12">
                                <x-avatar.image :src="auth()
                                    ->user()
                                    ->avatar()" />
                                <x-avatar.fallback :value="acronym(auth()->user()->name)" />
                            </x-avatar>
                        </div>
                        <div>
                            <div>{{ auth()->user()->name }}</div>
                            <div class="text-sm text-muted-foreground">
                                {{ auth()->user()->email }}
                            </div>
                        </div>
                    </div>
                </li>
                <x-aside.link :href="route('home')">
                    <x-tabler-home />
                    Home
                </x-aside.link>
                <x-aside.link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    <x-tabler-chart-pie-3 />
                    Dashboard
                </x-aside.link>
                <x-aside.link :href="route('settings.account')" :active="request()->routeIs('settings.*')">
                    <x-tabler-settings />
                    Settings
                </x-aside.link>
                <x-separator />
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-aside.link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                        <x-tabler-logout />
                        {{ __('Log Out') }}
                    </x-aside.link>
                </form>
            </x-aside>
            <main class="w-full">
                @isset($header)
                    <header class="flex items-center justify-between border-b bg-card px-6 py-4 sm:px-8 sm:py-6">
                        <h1 class="text-lg font-semibold text-foreground">
                            {{ $header }}
                        </h1>
                    </header>
                @endisset
                <div>
                    {{ $slot }}
                </div>
            </main>
        </div>
    </div>
</x-base-layout>
