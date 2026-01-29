<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center justify-center px-6 py-3 bg-white border border-gray-300 text-gray-700 font-bold rounded-full shadow-md text-base tracking-tight hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-primary-yellow focus:ring-offset-2 transition']) }}>
    {{ $slot }}
</button>
