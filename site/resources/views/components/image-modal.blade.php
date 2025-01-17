<div x-data="{ modalOpen: false }"
     @keydown.escape.window="modalOpen = false"
     class="relative z-50 w-auto h-auto">
    {{-- Show the image, modal opens when image clicked --}}
    <button @click="modalOpen=true" class="inline-flex items-center justify-center">
        <img class="max-h-full w-auto" src="{{ $image->display_image_path }}" alt="">
    </button>
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
                 class="relative w-11/12 sm:w-full py-3 bg-white px-6 border border-neutral-300 sm:max-w-lg rounded-md">
                <div class="flex flex-col gap-3">
                    {{-- Show the image in modal --}}
                    <div class="relative w-auto">
                        <img class="max-h-[85vh] w-auto" src="{{ $image->display_image_path }}" alt="">
                    </div>
                    {{-- Modal close and download buttons --}}
                    <div class="flex justify-between">
                        <button @click="modalOpen=false" type="button" class="inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium transition-colors border rounded-md focus:outline-none focus:ring-2 focus:ring-neutral-100 focus:ring-offset-2 hover:bg-neutral-100">Close</button>
                        <a href="/download-r2-image/{{ $folder }}/{{ $image->image_name }}" class="inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium transition-colors border rounded-md focus:outline-none focus:ring-2 focus:ring-neutral-100 focus:ring-offset-2 hover:bg-neutral-100" >Download</a>
                    </div>
                </div>
            </div>
        </div>
    </template>
</div>
