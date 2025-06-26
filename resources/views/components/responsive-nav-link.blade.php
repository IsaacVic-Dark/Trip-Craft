@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full ps-3 pe-4 py-2 border-l-4 border-primary-yellow text-start text-base font-medium text-primary-yellow bg-primary-yellow/10 focus:outline-none focus:text-primary-yellow focus:bg-primary-yellow/20 focus:border-primary-yellow transition duration-150 ease-in-out'
            : 'block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-primary-dark hover:text-primary-yellow hover:bg-primary-yellow/5 hover:border-primary-yellow/50 focus:outline-none focus:text-primary-yellow focus:bg-primary-yellow/10 focus:border-primary-yellow/50 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
