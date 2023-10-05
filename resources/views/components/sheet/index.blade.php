<div class="relative z-50 h-auto w-auto" x-data="{
    slideOverOpen: false
}">
    <span @click="slideOverOpen=true">
        {{ $trigger }}
    </span>
    <template x-teleport="body">
        <div class="relative z-[99]" x-show="slideOverOpen" @keydown.window.escape="slideOverOpen=false">
            <div class="fixed inset-0 bg-background/80" x-show="slideOverOpen" x-transition.opacity.duration.600ms @click="slideOverOpen = false"></div>
            <div class="fixed inset-0 overflow-hidden">
                <div class="absolute inset-0 overflow-hidden">
                    <div class="fixed inset-y-0 right-0 flex max-w-full pl-10">
                        <div class="w-screen max-w-xs" x-show="slideOverOpen" @click.away="slideOverOpen = false" x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                            x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                            x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full">
                            <div class="flex h-full flex-col overflow-y-scroll border-l bg-card py-5 shadow-lg">
                                <button class="absolute right-4 top-4 z-30 rounded-full focus:ring focus:ring-primary/10" @click="slideOverOpen=false">
                                    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12">
                                        </path>
                                    </svg>
                                    <span class="sr-only">Close</span>
                                </button>
                                <div class="relative flex-1">
                                    <div class="absolute inset-0 px-6 py-4">
                                        {{ $slot }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </template>
</div>
