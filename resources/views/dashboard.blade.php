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
    

    <!-- Section Packages Start -->
    <section class="packages" id="packages">
        <div class="container">
        
        <div class="main-txt">
            <h1><span>P</span>ackages</h1>
        </div>

        <div class="row" style="margin-top: 30px;">

            @foreach ($content as $content)
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <img src="{{ asset('storage/' . $content -> image) }}" class="card-img-top" alt="Trip Image">

                        <div class="card-body">
                            <h3><a href="{{ route('page.detailed_activity', [
                                'id' => $content->id, 
                                'activity_name' => $content->activity_name,
                                'description' => $content->description, 
                                'image' => $content->image,
                                'contact' => $content->contact, // Add contact parameter
                                'location' => $content->location // Add location parameter
                                ]) }}" class="fw-bold text-primary">{{ $content->activity_name }}</a></h3>
                                
                            

                        <p class="card-text" id="description">{{ $content->description }}</p>
                        <div class="star">
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star "></i>
                            <i class="fa-solid fa-star "></i>
                        </div>
                        {{-- <h6>Price: <strong>$500</strong></h6> --}}
                        <a href="{{ route('page.detailed_activity', [
                                'id' => $content->id, 
                                'activity_name' => $content->activity_name,
                                'description' => $content->description, 
                                'image' => $content->image,
                                'contact' => $content->contact, // Add contact parameter
                                'location' => $content->location // Add location parameter
                                ]) }}" class="fw-bold text-primary">View More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        </div>
    </section>
    <!-- Section Packages End -->

</x-app-layout>
