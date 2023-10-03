<x-base-layout>
    <div class="min-h-screen">
        <div class="fixed bottom-0 left-0 mb-4 ml-4">
            <x-theme-toggle class="h-[2.7rem] w-[2.7rem]" size="icon" variant="toggle" />
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
                    <x-tabler-settings-2 />
                    Settings
                </x-aside.link>
                <x-aside.link>
                    Link-3
                </x-aside.link>
                <x-aside.link>
                    Link-4
                </x-aside.link>
                <x-aside.link>
                    Link-5
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
                <div>
                    {{ $slot }}
                </div>
            </main>
        </div>
    </div>
</x-base-layout>
