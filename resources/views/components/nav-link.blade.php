@props(['active'])

@php
$classes = ($active ?? false)
            ? 'bg-blue-600 px-5 py-4 sm:px-4 sm:py-3 text-white sm:text-sm md:text-xl lg:text-2xl hover:cursor-pointer'
            : 'hover:bg-blue-600 hover:text-white hover:cursor-pointer px-5 py-4 sm:px-4 sm:py-3 text-white sm:text-sm md:text-xl lg:text-2xl duration-300 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
