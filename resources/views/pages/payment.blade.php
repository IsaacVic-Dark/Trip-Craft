<x-app-layout>
    <p>Amount will be <span>{{$price}}</span></p>
    <div>
        <form action="/makePayment" method="POST">
            @csrf
            <input type="number" placeholder="e.g.., 254712345678" name="phone">
            <input type="hidden" name="price" value="{{ $price }}">
            <button type="submit">Pay</button>
        </form>
    </div>
</x-app-layout>
