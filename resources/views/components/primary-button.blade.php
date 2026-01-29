<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center px-6 py-3 bg-primary-yellow text-primary-dark font-bold rounded-full shadow-md text-base tracking-tight hover:bg-yellow-300 focus:outline-none focus:ring-2 focus:ring-primary-yellow focus:ring-offset-2 transition']) }}>
    {{ $slot }}
</button>
