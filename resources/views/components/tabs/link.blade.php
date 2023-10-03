@props(['active' => false, 'value'])

<li>
    <a
        {{ $attributes->twMerge('inline-block p-4 border-b-2 border-transparent hover:text-gray-600 hover:border-foreground dark:hover:text-gray-300', $active ? 'border-b-2 border-b-foreground text-foreground font-semibold ' : 'border-transparent text-muted-foreground') }}>
        {{ $value ?? $slot }}
    </a>
</li>
