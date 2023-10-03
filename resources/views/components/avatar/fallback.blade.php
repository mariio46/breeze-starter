@props(['value'])
<div {{ $attributes->twMerge('flex h-full w-full items-center justify-center rounded-full bg-muted') }}>
    {{ $value ?? $slot }}
</div>
