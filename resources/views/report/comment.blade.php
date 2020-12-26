<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Comment') }}
        </h2>
    </x-slot>

    <div class="py-12 px-3">

        <div class="flex">
            <div class="w-1/5 h-40 sm:rounded-lg p-5">
                {{-- <a href=""
                        class="py-2 px-4 font-semibold rounded-lg shadow-md text-white bg-blue-500 hover:bg-blue-700">
                        Write a report
                    </a> --}}
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
                        COMMENT
                    </span>
                </div>

                {{-- Title Start --}}
                <div class="text-black font-bold text-2xl py-5 text-center">
                    Banyak anjing galak di depan rumah pak mamat
                </div>

                {{-- Title End --}}

                <div class="p-0 overflow-hidden rounded-none cursor-pointer sm:rounded-t-xl bg-white px-6 py-px-6 py-3  ">
                    <div class="text-base my-5">
                        hati-hati ya yg ada di komplek ini. mohon jangan dekat2
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

                <div class="content-center text-sm text-gray-400">
                    Comments
                </div>

                <div class="p-0 overflow-hidden rounded-none cursor-pointer sm:rounded-t-xl bg-white px-6 py-px-6 py-3  ">
                    <div class="text-xl font-bold">
                        <input class="border border-transparent focus:outline-none focus:ring-2 focus:border-transparent w-full py-3" type="text" placeholder="Write a comment">
                    </div>
                </div>

                <div class="flex justify-between px-6 py-3 border-t border-gray-200 rounded-none dark:border-dark-800 sm:rounded-b-xl bg-white mb-5">
                    <div class="flex flex-auto ">
                        <div class="flex flex-1">
                            <div class="bg-cover bg-center w-10 h-10 rounded-full" style="
                                background-image: url('https://images.unsplash.com/photo-1603415526960-f7e0328c63b1?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
                            ">
                            </div>
                        </div>
                        <button class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-green-500 rounded-full shadow ripple hover:shadow-lg hover:bg-green-600 focus:outline-none">
                            POST
                        </button>
                    </div>
                </div>


                <div class="p-0 overflow-hidden rounded-none cursor-pointer sm:rounded-t-xl bg-white px-6 py-px-6 py-3  ">
                    <div class="text-base">
                        Shiapp pak ahmad.. ngeri ngeri sedap lewat depan sana
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
                <div class="p-0 overflow-hidden rounded-none cursor-pointer sm:rounded-t-xl bg-white px-6 py-px-6 py-3  ">
                    <div class="text-base">
                        Waduh harus cepet2 di beresin nih masalahnya
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
                                Nanda Azka
                            </div>
                            <div class="content-center text-sm text-gray-400">
                                1 day ago
                            </div>
                        </div>
                    </div>
                </div>
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

                <div class="text-center font-bold text-xl my-8">
                    Mark Status
                </div>

                <div class="flex mb-5">
                    <div class="bg-cover bg-center w-10 h-10 rounded-full" style="
                        background-image: url('https://images.unsplash.com/photo-1603415526960-f7e0328c63b1?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
                    ">
                    </div>
                    <div class="ml-4 content-center text-xl">
                        Nurizko Maulana
                    </div>
                </div>
                <div class="flex mb-5">
                    <div class="bg-cover bg-center w-10 h-10 rounded-full" style="
                        background-image: url('https://images.unsplash.com/photo-1603415526960-f7e0328c63b1?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
                    ">
                    </div>
                    <div class="ml-4 content-center text-xl">
                        Nur Ilham
                    </div>
                </div>
                <div class="flex mb-5">
                    <div class="bg-cover bg-center w-10 h-10 rounded-full" style="
                        background-image: url('https://images.unsplash.com/photo-1603415526960-f7e0328c63b1?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
                    ">
                    </div>
                    <div class="ml-4 content-center text-xl">
                        Naquib 
                    </div>
                </div>
                <div class="flex mb-5">
                    <div class="bg-cover bg-center w-10 h-10 rounded-full" style="
                        background-image: url('https://images.unsplash.com/photo-1603415526960-f7e0328c63b1?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
                    ">
                    </div>
                    <div class="ml-4 content-center text-xl">
                        Azka
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>