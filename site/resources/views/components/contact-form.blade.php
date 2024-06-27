<form action="/send-mail" method="POST" hx-boost="true" class="flex flex-col gap-8 left-16 mt-4 absolute">
    @csrf
    <div class="container w-full max-w-xs mx-auto">
        <label>Name</label>
        <input type="text" name="name" required class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50">
    </div>

    <div class="container w-full max-w-xs mx-auto">
        <label>Email Address</label>
        <input type="email" name="email" required class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50">
    </div>

    <div class="container w-full max-w-xs mx-auto">
        <label>Subject</label>
        <input type="text" name="subject" required class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50">
    </div>

    <div class="container w-full max-w-xs mx-auto">
        <label>Message</label>
        <textarea x-data="{
                                resize () {
                                    $el.style.height = '0px';
                                    $el.style.height = $el.scrollHeight + 'px'
                                }
                              }"
                  x-init="resize()"
                  @input="resize()"
                  type="text"
                  name="message"
                  class="flex w-full h-auto min-h-[80px] px-3 py-2 text-sm bg-white border rounded border-neutral-300 ring-offset-background placeholder:text-neutral-400 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50"></textarea>
    </div>

    <div x-data="{ alertIsVisible: false }">
    <button @click="alertIsVisible = true" type="submit" class="container inline-flex items-center justify-center px-4 py-2 text-sm font-medium tracking-wide text-white transition-colors duration-200 rounded bg-black hover:bg-zinc-800 focus:ring-2 focus:ring-offset-2 focus:ring-neutral-900 focus:shadow-outline focus:outline-none">
        Submit
    </button>
        <template x-teleport="body">
            <div x-show="alertIsVisible" class="absolute bottom-14 right-4 w-full max-w-md overflow-hidden rounded-lg border bg-white text-slate-700 dark:bg-black dark:text-slate-300" role="alert" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
                <div class="flex w-full items-center gap-2 p-4">
                    <div class="text-green-500 rounded-full p-1" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-6" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-2">
                        <h3 class="text-sm font-semibold text-white">Message Sent Successfully</h3>
                    </div>
                    <button type="button" @click="alertIsVisible = false" class="ml-auto" aria-label="dismiss alert">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" stroke="currentColor" fill="none" stroke-width="2.5" class="w-4 h-4 shrink-0 hover:text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>
        </template>
    </div>
</form>
