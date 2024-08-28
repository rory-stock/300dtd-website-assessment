@php
    use Illuminate\Support\Facades\DB;

    // Get the event details
    $eventName = DB::table('events')->where('id', $eventID)->value('event_name');
    $eventDate = DB::table('events')->where('id', $eventID)->value('event_date');
    $eventLocation = DB::table('events')->where('id', $eventID)->value('event_location');

    // Get the event images
    $images = DB::table('event_images')
                ->where('event_id', $eventID)
                ->get();
 @endphp

<form action="/edit-event" method="POST">
    @csrf

    {{-- Event Name --}}
    <div class="flex flex-col pb-4">
        <label for="name" class="text-lg">Event Name</label>
        <input type="text" id="name" name="eventName" placeholder="{{ $eventName }}" class="w-full h-10 px-3 py-2 mt-1 text-sm border border-neutral-300 rounded-md focus:ring-neutral-900 focus:border-neutral-900">
    </div>

    {{-- Event Date --}}
    <div class="flex flex-col pb-4">
        <label for="date" class="text-lg">Event Date</label>
        <input type="text" id="date" name="eventDate" placeholder="{{ $eventDate }}" onfocus="(this.type='date')" onblur="(this.type='text')" class="w-full h-10 px-3 py-2 mt-1 text-sm border border-neutral-300 rounded-md focus:ring-neutral-900 focus:border-neutral-900">
    </div>

    {{-- Event Location --}}
    <div class="flex flex-col pb-4">
        <label for="location" class="text-lg">Event Location</label>
        <input type="text" id="location" name="eventLocation" placeholder="{{ $eventLocation }}" class="w-full h-10 px-3 py-2 mt-1 text-sm border border-neutral-300 rounded-md focus:ring-neutral-900 focus:border-neutral-900">
    </div>

    {{-- Hidden input for event ID --}}
    <input type="hidden" name="eventID" value="{{ $eventID }}">

    {{-- Choose a cover image to display on the event page --}}
    <label for="cover" class="text-lg">Choose an image to display</label>
    <div class="space-y-3 max-h-40 overflow-y-scroll border border-neutral-300 rounded-md focus:ring-neutral-900 focus:border-neutral-900 p-2 mb-2">
        {{-- Go through each image and display it as a radio button --}}
        @foreach($images as $image)
            <label class="flex items-center gap-2 p-5 space-x-3 bg-white border rounded-md shadow-sm hover:bg-gray-50 border-neutral-200/70">
                <input type="radio" id="cover" name="coverImage" value="{{ $image->id }}" class="text-gray-900 translate-y-px focus:ring-gray-700">
                <span class="relative flex flex-col text-left space-y-1.5 leading-none">
                    <img src="{{ $image->display_image_path }}" alt="" class="w-auto max-h-20 object-cover rounded-md">
                </span>
                <span class="text-sm text-gray-500">{{ $image->image_name }}</span>
            </label>
        @endforeach
    </div>

    {{-- Delete, Submit and Cancel Buttons --}}
    <div class="flex justify-between">

        {{-- Delete Event Button --}}
        <a href="/delete-event/{{ $eventID }}" class="inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium text-white transition-colors border border-transparent rounded-md focus:outline-none focus:ring-2 focus:ring-neutral-900 focus:ring-offset-2 bg-red-600 hover:bg-red-500 hover:cursor-pointer">Delete</a>

        {{-- Submit and Cancel Buttons --}}
        <div class="flex flex-col-reverse sm:flex-row sm:justify-end sm:space-x-2">
            <div class="flex flex-col gap-2 sm:flex-row sm:gap-3">
                <button @click="modalOpen=false" type="button" class="inline-flex items-center sm:justify-center h-10 px-4 py-2 text-sm font-medium transition-colors border rounded-md focus:outline-none focus:ring-2 focus:ring-neutral-100 focus:ring-offset-2 hover:bg-neutral-100">Cancel</button>
                <button type="submit" class="inline-flex items-center sm:justify-center h-10 px-4 py-2 text-sm font-medium text-white transition-colors border border-transparent rounded-md focus:outline-none focus:ring-2 focus:ring-neutral-900 focus:ring-offset-2 bg-neutral-950 hover:bg-neutral-700 hover:cursor-pointer">Update</button>
            </div>
        </div>
    </div>
</form>
