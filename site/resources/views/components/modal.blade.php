<div x-data="{ modalOpen: false }"
     @keydown.escape.window="modalOpen = false"
     :class="{ 'z-40': modalOpen }" class="relative w-auto h-auto">
    {{-- Modal open button with icon slot --}}
    <button @click="modalOpen=true" class="inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium transition-colors bg-black border rounded-md hover:bg-neutral-700 active:bg-white focus:bg-white focus:outline-none focus:ring-2 focus:ring-neutral-200/60 focus:ring-offset-2 disabled:opacity-50 disabled:pointer-events-none">{{ $buttonIcon }}</button>
    {{-- Modal AlpineJS code --}}
    <template x-teleport="body">
        <div x-show="modalOpen" class="fixed top-0 left-0 z-[99] flex items-center justify-center w-screen h-screen" x-cloak>
            <div x-show="modalOpen"
                 x-transition:enter="ease-out duration-300"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="ease-in duration-300"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 @click="modalOpen=false" class="absolute inset-0 w-full h-full bg-white backdrop-blur-sm bg-opacity-70"></div>
            <div x-show="modalOpen"
                 x-trap.inert.noscroll="modalOpen"
                 x-transition:enter="ease-out duration-300"
                 x-transition:enter-start="opacity-0 -translate-y-2 sm:scale-95"
                 x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                 x-transition:leave="ease-in duration-200"
                 x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                 x-transition:leave-end="opacity-0 -translate-y-2 sm:scale-95"
                 class="relative w-3/4 sm:w-full pt-6 pb-4 sm:py-6 bg-white border shadow-lg px-7 border-neutral-200 sm:max-w-lg rounded-lg">
                <div class="flex items-center justify-between pb-2">
                    {{-- Modal title slot --}}
                    <h3 class="text-lg font-semibold">{{ $title }}</h3>
                    <button @click="modalOpen=false" class="absolute top-0 right-0 flex items-center justify-center w-8 h-8 mt-5 mr-5 text-gray-600 rounded-full hover:text-gray-800 hover:bg-gray-50">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                    </button>
                </div>
                {{-- Modal content slot --}}
                <div class="relative w-auto sm:pb-8">
                    {{ $content }}
                </div>
            </div>
        </div>
    </template>
</div>

