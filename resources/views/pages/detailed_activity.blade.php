<x-app-layout>
  <style>
      .hero-section {
          position: relative;
          height: 70vh;
          background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3));
          display: flex;
          align-items: center;
          justify-content: center;
          color: white;
          text-align: center;
      }
      
      .hero-bg {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          object-fit: cover;
          z-index: -1;
      }
      
      .hero-content h1 {
          font-size: 3.5rem;
          font-weight: 300;
          margin-bottom: 1rem;
          text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
      }
      
      .hero-content .subtitle {
          font-size: 1.2rem;
          font-weight: 400;
          opacity: 0.9;
      }
      
      .content-section {
          padding: 4rem 0;
          background: #fafafa;
      }
      
      .main-content {
          background: white;
          border-radius: 15px;
          box-shadow: 0 10px 40px rgba(0,0,0,0.1);
          overflow: hidden;
      }
      
      .content-header {
          padding: 2rem;
          border-bottom: 1px solid #eee;
      }
      
      .content-body {
          padding: 2rem;
      }
      
      .info-card {
          background: white;
          border-radius: 15px;
          padding: 2rem;
          box-shadow: 0 5px 20px rgba(0,0,0,0.08);
          margin-bottom: 2rem;
      }
      
      .info-item {
          display: flex;
          align-items: center;
          padding: 0.8rem 0;
          border-bottom: 1px solid #f0f0f0;
      }
      
      .info-item:last-child {
          border-bottom: none;
      }
      
      .info-item i {
          width: 24px;
          height: 24px;
          margin-right: 1rem;
          color: #007bff;
          font-size: 1.1rem;
      }
      
      .btn-primary-custom {
          background: linear-gradient(135deg, #007bff, #0056b3);
          border: none;
          border-radius: 25px;
          padding: 12px 30px;
          font-weight: 600;
          color: white;
          text-decoration: none;
          display: inline-block;
          transition: all 0.3s ease;
          box-shadow: 0 4px 15px rgba(0,123,255,0.3);
      }
      
      .btn-primary-custom:hover {
          transform: translateY(-2px);
          box-shadow: 0 8px 25px rgba(0,123,255,0.4);
          color: white;
      }
      
      .rating-stars {
          color: #ffc107;
          margin-right: 0.5rem;
      }
      
      .review-card {
          background: white;
          border-radius: 15px;
          padding: 1.5rem;
          box-shadow: 0 5px 15px rgba(0,0,0,0.08);
          margin: 1rem;
          transition: all 0.3s ease;
      }
      
      .review-card:hover {
          transform: translateY(-5px);
          box-shadow: 0 10px 25px rgba(0,0,0,0.12);
      }
      
      .star-widget {
          display: flex;
          justify-content: center;
          margin: 1rem 0;
      }
      
      .star-widget input {
          display: none;
      }
      
      .star-widget label {
          font-size: 1.5rem;
          color: #ddd;
          cursor: pointer;
          transition: all 0.3s ease;
          margin: 0 2px;
      }
      
      .star-widget label:hover,
      .star-widget label:hover ~ label,
      .star-widget input:checked ~ label {
          color: #ffc107;
      }
      
      .gallery-section {
          padding: 2rem 0;
      }
      
      .gallery-main {
          border-radius: 15px;
          overflow: hidden;
          box-shadow: 0 10px 30px rgba(0,0,0,0.1);
          position: relative;
      }
      
      .gallery-main img {
          width: 100%;
          height: 400px;
          object-fit: cover;
      }
      
      .gallery-thumb {
          border-radius: 10px;
          overflow: hidden;
          margin-bottom: 1rem;
          box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      }
      
      .gallery-thumb img {
          width: 100%;
          height: 180px;
          object-fit: cover;
      }
      
      .section-title {
          font-size: 2rem;
          font-weight: 300;
          margin-bottom: 2rem;
          text-align: center;
          color: #333;
      }
      
      .review-carousel {
          padding: 3rem 0;
          background: white;
      }
      
      .write-review-section {
          padding: 2rem 0;
          text-align: center;
      }
      
      .modal-content {
          border-radius: 15px;
          border: none;
          box-shadow: 0 15px 50px rgba(0,0,0,0.2);
      }
      
      .modal-header {
          border-bottom: 1px solid #f0f0f0;
          padding: 2rem;
      }
      
      .modal-body {
          padding: 2rem;
      }
  </style>

  <!-- Hero Section -->
  <section class="hero-section">
      <img src="{{ asset('storage/' . $image) }}" alt="{{ $activity_name }}" class="hero-bg">
      <div class="hero-content">
          <h1>{{ $activity_name }}</h1>
          <p class="subtitle">{{ $location }} • {{ $createdAgo }}</p>
      </div>
  </section>

  <!-- Gallery Section -->
  <section class="gallery-section">
      <div class="container">
          <div class="row">
              <div class="col-md-8">
                  <div class="gallery-main">
                      <img src="{{ asset('storage/' . $image) }}" alt="{{ $activity_name }}">
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="gallery-thumb">
                      <img src="{{ asset('storage/' . $image) }}" alt="{{ $activity_name }}">
                  </div>
                  <div class="gallery-thumb">
                      <img src="{{ asset('storage/' . $image) }}" alt="{{ $activity_name }}">
                  </div>
              </div>
          </div>
      </div>
  </section>

  <!-- Main Content Section -->
  <section class="content-section">
      <div class="container">
          <div class="row">
              <div class="col-md-8">
                  <div class="main-content">
                      <div class="content-header">
                          <h2>About This Experience</h2>
                          <p class="text-muted">Created by {{ $user->name }}</p>
                      </div>
                      <div class="content-body">
                          <p>{{ $description }}</p>
                          
                          <h4 class="mt-4 mb-3">What's Included:</h4>
                          <ul class="list-unstyled">
                              <li><i class="bi bi-check2-circle text-success me-2"></i> Professional guidance</li>
                              <li><i class="bi bi-check2-circle text-success me-2"></i> All necessary equipment</li>
                              <li><i class="bi bi-check2-circle text-success me-2"></i> Safety measures included</li>
                              <li><i class="bi bi-check2-circle text-success me-2"></i> Memorable experience</li>
                          </ul>
                      </div>
                  </div>
              </div>

              <div class="col-md-4">
                  <div class="info-card">
                      <h4 class="mb-3">Experience Details</h4>
                      
                      <div class="info-item">
                          <i class="bi bi-cash-stack"></i>
                          <div>
                              <strong>Price:</strong>
                              <span class="ms-2">${{ $price }}</span>
                          </div>
                      </div>
                      
                      <div class="info-item">
                          <i class="bi bi-telephone"></i>
                          <div>
                              <strong>Contact:</strong>
                              <span class="ms-2">{{ $contact }}</span>
                          </div>
                      </div>
                      
                      <div class="info-item">
                          <i class="bi bi-geo-alt"></i>
                          <div>
                              <strong>Location:</strong>
                              <span class="ms-2">{{ $location }}</span>
                          </div>
                      </div>
                      
                      <div class="info-item">
                          <i class="bi bi-tag"></i>
                          <div>
                              <strong>Category:</strong>
                              <span class="ms-2">{{ $category }}</span>
                          </div>
                      </div>
                      
                      <div class="info-item">
                          <i class="bi bi-calendar-check"></i>
                          <div>
                              <strong>Start Date:</strong>
                              <span class="ms-2">{{ $date }}</span>
                          </div>
                      </div>
                      
                      <div class="info-item">
                          <i class="bi bi-calendar-x"></i>
                          <div>
                              <strong>End Date:</strong>
                              <span class="ms-2">{{ $end_date }}</span>
                          </div>
                      </div>
                      
                      <div class="info-item">
                          <i class="bi bi-cloud-sun"></i>
                          <div>
                              <strong>Weather:</strong>
                              <span class="ms-2">
                                  <?php
                                  echo e($weather['weather'][0]['description'] ?? ($weather['error'] ?? 'Weather information not available.'));
                                  ?>
                              </span>
                          </div>
                      </div>
                      
                      <div class="info-item">
                          <i class="bi bi-star-fill rating-stars"></i>
                          <div>
                              @if ($averageRating <= 0)
                                  <span>Not rated yet</span>
                              @else
                                  <strong>{{ number_format($averageRating, 1) }}</strong>
                                  <span class="text-muted ms-1">/ 5.0</span>
                              @endif
                          </div>
                      </div>
                      
                      <div class="mt-4 d-grid">
                          <a href="{{ route('page.payment', ['contact' => $contact, 'price' => $price]) }}" 
                             class="btn-primary-custom text-center">
                              Reserve Now - ${{ $price }}
                          </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <!-- Write Review Section -->
  <section class="write-review-section">
      <div class="container">
          <h3 class="section-title">Share Your Experience</h3>
          <p class="text-muted mb-4">Help others discover this amazing experience by sharing your thoughts</p>
          <a href="#" class="btn-primary-custom" data-bs-toggle="modal" data-bs-target="#review_modal">
              <i class="bi bi-pencil-square me-2"></i>Write a Review
          </a>
      </div>
  </section>

  <!-- Reviews Carousel Section -->
  <section class="review-carousel">
      <div class="container">
          <h3 class="section-title">What People Are Saying</h3>
          
          @if(count($reviews->where('activity_id', $id)) > 0)
              <div id="reviewCarousel" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                      @php $reviewChunks = $reviews->where('activity_id', $id)->chunk(3); @endphp
                      @foreach($reviewChunks as $index => $chunk)
                          <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                              <div class="row">
                                  @foreach($chunk as $review)
                                      <div class="col-md-4">
                                          <div class="review-card">
                                              <div class="d-flex align-items-center mb-3">
                                                  <div class="rating-stars me-2">
                                                      @for($i = 1; $i <= 5; $i++)
                                                          <i class="bi bi-star{{ $i <= $review->rating ? '-fill' : '' }}"></i>
                                                      @endfor
                                                  </div>
                                                  <span class="text-muted">{{ $review->rating }}/5</span>
                                              </div>
                                              <p class="mb-3">"{{ $review->comment }}"</p>
                                              <div class="d-flex align-items-center">
                                                  <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center me-3" 
                                                       style="width: 40px; height: 40px;">
                                                      {{ strtoupper(substr($review->user->name, 0, 1)) }}
                                                  </div>
                                                  <div>
                                                      <h6 class="mb-0">{{ $review->user->name }}</h6>
                                                      <small class="text-muted">Verified Experience</small>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  @endforeach
                              </div>
                          </div>
                      @endforeach
                  </div>
                  
                  @if(count($reviewChunks) > 1)
                      <button class="carousel-control-prev" type="button" data-bs-target="#reviewCarousel" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon bg-primary rounded-circle p-3" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#reviewCarousel" data-bs-slide="next">
                          <span class="carousel-control-next-icon bg-primary rounded-circle p-3" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                      </button>
                  @endif
              </div>
          @else
              <div class="text-center py-5">
                  <i class="bi bi-chat-dots text-muted" style="font-size: 3rem;"></i>
                  <h5 class="mt-3 text-muted">No reviews yet</h5>
                  <p class="text-muted">Be the first to share your experience!</p>
              </div>
          @endif
      </div>
  </section>

  <!-- Review Modal -->
  <div class="modal fade" id="review_modal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">
                  <h2 class="modal-title" id="reviewModalLabel">Share Your Experience</h2>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form id="review_form" method="POST" action="{{ route('save-review') }}">
                  @csrf
                  <input type="hidden" name="activity_id" value="{{ $id }}">
                  
                  <div class="modal-body">
                      <div class="text-center mb-4">
                          <h5>How was your experience?</h5>
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
                          <label for="comment" class="form-label h6">Tell us about your experience</label>
                          <textarea name="comment" id="comment" rows="5" class="form-control" 
                                    placeholder="Share your thoughts about this experience... What did you enjoy most? Any tips for future participants?"
                                    required></textarea>
                      </div>
                  </div>
                  
                  <div class="modal-footer justify-content-center">
                      <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                      <button type="submit" class="btn-primary-custom">Submit Review</button>
                  </div>
              </form>
          </div>
      </div>
  </div>

  <!-- Recommendation Section -->
  <section id="recommendation_section">
      <!-- Add your recommendation content here -->
  </section>

  <script>
      // Star rating functionality
      const starWidget = document.querySelector('.star-widget');
      const stars = starWidget.querySelectorAll('label');
      
      stars.forEach((star, index) => {
          star.addEventListener('click', () => {
              const rating = 5 - index;
              // Add visual feedback or additional functionality here
          });
      });

      // Form submission feedback
      document.getElementById('review_form').addEventListener('submit', function(e) {
          const rating = document.querySelector('input[name="rate"]:checked');
          const comment = document.getElementById('comment').value.trim();
          
          if (!rating) {
              e.preventDefault();
              alert('Please select a rating before submitting your review.');
              return;
          }
          
          if (comment.length < 10) {
              e.preventDefault();
              alert('Please write a more detailed review (at least 10 characters).');
              return;
          }
      });
  </script>
</x-app-layout>