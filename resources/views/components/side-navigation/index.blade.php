<nav class='flex items-center justify-between border-b px-4 py-5 lg:hidden'>
    <a href="/">
        <x-application-logo class="block h-10 w-auto fill-muted-foreground transition duration-300 hover:fill-foreground" />
    </a>
    <div class="flex items-center gap-x-2">
        <x-sheet>
            <x-slot:trigger>
                @auth
                    <img class="h-10 w-10 rounded-full" src="{{ auth()->user()->avatar() }}" alt="{{ auth()->user()->name }}">
                @else
                    <x-tabler-layout-sidebar-left-collapse class="h-8 w-8 stroke-[1.1]" />
                @endauth
            </x-slot:trigger>
            <div>
                <x-application-logo class="h-8 w-8 fill-muted-foreground transition duration-300 hover:fill-foreground" />
                <x-sheet.label class="mt-6 flex items-center justify-between">
                    @auth
                        <div>
                            <div>{{ auth()->user()->name }}</div>
                            <small class="text-muted-foreground">{{ auth()->user()->email }}</small>
                        </div>
                    @else
                        <h4 class="font-semibold tracking-tight">
                            {{ config('app.name') }}
                        </h4>
                    @endauth
                </x-sheet.label>
                <x-sheet.link :href="route('home')" :active="request()->routeIs('home')">
                    {{ __('Home') }}
                </x-sheet.link>
                <x-sheet.link :href="route('articles')" :active="request()->routeIs('articles')">
                    {{ __('Articles') }}
                </x-sheet.link>
                <x-sheet.link :href="route('series')" :active="request()->routeIs('series')">
                    {{ __('Series') }}
                </x-sheet.link>
                @auth
                    <x-separator class="my-2" />
                    <x-sheet.link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-sheet.link>
                    <x-sheet.link :href="route('settings.account')" :active="request()->routeIs('settings.*')">
                        {{ __('Settings') }}
                    </x-sheet.link>
                    <x-separator class="my-2" />
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-sheet.link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-sheet.link>
                    </form>
                @else
                    <x-separator class="my-2" />
                    <x-sheet.link :href="route('login')">
                        {{ __('Login') }}
                    </x-sheet.link>
                    <x-sheet.link :href="route('register')">
                        {{ __('Register') }}
                    </x-sheet.link>
                @endauth
            </div>
        </x-sheet>
    </div>
</nav>
