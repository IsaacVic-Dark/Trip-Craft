<x-app-layout>
    <div>
        <form action="/makePayment" method="POST">
            @csrf
            <input type="number" placeholder="e.g.., 254712345678" name="phone">
            <input type="number" placeholder="e.g.., 100" name="amount">
            {{-- <p>Amount will be <span>Kshs 100</span></p> --}}
            <button type="submit">Pay</button>
        </form>
    </div>
</x-app-layout>
