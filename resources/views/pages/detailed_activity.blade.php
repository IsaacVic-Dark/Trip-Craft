<x-app-layout>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');


        .container .post{
        display: none;
        }
        .container .text{
        font-size: 25px;
        color: #666;
        font-weight: 500;
        }
        .container .edit{
        position: absolute;
        right: 10px;
        top: 5px;
        font-size: 16px;
        color: #666;
        font-weight: 500;
        cursor: pointer;
        }
        .container .edit:hover{
        text-decoration: underline;
        }
        .container .star-widget input{
        display: none;
        }
        .star-widget label{
        font-size: 40px;
        color: #444;
        padding: 10px;
        float: right;
        transition: all 0.2s ease;
        }
        input:not(:checked) ~ label:hover,
        input:not(:checked) ~ label:hover ~ label{
        color: #fd4;
        }
        input:checked ~ label{
        color: #fd4;
        }
        input#rate-5:checked ~ label{
        color: #fe7;
        text-shadow: 0 0 20px #952;
        }
        #rate-1:checked ~ form header:before{
        content: "I just hate it ";
        }
        #rate-2:checked ~ form header:before{
        content: "I don't like it ";
        }
        #rate-3:checked ~ form header:before{
        content: "It is awesome ";
        }
        #rate-4:checked ~ form header:before{
        content: "I just like it ";
        }
        #rate-5:checked ~ form header:before{
        content: "I just love it ";
        }
        .container form{
        display: none;
        }
        input:checked ~ form{
        display: block;
        }
        form header{
        width: 100%;
        font-size: 25px;
        color: #fe7;
        font-weight: 500;
        margin: 5px 0 20px 0;
        text-align: center;
        transition: all 0.2s ease;
        }
        form .textarea{
        height: 100px;
        width: 100%;
        overflow: hidden;
        }
        form .textarea textarea{
        height: 100%;
        width: 100%;
        outline: none;
        color: #eee;
        border: 1px solid #333;
        background: #222;
        padding: 10px;
        font-size: 17px;
        resize: none;
        }
        .textarea textarea:focus{
        border-color: #444;
        }
        form .btn{
        height: 45px;
        width: 100%;
        margin: 15px 0;
        }
        form .btn button{
        height: 100%;
        width: 100%;
        border: 1px solid #444;
        outline: none;
        background: #222;
        color: #999;
        font-size: 17px;
        font-weight: 500;
        text-transform: uppercase;
        cursor: pointer;
        transition: all 0.3s ease;
        }
        form .btn button:hover{
        background: #1b1b1b;
        }
    </style>

   <!-- Image Gallery -->
  <div class="container">
    <h1>{{$activity_name}}</h1>
    <h1>Created by: {{$user->name}}</h1>

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
                          <i class="bi bi-calendar-check"><span>{{$date}}</span></i>
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
