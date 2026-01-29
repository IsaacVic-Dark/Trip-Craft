@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-200 focus:border-primary-yellow focus:ring-primary-yellow rounded-xl shadow-md px-4 py-3 text-base font-sans placeholder-gray-400 transition']) !!}>
