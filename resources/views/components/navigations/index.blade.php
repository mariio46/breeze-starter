<nav class='hidden border-b bg-card py-6 lg:block'>
    <div class="mx-auto flex max-w-screen-2xl items-center justify-between px-4 sm:px-6">
        <div class="flex items-center gap-x-6">
            <a href="{{ route('home') }}">
                <x-application-logo class="block h-12 w-auto fill-muted-foreground transition duration-300 hover:fill-foreground" />
            </a>
            <div class="flex items-center gap-x-3">
                <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                    {{ __('Home') }}
                </x-nav-link>
                <x-nav-link :href="route('articles')" :active="request()->routeIs('articles')">
                    {{ __('Articles') }}
                </x-nav-link>
                <x-nav-link :href="route('series')" :active="request()->routeIs('series')">
                    {{ __('Series') }}
                </x-nav-link>
            </div>
        </div>

        <div class="flex items-center gap-x-3">
            <x-theme-toggle class="h-[2.7rem] w-[2.7rem]" variant="outline" size="icon" />
            @auth
                <x-dropdown-menu align="right" width="72">
                    <x-slot:trigger>
                        <x-avatar class="h-[2.85rem] w-[2.85rem] cursor-pointer">
                            <x-avatar.image :src="auth()
                                ->user()
                                ->avatar()" />
                            <x-avatar.fallback :value="acronym(auth()->user()->name)" />
                        </x-avatar>
                    </x-slot:trigger>

                    <x-slot:content>
                        <x-dropdown-menu.label>
                            <div>{{ auth()->user()->name }}</div>
                            <small class="text-muted-foreground">{{ auth()->user()->email }}</small>
                        </x-dropdown-menu.label>
                        <x-dropdown-menu.separator />
                        <x-dropdown-menu.link :href="route('dashboard')">
                            <x-tabler-chart-pie-3 />
                            {{ __('Dashboard') }}
                        </x-dropdown-menu.link>
                        <x-dropdown-menu.link :href="route('settings.account')">
                            <x-tabler-settings-2 />
                            {{ __('Settings') }}
                        </x-dropdown-menu.link>
                        <x-dropdown-menu.separator />
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-menu.link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                <x-tabler-logout class="h-5 w-5 stroke-[1.3]" />
                                {{ __('Log Out') }}
                            </x-dropdown-menu.link>
                        </form>
                    </x-slot:content>
                </x-dropdown-menu>
            @else
                <x-navigations.link :href="route('login')">
                    {{ __('Login') }}
                </x-navigations.link>
                <x-navigations.link :href="route('register')">
                    {{ __('Register') }}
                </x-navigations.link>
            @endauth
        </div>
    </div>
</nav>
