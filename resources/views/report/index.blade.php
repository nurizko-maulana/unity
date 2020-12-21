<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Report') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <a href="{{ route('todo.create') }}"
                    class="py-2 px-4 font-semibold rounded-lg shadow-md text-white bg-blue-500 hover:bg-blue-700">
                    Write a report
                </a>
            </div>
        </div>
    </div>
</x-app-layout>