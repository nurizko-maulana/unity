<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Event') }}
        </h2>
    </x-slot>

    <div class="py-12 px-3">

        <div class="flex">
            <div class="flex items-start justify-center w-1/5 h-40 sm:rounded-lg">
                <a href="{{ route('event.create') }}"
                        class="py-5 px-4 font-semibold rounded-lg shadow-md text-2xl text-white bg-green-400 hover:bg-green-300">
                            Create an event
                    </a>
            </div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 w-3/5 ">
                <div class="flex bg-white text-center h-40 justify-center rounded-lg shadow-lg mb-8" 
                style="
                background-image: url('https://images.unsplash.com/photo-1578836537282-3171d77f8632?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80');
                background-repeat: no-repat;
                background-size: cover;
                background-blend-mode: multiply;"
                >
                    <span class="mb-auto mt-auto text-4xl text-white ">
                        EVENT
                    </span>

                </div>
                    @forelse ($events as $event)
                    <div class="p-0 overflow-hidden rounded-lg cursor-pointer sm:rounded-t-xl text-center text-white bg-green-400 px-6 py-px-6 py-3 mb-2 ">
                        <a href="event/comment"  
                            class="text-xl font-bold">
                                {{ $event->Event_name }}
                        </a>
                    </div>
                    <div class=" flex flex-row p-0 overflow-hidden rounded-none cursor-pointer sm:rounded-t-xl bg-white px-6 py-px-6 py-3 justify-between ">
                        <a href="event/comment"  
                            class="text-base font-bold text break-words flex-grow-0 w-3/4 ">
                                {{ $event->Report_desc }}
                        </a>
                        <div class="flex flex-col flex-none w-32 flex-shrink-0 ">
                            <div class="text-base font-bold">
                                {{ $event->date_create }}
                            </div>
                            <div class="text-base font-bold">
                                {{ $event->place_create }}
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between px-6 py-3 border-t border-gray-200 rounded-none dark:border-dark-800 sm:rounded-b-xl bg-white mb-5">
                        <div class="flex">
                            <div class="bg-cover bg-center w-10 h-10 rounded-full" style="
                                background-image: url('https://images.unsplash.com/photo-1603415526960-f7e0328c63b1?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
                            ">
                            </div>
                            <div class="flex flex-col ml-4">
                                <div class="content-center text-base">
                                    {{ auth()->user()->name }}
                                </div>
                                <div class="content-center text-sm text-gray-400">
                                    {{ $event->created_at }}
                                </div>
                            </div>
                        </div>
                    </div>
                        
                    @empty
                        
                    @endforelse

                    {{-- <div class="p-0 overflow-hidden rounded-lg cursor-pointer sm:rounded-t-xl text-center text-white bg-green-400 px-6 py-px-6 py-3 mb-2 ">
                        <a href="event/comment"  
                            class="text-xl font-bold">
                                Christmas Eve
                        </a>
                    </div>
                    <div class="flex flex-row p-0 overflow-hidden rounded-none cursor-pointer sm:rounded-t-xl bg-white px-6 py-px-6 py-3 justify-between">
                        <a href="event/comment"  
                            class="text-base font-bold text break-words flex-grow-0 w-3/4 ">
                                We would like to invite all community members to celebrate Christmas eve
                        </a>
                        <div class="flex flex-col flex-none w-32 flex-shrink-0">
                            <div class="text-base font-bold">
                                24/12/20
                            </div>
                            <div class="text-base font-bold">
                                12pm-00am
                            </div>
                            <div class="text-base font-bold">
                                Community Hall
                            </div>
                            <div class="relative inline-block text-base font-bold ">
                                <div>
                                    <button type="button" class="inline-flex justify-center w-full px-4 py-1 font-semibold rounded-lg shadow-md text-white bg-black hover:bg-gray-900 "id="options-menu" aria-haspopup="true" aria-expanded="true">
                                        Attend
                                        <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
                                    <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Attend</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Not Attend</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between px-6 py-3 border-t border-gray-200 rounded-none dark:border-dark-800 sm:rounded-b-xl bg-white mb-5">
                        <div class="flex">
                            <div class="bg-cover bg-center w-10 h-10 rounded-full" style="
                                background-image: url('https://images.unsplash.com/photo-1603415526960-f7e0328c63b1?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
                            ">
                            </div>
                            <div class="flex flex-col ml-4">
                                <div class="content-center text-base">
                                    Nurizko Maulana
                                </div>
                                <div class="content-center text-sm text-gray-400">
                                    1 day ago
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-0 overflow-hidden rounded-lg cursor-pointer sm:rounded-t-xl text-center text-white bg-green-400 px-6 py-px-6 py-3 mb-2 ">
                        <a href="event/comment"  
                            class="text-xl font-bold">
                                Kerja Bakti
                        </a>
                    </div>
                    <div class="flex flex-row p-0 overflow-hidden rounded-none cursor-pointer sm:rounded-t-xl bg-white px-6 py-px-6 py-3 justify-between ">
                        <a href="event/comment"  
                            class="text-base font-bold text break-words flex-grow-0 w-3/4 ">
                                Yuk kerja
                        </a>
                        <div class="flex flex-col flex-none w-32 flex-shrink-0 ">
                            <div class="text-base font-bold">
                                30/12/20
                            </div>
                            <div class="text-base font-bold">
                                9am-3pm
                            </div>
                            <div class="text-base font-bold">
                                Community Hall & Park
                            </div>
                            <div class="relative inline-block text-base font-bold ">
                                <div>
                                    <button type="button" class="inline-flex justify-center w-full px-4 py-1 font-semibold rounded-lg shadow-md text-white bg-yellow-300 hover:bg-yellow-200 "id="options-menu" aria-haspopup="true" aria-expanded="true">
                                        Pending
                                        <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
                                    <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Attend</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Not Attend</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between px-6 py-3 border-t border-gray-200 rounded-none dark:border-dark-800 sm:rounded-b-xl bg-white mb-5">
                        <div class="flex">
                            <div class="bg-cover bg-center w-10 h-10 rounded-full" style="
                                background-image: url('https://images.unsplash.com/photo-1603415526960-f7e0328c63b1?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
                            ">
                            </div>
                            <div class="flex flex-col ml-4">
                                <div class="content-center text-base">
                                    Seyyed Naquib
                                </div>
                                <div class="content-center text-sm text-gray-400">
                                    1 day ago
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    
            </div>
            <div class="w-1/5">
                <div class="flex bg-white text-center mb-2 h-40 justify-center rounded-lg shadow-lg" 
                style="
                background-image: url('https://images.unsplash.com/photo-1578836537282-3171d77f8632?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80');
                background-repeat: no-repat;
                background-size: cover;
                background-blend-mode: multiply;"
                >
                </div>

                <div class="text-center text-xl my-8">
                    Community Member
                </div>

                @forelse ($users as $user)
                <div class="flex mb-5">
                    <div class="bg-cover bg-center w-10 h-10 rounded-full" style="
                        background-image: url('https://images.unsplash.com/photo-1603415526960-f7e0328c63b1?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
                    ">
                    </div>
                    <div class="ml-4 content-center text-xl">
                        {{ $user->name }}
                    </div>
                </div>
                @empty
                    
                @endforelse
            </div>
        </div>

    </div>
</x-app-layout>