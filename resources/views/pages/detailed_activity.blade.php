<x-app-layout>

   <!-- Image Gallery -->
  <div class="container">
    <h1>{{$activity_name}}</h1>
    <h1>Created by: {{$user->name}}</h1>
    <h1>Posted {{$createdAgo}}</h1>

    {{-- <p>ID: {{ $id }}</p> --}}
      <div class="row">
        <div class="col-md-8">
          <div class="thumbnail">
            <img src="{{ asset('storage/' . $image) }}" alt="" class="image">
            <div class="img-overlay">
              <i class="bi bi-heart-fill"></i>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="row">
            <div class="col-md-12">
              <div class="thumbnail">
                <img src="{{ asset('storage/' . $image) }}" alt="" class="image">
                <div class="img-overlay">
                  <i class="bi bi-heart-fill"></i>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="thumbnail">
                <img src="{{ asset('storage/' . $image) }}" alt="" class="image">
                <div class="img-overlay">
                  <i class="bi bi-heart-fill"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>

  <!-- Middle Section -->
  <section>
      <div class="container">
          <div class="row">
              <div class="col-md-6 m-2">
                  <p class="border-bottom">
                      More on
                  </p>
                  <p>
                      {{$description}}
                  </p>
              </div>
              <div class="col-md-4 m-2 ms-auto">
                  <div class="my-3">
                      <div class="m-3">
                          <i class="bi bi-telephone"></i><span>{{$contact}}</span>
                      </div>
                      <div class="m-3">
                          <i class="bi bi-cash"></i><span>{{$price}}</span>
                      </div>
                      <div class="m-3">
                          <i class="bi bi-geo-alt"><span>{{$location}}</span></i>
                      </div>
                      <div class="m-3">
                          <i class="bi bi-cloud-sun"><span>{{$weather['weather'][0]['description']}}</span></i>
                      </div>
                      </div>
                      <div class="m-3">
                          <i class="bi bi-geo-alt"><span>{{$category}}</span></i>
                      </div>
                      <div class="m-3">
                            @if ($averageRating <= 0)
                              <p>Not rated</p>
                            @else
                                <p><span>{{$averageRating}}</span>: rated</p>
                            @endif
                      </div>
                      <div class="m-3">
                          <i class="bi bi-calendar-check"><span>Starting at: {{$date}}</span></i>
                      </div>
                      <div class="m-3">
                          <i class="bi bi-calendar-check"><span>Ending at: {{$end_date}}</span></i>
                      </div>
                      <div class="m-3">
                        <a href="{{ route('page.payment',
                                [
                                'contact' => $contact,
                                'price' => $price,
                                ]
                                ) }}"><span class="text-primary">Pay</span></a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <section>
    <div class="container">
        <a href="#" class="text-primary" data-bs-toggle="modal" data-bs-target="#review_modal">Write a review</a>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="review_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Write a review here</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="review_form" method="POST" action="{{ route('save-review') }}">
                    @csrf
                    <input type="hidden" name="activity_id" value="{{ $id }}">


                    <div class="modal-body">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <div class="star-widget">
                                        <input type="radio" name="rate" id="rate-5" value="5">
                                        <label for="rate-5" class="fas fa-star"></label>
                                        <input type="radio" name="rate" id="rate-4" value="4">
                                        <label for="rate-4" class="fas fa-star"></label>
                                        <input type="radio" name="rate" id="rate-3" value="3">
                                        <label for="rate-3" class="fas fa-star"></label>
                                        <input type="radio" name="rate" id="rate-2" value="2">
                                        <label for="rate-2" class="fas fa-star"></label>
                                        <input type="radio" name="rate" id="rate-1" value="1">
                                        <label for="rate-1" class="fas fa-star"></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="comment" class="form-label">Comment</label>
                                    <textarea name="comment" id="comment" cols="30" rows="5" class="form-control" placeholder="Describe your experience ..."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mb-2">
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>


    <div class="container">
      <div class="row">
          @foreach ($reviews as $review)
              @if ($review->activity_id == $id)
                  <div class="col-md-4">
                      <div class="card" style="width: 18rem;">
                          <div class="card-body">
                              <h6 class="card-subtitle mb-2 text-body-secondary">{{ $review->rating }}</h6>
                              <p class="card-text">{{$review->user->name}}</p>
                              <p class="card-text">{{$review->comment}}</p>
                          </div>
                      </div>
                  </div>
              @endif
          @endforeach
      </div>
    </div>




  <!-- Recommendation_Carousel Section -->
<section id="recommendation_section">

</section>

<!-- Optional JavaScript for visual feedback -->
<script>
      const btn = document.querySelector("button");
      const post = document.querySelector(".post");
      const widget = document.querySelector(".star-widget");
      const editBtn = document.querySelector(".edit");
      btn.onclick = ()=>{
        widget.style.display = "none";
        post.style.display = "block";
        editBtn.onclick = ()=>{
          widget.style.display = "block";
          post.style.display = "none";
        }
        return false;
      }
</script>


</x-app-layout>
