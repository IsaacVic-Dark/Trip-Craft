<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center px-6 py-3 bg-red-600 text-white font-bold rounded-full shadow-md text-base tracking-tight hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition']) }}>
    {{ $slot }}
</button>
