<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight ">
            {{ __('Event > Create') }}
        </h2>
    </x-slot>
    <form action="{{ route('event.store') }}" method="post">
        @csrf
    <div class=" flex flex-col p-0 max-w-7xl mx-auto sm:px-6 lg:px-8 w-3/5 overflow-hidden cursor-pointer rounded-t-2xl justify-center bg-white px-12 py-px-8 py-3 mt-6 ">
        <div class="font-bold text-center text-xl align-text-top">
            Event Title
            <div class=" text-gray-400 text-base mb-2 leading-4">
                <input class="text-black text-center border border-transparent focus:outline-none focus:ring-2 focus:border-transparent" name="Event_name" type="text" placeholder="Insert event title">
            </div>
        </div>
    </div>
    <div class=" flex flex-col  w-3/5 mx-auto sm:px-6 p-0 overflow-hidden rounded-none cursor-pointer-t-xl bg-white px-6 py-px-6 py-3 border-t-2 border-gray-200">
        <div class="font-bold text-left">
            Details
            <div class=" text-gray-400 leading-8">
                <input class="text-black border border-transparent focus:outline-none focus:ring-2 focus:border-transparent" name="Report_desc" type="text" placeholder="What's the event about?">
            </div>
        </div>
    </div>
    <div class=" flex flex-col  w-3/5 mx-auto sm:px-6 p-0 overflow-hidden rounded-none cursor-pointer-t-xl bg-white px-6 py-px-6 py-3 border-t-2 border-gray-200">
        <div class="font-bold text-left">
            Date
            <div class=" text-gray-400">
                <input class="text-black border border-transparent focus:outline-none focus:ring-2 focus:border-transparent" name="date_create"  type="date" placeholder="Insert date">
            </div>
        </div>
    </div>
    <div class=" flex flex-col  w-3/5 mx-auto sm:px-6 p-0 overflow-hidden rounded-none cursor-pointer-t-xl bg-white px-6 py-px-6 py-3">
        <div class="font-bold text-left">
            Time
            <div class=" text-gray-400">
                <input class="text-black border border-transparent focus:outline-none focus:ring-2 focus:border-transparent" name="time" type="time" placeholder="Insert time">
            </div>
        </div>
    </div>
    <div class=" flex flex-col  w-3/5 mx-auto sm:px-6 p-0 overflow-hidden rounded-b-2xl cursor-pointer-t-xl bg-white px-6 py-px-6 py-3">
        <div class="font-bold text-left">
            Place
            <div class=" text-gray-400">
                <input class="text-black border border-transparent focus:outline-none focus:ring-2 focus:border-transparent" name="place_create" type="text" placeholder="Insert place?">
            </div>
        </div>
    </div>
    <div class=" flex flex-col  w-3/5 mx-auto sm:px-6 p-0 overflow-hidden rounded-2xl cursor-pointer-t-xl items-center bg-green-400 hover:bg-green-300 px-6 py-px-6 py-3 mt-6">
        <input class="font-bold text-2xl text-white bg-transparent text-left" type="submit" value="Create Event"/>
    
    </div>
</form>
</x-app-layout>