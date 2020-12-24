<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Report') }}
        </h2>
    </x-slot>

    <div class="py-12 px-3">

        <div class="flex">
            <div class="w-1/5 h-40 bg-white shadow-xl sm:rounded-lg p-5">
                <a href=""
                        class="py-2 px-4 font-semibold rounded-lg shadow-md text-white bg-blue-500 hover:bg-blue-700">
                        Write a report
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
                        REPORT
                    </span>
                </div>

                {{-- Write a Report --}}
                <div class="p-0 overflow-hidden rounded-none cursor-pointer sm:rounded-t-xl bg-white px-6 py-px-6 py-3  ">
                    <div class="text-xl font-bold mb-4">
                        <input type="text" placeholder="Write a report title">
                    </div>
                    <div class="text-base ">
                        <input type="text" placeholder="Write a report description">
                    </div>
                </div>

                <div class="flex justify-between px-6 py-3 border-t border-gray-200 rounded-none dark:border-dark-800 sm:rounded-b-xl bg-white mb-5">
                    <div class="flex flex-auto ">
                        <div class="flex flex-1">
                            <div class="bg-cover bg-center w-10 h-10 rounded-full" style="
                                background-image: url('https://images.unsplash.com/photo-1603415526960-f7e0328c63b1?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
                            ">
                            </div>
                            <i class="fas fa-camera"></i> <!-- this icon's 1) style prefix == fas and 2) icon name == camera -->
                            <i class="fas fa-camera"></i> <!-- using an <i> element to reference the icon -->
                            <span class="fas fa-camera"></span> <!-- using a <span> element to reference the icon -->
                        </div>
                        <div class="m-auto bg-green-400 text-center text-white px-4 py-2 rounded-full flex-none hover:bg-green-700 cursor-pointer">
                            POST
                        </div>
                    </div>
                </div>

                <div class="p-0 overflow-hidden rounded-none cursor-pointer sm:rounded-t-xl bg-white px-6 py-px-6 py-3  ">
                    <div class="text-xl font-bold">
                        Banyak anjing galak di depan rumah pak mamat
                    </div>
                    <div class="text-base">
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

                <div class="p-0 overflow-hidden rounded-none cursor-pointer sm:rounded-t-xl bg-white px-6 py-px-6 py-3  ">
                    <div class="text-xl font-bold">
                        Banyak anjing galak di depan rumah pak mamat
                    </div>
                    <div class="text-base">
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
                <div class="p-0 overflow-hidden rounded-none cursor-pointer sm:rounded-t-xl bg-white px-6 py-px-6 py-3  ">
                    <div class="text-xl font-bold">
                        Banyak anjing galak di depan rumah pak mamat
                    </div>
                    <div class="text-base">
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
                <div class="p-0 overflow-hidden rounded-none cursor-pointer sm:rounded-t-xl bg-white px-6 py-px-6 py-3  ">
                    <div class="text-xl font-bold">
                        Banyak anjing galak di depan rumah pak mamat
                    </div>
                    <div class="text-base">
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
                <div class="p-0 overflow-hidden rounded-none cursor-pointer sm:rounded-t-xl bg-white px-6 py-px-6 py-3  ">
                    <div class="text-xl font-bold">
                        Banyak anjing galak di depan rumah pak mamat
                    </div>
                    <div class="text-base">
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
                <div class="p-0 overflow-hidden rounded-none cursor-pointer sm:rounded-t-xl bg-white px-6 py-px-6 py-3  ">
                    <div class="text-xl font-bold">
                        Banyak anjing galak di depan rumah pak mamat
                    </div>
                    <div class="text-base">
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
                <div class="p-0 overflow-hidden rounded-none cursor-pointer sm:rounded-t-xl bg-white px-6 py-px-6 py-3  ">
                    <div class="text-xl font-bold">
                        Banyak anjing galak di depan rumah pak mamat
                    </div>
                    <div class="text-base">
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