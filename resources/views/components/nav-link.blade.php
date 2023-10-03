@props(['active'])

@php
    $classes = $active ?? false ? 'text-foreground font-medium' : 'text-muted-foreground hover:text-foreground';
@endphp

<a wire:navigate {{ $attributes->twMerge('px-4 py-2 inline-block tracking-tight hover:bg-accent rounded-md capitalize', $classes) }}>
    {{ $slot }}
</a>
