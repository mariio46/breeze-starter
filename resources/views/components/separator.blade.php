@props(['orientation' => 'horizontal'])
<div {{ $attributes->twMerge('shrink-0 bg-border', $orientation == 'horizontal' ? 'h-[1px] w-full' : 'h-full w-[1px]') }}>
</div>
