<x-tabs>
    <x-slot:header>
        <x-tabs.link value="Account" :href="route('settings.account')" :active="request()->routeIs('settings.account')" />
        <x-tabs.link value="Security" :href="route('settings.security')" :active="request()->routeIs('settings.security')" />
        <x-tabs.link value="Danger" :href="route('settings.danger')" :active="request()->routeIs('settings.danger')" />
        <x-tabs.link value="Tab 4" />
        <x-tabs.link value="Tab 5" />
        <x-tabs.link value="Tab 6" />
    </x-slot:header>
    <x-slot:content>
        <div {{ $attributes->twMerge('') }}>{{ $slot }}</div>
    </x-slot:content>
</x-tabs>
