@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'font-semibold text-base text-green-600 font-sans mb-2']) }}>
        {{ $status }}
    </div>
@endif
