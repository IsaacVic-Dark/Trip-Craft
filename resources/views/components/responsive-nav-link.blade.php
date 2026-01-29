@props(['active'])

@php
$classes = ($active ?? false)
    ? 'block w-full ps-4 pe-6 py-3 rounded-full border-2 border-primary-yellow text-base font-bold text-primary-yellow bg-primary-yellow/10 focus:outline-none focus:text-primary-yellow focus:bg-primary-yellow/20 font-sans shadow-sm transition duration-150 ease-in-out'
    : 'block w-full ps-4 pe-6 py-3 rounded-full border-2 border-transparent text-base font-bold text-primary-dark hover:text-primary-yellow hover:bg-primary-yellow/5 hover:border-primary-yellow/50 focus:outline-none focus:text-primary-yellow focus:bg-primary-yellow/10 focus:border-primary-yellow/50 font-sans shadow-sm transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
