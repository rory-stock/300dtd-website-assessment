<form action="/send-mail" method="POST" class="flex flex-col gap-8 left-12 sm:left-16 mt-4 sm:absolute">
    @csrf

{{--  Name Input  --}}
    <div class="container sm:w-full w-fit max-w-xs pl-6 sm:pl-0 sm:mx-auto">
        <label>Name</label>
        <input type="text" name="name" required class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50">
    </div>

{{--  Email Input  --}}
    <div class="container sm:w-full w-fit max-w-xs pl-6 sm:pl-0 sm:mx-auto">
        <label>Email Address</label>
        <input type="email" name="email" required class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50">
    </div>

{{--  Subject Input  --}}
    <div class="container sm:w-full w-fit max-w-xs pl-6 sm:pl-0 sm:mx-auto">
        <label>Subject</label>
        <input type="text" name="subject" required class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50">
    </div>

{{--  Message Input  --}}
    <div class="container sm:w-full w-fit max-w-xs pl-6 sm:pl-0 sm:mx-auto">
        <label>Message</label>
        {{--  Textarea for message input  --}}
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

{{--  Submit Button  --}}
    <div x-data="{ alertIsVisible: false }">
        <button @click="alertIsVisible = true" type="submit" class="container inline-flex items-center justify-center px-4 py-2 text-sm font-medium tracking-wide text-white transition-colors duration-200 rounded bg-black hover:bg-zinc-800 focus:ring-2 focus:ring-offset-2 focus:ring-neutral-900 focus:shadow-outline focus:outline-none pl-6 sm:pl-0 w-3/4 sm:w-full max-w-xs">
            Submit
        </button>
    </div>
</form>
