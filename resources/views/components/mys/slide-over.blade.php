<div x-data="{
    slideOverOpen: false
}" class="relative z-50 h-auto w-auto">
    <button @click="slideOverOpen=true"
        class="inline-flex h-10 items-center justify-center rounded-md border bg-white px-4 py-2 text-sm font-medium transition-colors hover:bg-neutral-100 focus:bg-white focus:outline-none focus:ring-2 focus:ring-neutral-200/60 focus:ring-offset-2 active:bg-white disabled:pointer-events-none disabled:opacity-50">Open</button>
    <template x-teleport="body">
        <div x-show="slideOverOpen" @keydown.window.escape="slideOverOpen=false" class="relative z-[99]">
            <div x-show="slideOverOpen" x-transition.opacity.duration.600ms @click="slideOverOpen = false"
                class="fixed inset-0 bg-black bg-opacity-10"></div>
            <div class="fixed inset-0 overflow-hidden">
                <div class="absolute inset-0 overflow-hidden">
                    <div class="fixed inset-y-0 right-0 flex max-w-full pl-10">
                        <div x-show="slideOverOpen" @click.away="slideOverOpen = false"
                            x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                            x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                            x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                            x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"
                            class="w-screen max-w-md">
                            <div
                                class="flex h-full flex-col overflow-y-scroll border-l border-neutral-100/70 bg-white py-5 shadow-lg">
                                <div class="px-4 sm:px-5">
                                    <div class="flex items-start justify-between pb-1">
                                        <h2 class="text-base font-semibold leading-6 text-gray-900"
                                            id="slide-over-title">Slide Over Title</h2>
                                        <div class="ml-3 flex h-auto items-center">
                                            <button @click="slideOverOpen=false"
                                                class="absolute right-0 top-0 z-30 mr-5 mt-4 flex items-center justify-center space-x-1 rounded-md border border-neutral-200 px-3 py-2 text-xs font-medium uppercase text-neutral-600 hover:bg-neutral-100">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="h-4 w-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M6 18L18 6M6 6l12 12"></path>
                                                </svg>
                                                <span>Close</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="relative mt-5 flex-1 px-4 sm:px-5">
                                    <div class="absolute inset-0 px-4 sm:px-5">
                                        <div
                                            class="relative h-full overflow-hidden rounded-md border border-dashed border-neutral-300">
                                        </div>
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
