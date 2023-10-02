<nav class='hidden border-b bg-card py-6 lg:block'>
    <div class="mx-auto flex max-w-screen-2xl items-center justify-between px-4 sm:px-6 lg:px-8">
        <div class="flex items-center">
            <a href="/">
                <x-application-logo class="mr-6 h-10 w-10 shrink-0 fill-muted-foreground" />
            </a>
        </div>

        <div class="flex items-center gap-x-1">
            <x-theme-toggle />
            @auth
                <x-dropdown-menu align="right" width="72">
                    <x-slot:trigger>
                        <x-button variant="secondary">
                            <x-tabler-user-circle class="mr-3 h-5 w-5 stroke-[1.3]" />
                            <div>{{ Auth::user()->name }}</div>

                            <x-tabler-chevron-down class="-mr-1 ml-2 h-3 w-3" />
                        </x-button>
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
                        <x-dropdown-menu.link :href="route('profile')">
                            <x-tabler-settings-2 />
                            {{ __('Settings') }}
                        </x-dropdown-menu.link>
                        <x-dropdown-menu.link :href="route('security')">
                            <x-tabler-shield-lock />
                            {{ __('Security') }}
                        </x-dropdown-menu.link>
                        <x-dropdown-menu.link :href="route('danger')">
                            <x-tabler-alert-triangle />
                            {{ __('Danger') }}
                        </x-dropdown-menu.link>

                        <x-dropdown-menu.separator />
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-menu.link :href="route('logout')"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                <x-tabler-logout class="w-5 h-5 stroke-[1.3]" />
                                {{ __('Log Out') }}
                            </x-dropdown-menu.link>
                        </form>
                    </x-slot:content>
                </x-dropdown-menu>
            @else
                <x-dropdown-menu align="right" width="60">
                    <x-slot:trigger>
                        <x-button variant="secondary">
                            <div>Login</div>

                            <x-tabler-chevron-down class="-mr-1 ml-2 h-3 w-3" />
                        </x-button>
                    </x-slot:trigger>

                    <x-slot:content>
                        <x-dropdown-menu.link :href="route('login')">
                            {{ __('Login') }}
                        </x-dropdown-menu.link>
                        <x-dropdown-menu.link :href="route('register')">
                            {{ __('Register') }}
                        </x-dropdown-menu.link>
                    </x-slot:content>
                </x-dropdown-menu>
            @endauth
        </div>
    </div>
</nav>
