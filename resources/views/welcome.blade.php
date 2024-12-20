<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Trip Craft | Home Page</title>

    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Link -->

    <!-- Font Awesome Cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- Font Awesome Cdn -->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Fonts -->

    <!-- Styles -->
    <link rel="stylesheet" href="other.css">
    <!-- Styles -->

</head>

<body class="antialiased">
    <div class="">
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="{{ route('welcome') }}">Trip Craft</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                    <span><i class="fa-solid fa-bars"></i></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="mynavbar">
                    <ul class="navbar-nav mx-auto"> <!-- Use mx-auto to center items -->
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            @if (Route::has('login'))
                                <div>
                                    @auth
                                        <a href="{{ url('/home') }}"
                                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                                    @else
                                        <a href="{{ route('login') }}" class="">Log in</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                                        @endif
                                    @endauth
                                </div>
                            @endif

                </div>
            </div>
        </nav>
        <!-- Navbar End -->

        <!-- Home Section Start -->
        <div class="home">
            <div class="content">
                <h5>Welcome To Trip Craft</h5>
                <h1>Visit <span class="changecontent"></span></h1>
                <p>Explore breathtaking destinations, plan unforgettable trips, and create lasting memories!</p>
                <a href="{{ route('login') }}">Take that break</a>
            </div>
        </div>
        <!-- Home Section End -->

        <!-- Section Book Start -->
        <section class="book" id="book">
            <div class="container">

                <div class="main-text">
                    <h1 class="">How to join Us</h1>
                </div>

                <div class="row">

                    <div class="col-md-6 py-3 py-md-0">
                        <div class="card">
                            <img src="{{ asset('images/img 1.jpeg') }}" alt="">
                        </div>
                    </div>

                    <div class="col-md-6 py-3 py-md-0">
                        <form action="#">

                            <p>Discover the joy of gardening and connect with a vibrant community of fellow enthusiasts
                                by joining us for our upcoming competition. Whether you're a seasoned gardener looking
                                to showcase your expertise or a novice eager to explore the world of horticulture, our
                                event offers a welcoming platform for all levels of experience. Engage in friendly
                                competition, exchange tips and ideas, and cultivate new friendships while immersing
                                yourself in the beauty of nature. Don't miss this opportunity to cultivate your passion
                                and be part of an inspiring gardening journey!</p>

                        </form>
                    </div>

                </div>
            </div>
        </section>
        <!-- Section Book End -->

        <!-- Section Packages Start -->
        <section class="packages" id="packages">
            <div class="container">

                <div class="main-txt">
                    <h1>Packages</h1>
                </div>

                <div class="row" style="margin-top: 30px;">

                    <div class="col-md-4 py-3 py-md-0">

                        <div class="card">
                            <img src="./images/uk.png" alt="">
                            <div class="card-body">
                                <h3>Go Kart Racing</h3>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, doloribus!</p>
                                <div class="star">
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star "></i>
                                    <i class="fa-solid fa-star "></i>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 py-3 py-md-0">

                        <div class="card">
                            <img src="./images/uk.png" alt="">
                            <div class="card-body">
                                <h3>Go Kart Racing</h3>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, doloribus!</p>
                                <div class="star">
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star "></i>
                                    <i class="fa-solid fa-star "></i>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 py-3 py-md-0">

                        <div class="card">
                            <img src="./images/uk.png" alt="">
                            <div class="card-body">
                                <h3>Go Kart Racing</h3>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, doloribus!</p>
                                <div class="star">
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star "></i>
                                    <i class="fa-solid fa-star "></i>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>



                <div class="row" style="margin-top: 30px;">



                    <div class="col-md-4 py-3 py-md-0">

                        <div class="card">
                            <img src="./images/us.png" alt="">
                            <div class="card-body">
                                <h3>Paintball Battles</h3>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, doloribus!</p>
                                <div class="star">
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star "></i>
                                    <i class="fa-solid fa-star "></i>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 py-3 py-md-0">

                        <div class="card">
                            <img src="./images/us.png" alt="">
                            <div class="card-body">
                                <h3>Paintball Battles</h3>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, doloribus!</p>
                                <div class="star">
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star "></i>
                                    <i class="fa-solid fa-star "></i>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 py-3 py-md-0">

                        <div class="card">
                            <img src="./images/us.png" alt="">
                            <div class="card-body">
                                <h3>Paintball Battles</h3>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, doloribus!</p>
                                <div class="star">
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star "></i>
                                    <i class="fa-solid fa-star "></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </section>
        <!-- Section Packages End -->
        <!-- Section Services Start -->
        <section class="services" id="services">
            <div class="container">

                <div class="main-txt">
                    <h1>Services</h1>
                </div>

                <div class="row" style="margin-top: 30px;">

                    <div class="col-md-4 py-3 py-md-0">

                        <div class="card">
                            <i class="fas fa-hotel"></i>
                            <div class="card-body">
                                <h3>View Activity</h3>
                                <p>Check all activities avaibae with ease and in confort of your home.</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 py-3 py-md-0">

                        <div class="card">
                            <i class="fas fa-utensils"></i>
                            <div class="card-body">
                                <h3>Plan Activity</h3>
                                <p>Have an activity for the weekend in mind plan with us.</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 py-3 py-md-0">

                        <div class="card">
                            <i class="fas fa-bullhorn"></i>
                            <div class="card-body">
                                <h3>Recommend Activity</h3>
                                <p>Filteres over a vast actvities to find the one close to you or to your liking.</p>
                            </div>
                        </div>

                    </div>



                </div>



            </div>
        </section>
        <!-- Section Services End -->




        <!-- Section Gallary Start -->
        <section class="gallary" id="gallary">
            <div class="container">

                <div class="main-txt">
                    <h1>Gallary</h1>
                </div>

                <div class="row" style="margin-top: 30px;">
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card">
                            <img src="{{ asset('/storage/images/paintball_kenya.jpg') }}" alt=""
                                height="230px">
                        </div>
                    </div>
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card">
                            <img src="{{ asset('/storage/images/paintball_kenya.jpg') }}" alt=""
                                height="230px">
                        </div>
                    </div>
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card">
                            <img src="{{ asset('/storage/images/paintball_kenya.jpg') }}" alt=""
                                height="230px">
                        </div>
                    </div>
                </div>


                <div class="row" style="margin-top: 30px;">
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card">
                            <img src="{{ asset('/storage/images/paintball_kenya.jpg') }}" alt=""
                                height="230px">
                        </div>
                    </div>
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card">
                            <img src="{{ asset('/storage/images/paintball_kenya.jpg') }}" alt=""
                                height="230px">
                        </div>
                    </div>
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card">
                            <img src="{{ asset('/storage/images/paintball_kenya.jpg') }}" alt=""
                                height="230px">
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- Section Gallary End -->



        <!-- About Start -->
        <section class="about" id="about">
            <div class="container">

                <div class="main-txt">
                    <h1>About Us</h1>
                </div>

                <div class="row" style="margin-top: 50px;">

                    <div class="col-md-6 py-3 py-md-0">
                        <div class="card">
                            <img src="{{ asset('/storage/images/youth_planning.jpg') }}" alt="">
                        </div>
                    </div>

                    <div class="col-md-6 py-3 py-md-0">
                        <h2>How Trip Craft</h2>
                        <p>
                            Trip Craft is an innovative travel planning platform that simplifies the process of
                            organizing personalized trips tailored to individual preferences. Users begin by inputting
                            their destination, travel dates, and interests, which Trip Craft's intelligent algorithm
                            analyzes to generate customized itineraries. These itineraries include recommendations for
                            accommodations, activities, dining options, and transportation, curated based on factors
                            such as user preferences, budget constraints, and time constraints. With Trip Craft,
                            travelers can effortlessly plan unforgettable journeys that cater to their unique tastes and
                            interests, all while saving time and maximizing their travel experiences.</p>
                        <button id="about-btn">Read More...</button>
                    </div>

                </div>

            </div>
        </section>
        <!-- About End -->



        <!-- Footer Start -->
        <footer id="footer">
            <h1>Trip Craft</h1>

            <div class="credit">
                <p>Designed By <a href="#">Isaac Victor</a></p>
            </div>
            <div class="copyright">
                <p>&copy;Copyright || All Rights Reserved</p>
            </div>
        </footer>
        <!-- Footer End -->

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
