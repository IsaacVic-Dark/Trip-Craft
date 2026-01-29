<x-app-layout>
    <div class="max-w-md mx-auto mt-24 bg-white rounded-2xl shadow-xl p-10 font-sans">
        <p class="text-xl font-bold mb-6">Amount will be <span class="text-primary-yellow">{{$price}}</span></p>
        <form action="/makePayment" method="POST" class="space-y-6">
            @csrf
            <input type="number" placeholder="e.g.., 254712345678" name="phone" class="w-full rounded-xl border border-gray-200 px-4 py-3 text-base font-sans shadow focus:ring-2 focus:ring-primary-yellow focus:outline-none" />
            <input type="hidden" name="price" value="{{ $price }}">
            <button type="submit" class="inline-flex items-center justify-center px-6 py-3 bg-primary-yellow text-primary-dark font-bold rounded-full shadow-md text-base tracking-tight hover:bg-yellow-300 focus:outline-none focus:ring-2 focus:ring-primary-yellow focus:ring-offset-2 transition">Pay</button>
        </form>
    </div>
</x-app-layout>
