@props(['status', 'message' => null])

@if (session('status') === $status)
    <p class="text-sm text-muted-foreground" x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)">
        {{ $message ? $message : __('Saved.') }}
    </p>
@endif
