@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-4 border-yellow-200 text-sm font-medium leading-5 text-white focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-4 border-transparent text-sm font-medium leading-5 text-white hover:text-white hover:border-white focus:outline-none focus:text-white focus:border-yellow-200 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
