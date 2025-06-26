<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Trip Craft | Plan Your Dream Adventure</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white text-primary-dark font-sans">
    <!-- Navigation -->
    <nav class="fixed top-0 left-0 w-full z-50 bg-white/95 backdrop-blur-sm border-b border-gray-200 shadow-sm">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <a href="{{ route('welcome') }}" class="text-2xl font-bold text-primary-yellow">
                        Trip Craft
                    </a>
                </div>
                
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="text-primary-dark hover:text-primary-yellow transition-colors duration-300">Home</a>
                    <a href="#destinations" class="text-primary-dark hover:text-primary-yellow transition-colors duration-300">Destinations</a>
                    <a href="#about" class="text-primary-dark hover:text-primary-yellow transition-colors duration-300">About</a>
                    <a href="#contact" class="text-primary-dark hover:text-primary-yellow transition-colors duration-300">Contact</a>
                </div>
                
                <div class="flex items-center space-x-4">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/home') }}" class="btn-secondary">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-primary-dark hover:text-primary-yellow transition-colors duration-300">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn-primary">Get Started</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-white via-light-gray to-white"></div>
        <div class="absolute inset-0 bg-[url('/images/camping.jpg')] bg-cover bg-center opacity-10"></div>
        
        <div class="container relative z-10">
            <div class="text-center py-32">
                <h5 class="text-primary-yellow text-xl font-medium mb-4">Welcome to Trip Craft</h5>
                <h1 class="text-6xl md:text-8xl font-black mb-8 leading-tight text-primary-dark">
                    Plan Your 
                    <span class="gradient-overlay bg-clip-text text-transparent">Dream Adventure</span>
                </h1>
                <p class="text-xl md:text-2xl text-medium-gray mb-12 max-w-3xl mx-auto leading-relaxed">
                    Discover breathtaking destinations, create unforgettable memories, and craft the perfect journey with our expert planning tools.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <a href="{{ route('login') }}" class="btn-primary text-lg px-12 py-5">
                        Start Planning Now
                    </a>
                    <a href="#destinations" class="btn-secondary text-lg px-12 py-5">
                        Explore Destinations
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Floating Elements -->
        <div class="absolute top-20 left-10 w-20 h-20 bg-primary-yellow/20 rounded-full blur-xl"></div>
        <div class="absolute bottom-20 right-10 w-32 h-32 bg-secondary-yellow/20 rounded-full blur-xl"></div>
    </section>

    <!-- Features Section -->
    <section class="section bg-light-gray">
        <div class="container">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 text-primary-dark">Why Choose Trip Craft?</h2>
                <p class="text-xl text-medium-gray max-w-2xl mx-auto">
                    We make trip planning <span class="descriptor-words">effortless</span>, <span class="descriptor-words">exciting</span>, and <span class="descriptor-words">unforgettable</span>
                </p>
            </div>
            
            <div class="grid-layout">
                <div class="feature-card">
                    <div class="w-16 h-16 bg-gradient-to-r from-primary-yellow to-secondary-yellow rounded-2xl flex items-center justify-center mb-6 mx-auto">
                        <i class="fas fa-map-marked-alt text-2xl text-primary-dark"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-primary-dark">Smart Planning</h3>
                    <p class="text-medium-gray">Our AI-powered system helps you create the perfect itinerary based on your preferences and budget.</p>
                </div>
                
                <div class="feature-card">
                    <div class="w-16 h-16 bg-gradient-to-r from-primary-yellow to-secondary-yellow rounded-2xl flex items-center justify-center mb-6 mx-auto">
                        <i class="fas fa-users text-2xl text-primary-dark"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-primary-dark">Community Driven</h3>
                    <p class="text-medium-gray">Connect with fellow travelers, share experiences, and get insider tips from locals worldwide.</p>
                </div>
                
                <div class="feature-card">
                    <div class="w-16 h-16 bg-gradient-to-r from-primary-yellow to-secondary-yellow rounded-2xl flex items-center justify-center mb-6 mx-auto">
                        <i class="fas fa-shield-alt text-2xl text-primary-dark"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-primary-dark">Safe & Secure</h3>
                    <p class="text-medium-gray">Your data is protected with enterprise-grade security. Travel with confidence and peace of mind.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Destinations Section -->
    <section id="destinations" class="section bg-white">
        <div class="container">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 text-primary-dark">Popular Destinations</h2>
                <p class="text-xl text-medium-gray">Discover amazing places that will take your breath away</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="card group">
                    <div class="relative overflow-hidden rounded-xl mb-6">
                        <img src="{{ asset('images/camping.jpg') }}" alt="Camping Adventure" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    </div>
                    <h3 class="text-2xl font-bold mb-3 text-primary-dark">Camping Adventure</h3>
                    <p class="text-medium-gray mb-4">Experience the great outdoors with our guided camping expeditions.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-1">
                            <i class="fas fa-star text-primary-yellow"></i>
                            <i class="fas fa-star text-primary-yellow"></i>
                            <i class="fas fa-star text-primary-yellow"></i>
                            <i class="fas fa-star text-primary-yellow"></i>
                            <i class="fas fa-star text-gray-300"></i>
                        </div>
                        <span class="text-primary-yellow font-bold">$299</span>
                    </div>
                </div>
                
                <div class="card group">
                    <div class="relative overflow-hidden rounded-xl mb-6">
                        <img src="{{ asset('images/go_karting.jpg') }}" alt="Go Kart Racing" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    </div>
                    <h3 class="text-2xl font-bold mb-3 text-primary-dark">Go Kart Racing</h3>
                    <p class="text-medium-gray mb-4">Feel the adrenaline rush with our high-speed karting experiences.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-1">
                            <i class="fas fa-star text-primary-yellow"></i>
                            <i class="fas fa-star text-primary-yellow"></i>
                            <i class="fas fa-star text-primary-yellow"></i>
                            <i class="fas fa-star text-primary-yellow"></i>
                            <i class="fas fa-star text-primary-yellow"></i>
                        </div>
                        <span class="text-primary-yellow font-bold">$199</span>
                    </div>
                </div>
                
                <div class="card group">
                    <div class="relative overflow-hidden rounded-xl mb-6">
                        <img src="{{ asset('images/water_park.jpg') }}" alt="Water Park Fun" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    </div>
                    <h3 class="text-2xl font-bold mb-3 text-primary-dark">Water Park Fun</h3>
                    <p class="text-medium-gray mb-4">Splash and slide your way through exciting water adventures.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-1">
                            <i class="fas fa-star text-primary-yellow"></i>
                            <i class="fas fa-star text-primary-yellow"></i>
                            <i class="fas fa-star text-primary-yellow"></i>
                            <i class="fas fa-star text-primary-yellow"></i>
                            <i class="fas fa-star text-gray-300"></i>
                        </div>
                        <span class="text-primary-yellow font-bold">$149</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="section bg-light-gray">
        <div class="container">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 text-primary-dark">What Our Travelers Say</h2>
                <p class="text-xl text-medium-gray">Real experiences from real adventurers</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="testimonial">
                    <p class="text-lg text-medium-gray mb-6">"Trip Craft made planning our family vacation so easy! The recommendations were spot-on and we had the best time ever."</p>
                    <div class="testimonial-author">Sarah Johnson</div>
                    <div class="testimonial-role">Family Traveler</div>
                </div>
                
                <div class="testimonial">
                    <p class="text-lg text-medium-gray mb-6">"As a solo traveler, I was worried about safety and planning. Trip Craft took care of everything perfectly!"</p>
                    <div class="testimonial-author">Mike Chen</div>
                    <div class="testimonial-role">Adventure Seeker</div>
                </div>
                
                <div class="testimonial">
                    <p class="text-lg text-medium-gray mb-6">"The community features are amazing! I met fellow travelers and got insider tips that made my trip unforgettable."</p>
                    <div class="testimonial-author">Emma Rodriguez</div>
                    <div class="testimonial-role">Digital Nomad</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section bg-gradient-to-r from-primary-yellow to-secondary-yellow">
        <div class="container">
            <div class="text-center">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 text-primary-dark">Ready to Start Your Adventure?</h2>
                <p class="text-xl text-primary-dark mb-8 max-w-2xl mx-auto">
                    Join thousands of travelers who trust Trip Craft to plan their perfect journeys
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('register') }}" class="bg-primary-dark text-primary-yellow px-12 py-5 rounded-full font-bold text-lg hover:bg-secondary-dark transition-colors duration-300">
                        Start Free Trial
                    </a>
                    <a href="#contact" class="border-2 border-primary-dark text-primary-dark px-12 py-5 rounded-full font-bold text-lg hover:bg-primary-dark hover:text-primary-yellow transition-colors duration-300">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-primary-dark text-white py-12">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-2xl font-bold text-primary-yellow mb-4">Trip Craft</h3>
                    <p class="text-gray-300">Making travel planning effortless and exciting for adventurers worldwide.</p>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-gray-300 hover:text-primary-yellow transition-colors">Home</a></li>
                        <li><a href="#destinations" class="text-gray-300 hover:text-primary-yellow transition-colors">Destinations</a></li>
                        <li><a href="#about" class="text-gray-300 hover:text-primary-yellow transition-colors">About</a></li>
                        <li><a href="#contact" class="text-gray-300 hover:text-primary-yellow transition-colors">Contact</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Support</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-primary-yellow transition-colors">Help Center</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-primary-yellow transition-colors">Safety Guidelines</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-primary-yellow transition-colors">Terms of Service</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-primary-yellow transition-colors">Privacy Policy</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Connect</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-secondary-dark rounded-full flex items-center justify-center hover:bg-primary-yellow hover:text-primary-dark transition-colors">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-secondary-dark rounded-full flex items-center justify-center hover:bg-primary-yellow hover:text-primary-dark transition-colors">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-secondary-dark rounded-full flex items-center justify-center hover:bg-primary-yellow hover:text-primary-dark transition-colors">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-primary-yellow/10 mt-8 pt-8 text-center">
                <p class="text-gray-300">&copy; 2024 Trip Craft. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Smooth Scrolling -->
    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>

</html>
