{{-- @props(['active'])

@php
$classes = ($active ?? false)
    ? 'inline-flex items-center px-4 py-2 text-base font-bold text-primary-yellow rounded-full bg-primary-yellow/10 border border-primary-yellow focus:outline-none transition duration-150 ease-in-out font-sans shadow-sm'
    : 'inline-flex items-center px-4 py-2 text-base font-bold text-primary-dark rounded-full hover:text-primary-yellow hover:bg-primary-yellow/10 border border-transparent focus:outline-none transition duration-150 ease-in-out font-sans shadow-sm';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a> --}}



{{-- Break --}}
@props(['active'])

@php
$classes = ($active ?? false)
    ? 'font-medium hover:text-orange-300 transition-colors'
    : 'font-medium text-orange-300 transition-colors';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
