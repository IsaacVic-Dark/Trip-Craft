<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    {{-- Search box --}}
    <div>
        <form action="search" method="GET">
            <input type="text" name="query">
            <button type="submit">submit</button>
        </form>
    </div>

    <!-- Section Packages Start -->
    <section class="packages" id="packages">
        <div class="container">
            <div class="row" style="margin-top: 30px;">

                {{-- Group content by category --}}
                @php
                    $groupedContent = $content->groupBy('category');
                @endphp

                @foreach ($groupedContent as $category => $items)
                    <div class="col-md-12 py-3 py-md-0">
                        {{-- Category header --}}
                        <h1 class="text-capitalize">{{ str_replace('_', ' ', $category) }}</h1>

                        <div class="row">
                            @foreach ($items as $item)
                                <div class="col-md-4 py-3">
                                    <div class="card">
                                        <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top" alt="{{ $item->activity_name }}">

                                        <div class="card-body">
                                            <h3>
                                                <a href="{{ route('page.detailed_activity', [
                                                    'id' => $item->id,
                                                    'activity_name' => $item->activity_name,
                                                    'description' => $item->description,
                                                    'image' => $item->image,
                                                    'contact' => $item->contact,
                                                    'price' => $item->price,
                                                    'category' => $item->category,
                                                    'location' => $item->location,
                                                    'date'=> $item->created_at->format('F j, Y, g:i a')
                                                    ]) }}" class="fw-bold text-primary">
                                                    {{ $item->activity_name }}
                                                </a>
                                            </h3>

                                            <p class="card-text" id="description">{{ $item->description }}</p>

                                            <div class="star">
                                                <i class="fa-solid fa-star checked"></i>
                                                <i class="fa-solid fa-star checked"></i>
                                                <i class="fa-solid fa-star checked"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>

                                            <a href="{{ route('page.detailed_activity', [
                                                'id' => $item->id,
                                                'activity_name' => $item->activity_name,
                                                'description' => $item->description,
                                                'image' => $item->image,
                                                'contact' => $item->contact,
                                                'price' => $item->price,
                                                'category' => $item->category,
                                                'location' => $item->location,
                                                'date'=> $item->created_at->format('F j, Y, g:i a')
                                            ]) }}" class="fw-bold text-primary">
                                                View More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- Section Packages End -->
</x-app-layout>
