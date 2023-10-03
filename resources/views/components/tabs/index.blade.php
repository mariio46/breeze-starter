<div>
    <div class="mb-1 border-b bg-card">
        <ul class="-mb-px flex flex-wrap gap-x-3 px-5 pt-8 text-center text-sm font-medium">
            {{ $header }}
        </ul>
    </div>
    <div {{ $attributes->twMerge('p-4') }}>
        <!-- Content -->
        {{ $content }}
        <!-- /Content -->
    </div>
</div>
