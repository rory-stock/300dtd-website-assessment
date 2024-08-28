<form action="/new-event" method="POST">
    @csrf

    {{-- Event Name --}}
    <div class="flex flex-col pb-4">
        <label for="name" class="text-lg">Event Name</label>
        <input required type="text" id="name" name="eventName" class="w-full h-10 px-3 py-2 mt-1 text-sm border border-neutral-300 rounded-md focus:ring-neutral-900 focus:border-neutral-900">
    </div>

    {{-- Event Date --}}
    <div class="flex flex-col pb-4">
        <label for="date" class="text-lg">Event Date</label>
        <input required type="date" id="date" name="eventDate" class="w-full h-10 px-3 py-2 mt-1 text-sm border border-neutral-300 rounded-md focus:ring-neutral-900 focus:border-neutral-900">
    </div>

    {{-- Event Location --}}
    <div class="flex flex-col pb-4">
        <label for="location" class="text-lg">Event Location</label>
        <input required type="text" id="location" name="eventLocation" class="w-full h-10 px-3 py-2 mt-1 text-sm border border-neutral-300 rounded-md focus:ring-neutral-900 focus:border-neutral-900">
    </div>

    {{-- Event Folder in cloudflare R2 --}}
    <div class="flex flex-col pb-4">
        <div class="flex gap-1 items-center">
            <label for="description" class="text-lg">Event Folder</label>
            <label for="description" class="text-sm text-gray-500">(Folder must be uploaded to Cloudflare R2 to show)</label>
        </div>
        <input required type="text" id="description" name="eventFolder" class="w-full h-10 px-3 py-2 mt-1 text-sm border border-neutral-300 rounded-md focus:ring-neutral-900 focus:border-neutral-900">
    </div>

    {{-- Submit and Cancel Buttons --}}
    <div class="flex gap-3 sm:gap-0 flex-col-reverse sm:flex-row sm:justify-end sm:space-x-2">
        <button @click="modalOpen=false" type="button" class="inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium transition-colors border rounded-md focus:outline-none focus:ring-2 focus:ring-neutral-100 focus:ring-offset-2 hover:bg-neutral-100">Cancel</button>
        <button type="submit" class="inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium text-white transition-colors border border-transparent rounded-md focus:outline-none focus:ring-2 focus:ring-neutral-900 focus:ring-offset-2 bg-neutral-950 hover:bg-neutral-700 hover:cursor-pointer">Create</button>
    </div>
</form>
