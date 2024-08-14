<form action="/new-event" method="POST" hx-boost="true">
    @csrf
    <div class="flex flex-col pb-4">
        <label for="name" class="text-lg">Event Name</label>
        <input required type="text" id="name" name="eventName" class="w-full h-10 px-3 py-2 mt-1 text-sm border border-neutral-300 rounded-md focus:ring-neutral-900 focus:border-neutral-900">
    </div>
    <div class="flex flex-col pb-4">
        <label for="date" class="text-lg">Event Date</label>
        <input required type="date" id="date" name="eventDate" class="w-full h-10 px-3 py-2 mt-1 text-sm border border-neutral-300 rounded-md focus:ring-neutral-900 focus:border-neutral-900">
    </div>
    <div class="flex flex-col pb-4">
        <label for="location" class="text-lg">Event Location</label>
        <input required type="text" id="location" name="eventLocation" class="w-full h-10 px-3 py-2 mt-1 text-sm border border-neutral-300 rounded-md focus:ring-neutral-900 focus:border-neutral-900">
    </div>
    <div class="flex flex-col pb-4">
        <label for="description" class="text-lg">Event Folder</label>
        <input required type="text" id="description" name="eventFolder" class="w-full h-10 px-3 py-2 mt-1 text-sm border border-neutral-300 rounded-md focus:ring-neutral-900 focus:border-neutral-900">
    </div>

    <div class="flex flex-col-reverse sm:flex-row sm:justify-end sm:space-x-2">
        <button @click="modalOpen=false" type="button" class="inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium transition-colors border rounded-md focus:outline-none focus:ring-2 focus:ring-neutral-100 focus:ring-offset-2 hover:bg-neutral-100">Cancel</button>
        <button type="submit" class="inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium text-white transition-colors border border-transparent rounded-md focus:outline-none focus:ring-2 focus:ring-neutral-900 focus:ring-offset-2 bg-neutral-950 hover:bg-neutral-700 hover:cursor-pointer">Create</button>
    </div>
</form>
