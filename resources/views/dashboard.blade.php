<x-app-layout title="Dashboard">
    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-white via-light-gray to-white py-24 font-sans">
        <div class="container">
            <div class="text-center">
                <h1 class="text-6xl md:text-7xl font-black mb-8 text-primary-dark">
                    Welcome to Your <span class="gradient-overlay bg-clip-text text-transparent">Adventure Hub</span>
                </h1>
                <p class="text-2xl text-medium-gray max-w-2xl mx-auto">
                    Discover amazing activities, plan your next adventure, and create unforgettable memories
                </p>
            </div>
        </div>
    </section>

    <!-- Search and Filter Section -->
    <section class="bg-light-gray py-14 font-sans">
        <div class="container">
            <div class="max-w-4xl mx-auto">
                <div class="mb-10">
                    <form action="search" method="GET" class="relative">
                        <input 
                            type="text" 
                            name="query" 
                            placeholder="Search for activities, destinations, or experiences..."
                            class="w-full px-6 py-4 bg-white border border-gray-200 rounded-2xl text-primary-dark placeholder-medium-gray focus:outline-none focus:border-primary-yellow focus:ring-2 focus:ring-primary-yellow/20 shadow-md font-sans"
                        >
                        <button type="submit" class="absolute right-4 top-1/2 transform -translate-y-1/2">
                            <i class="fas fa-search text-primary-yellow text-2xl"></i>
                        </button>
                    </form>
                </div>
                <div class="text-center">
                    <h3 class="text-2xl font-bold mb-6 text-primary-dark">Choose Your Adventure Category</h3>
                    <div class="flex flex-wrap justify-center gap-4">
                        <a href="#" class="btn-primary rounded-full px-6 py-2 font-semibold shadow">All Activities</a>
                        <a href="#" class="btn-secondary rounded-full px-6 py-2 font-semibold shadow">With Family</a>
                        <a href="#" class="btn-secondary rounded-full px-6 py-2 font-semibold shadow">With Partner</a>
                        <a href="#" class="btn-secondary rounded-full px-6 py-2 font-semibold shadow">With Friends</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Activities Section -->
    <section class="py-20 bg-white font-sans">
        <div class="container">
            @php
                $groupedContent = $content->groupBy('category');
            @endphp

            @foreach ($groupedContent as $category => $items)
                <div class="mb-20">
                    <div class="text-center mb-12">
                        <h2 class="text-5xl md:text-6xl font-bold mb-4 text-primary-dark">
                            {{ str_replace('_', ' ', ucfirst($category)) }}
                        </h2>
                        <p class="text-2xl text-medium-gray">Discover amazing {{ str_replace('_', ' ', $category) }} experiences</p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                        @foreach ($items as $item)
                            <div class="card group bg-white rounded-2xl shadow-xl p-8 flex flex-col">
                                <div class="relative overflow-hidden rounded-xl mb-6">
                                    <img 
                                        src="{{ asset('storage/' . $item->image) }}" 
                                        alt="{{ $item->activity_name }}"
                                        class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-500 rounded-xl"
                                    >
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent rounded-xl"></div>
                                    <div class="absolute top-4 right-4 bg-primary-yellow text-primary-dark px-4 py-2 rounded-full font-bold shadow">
                                        ${{ $item->price }}
                                    </div>
                                </div>
                                <div class="flex-1 flex flex-col">
                                    <h3 class="text-2xl font-bold mb-3 text-primary-dark">
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
                                        ]) }}" class="hover:text-primary-yellow transition-colors">
                                            {{ $item->activity_name }}
                                        </a>
                                    </h3>
                                    <p class="text-medium-gray mb-4 line-clamp-3">
                                        {{ Str::limit($item->description, 120) }}
                                    </p>
                                    <div class="flex items-center mb-4 text-medium-gray">
                                        <i class="fas fa-map-marker-alt mr-2"></i>
                                        <span>{{ $item->location }}</span>
                                    </div>
                                    <div class="flex items-center justify-between mb-6">
                                        <div class="flex items-center space-x-1">
                                            <i class="fas fa-star text-primary-yellow"></i>
                                            <i class="fas fa-star text-primary-yellow"></i>
                                            <i class="fas fa-star text-primary-yellow"></i>
                                            <i class="fas fa-star text-primary-yellow"></i>
                                            <i class="fas fa-star text-gray-300"></i>
                                            <span class="text-medium-gray ml-2">(4.0)</span>
                                        </div>
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
                                        'user' => $item->user,
                                        'date'=> $item->starting_at->format('F j, Y, g:i a'),
                                        'end_date'=> $item->ending_at->format('F j, Y, g:i a')
                                    ]) }}" class="btn-primary w-full text-center rounded-full py-3 font-semibold shadow">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Quick Stats Section -->
    <section class="bg-light-gray py-16 font-sans">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div class="text-center">
                    <div class="w-16 h-16 bg-gradient-to-r from-primary-yellow to-secondary-yellow rounded-2xl flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-map-marked-alt text-2xl text-primary-dark"></i>
                    </div>
                    <h3 class="text-4xl font-bold mb-2 text-primary-dark">{{ $content->count() }}</h3>
                    <p class="text-medium-gray">Total Activities</p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-gradient-to-r from-primary-yellow to-secondary-yellow rounded-2xl flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-users text-2xl text-primary-dark"></i>
                    </div>
                    <h3 class="text-4xl font-bold mb-2 text-primary-dark">{{ $groupedContent->count() }}</h3>
                    <p class="text-medium-gray">Categories</p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-gradient-to-r from-primary-yellow to-secondary-yellow rounded-2xl flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-star text-2xl text-primary-dark"></i>
                    </div>
                    <h3 class="text-4xl font-bold mb-2 text-primary-dark">4.8</h3>
                    <p class="text-medium-gray">Average Rating</p>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
