<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Trip Craft') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

            <!-- Font Awesome Cdn -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

        {{-- Line Icons CDN --}}
        <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />

        {{-- Bootstrap CDN --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        {{-- Bootstrap Icons --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">



            <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            /* Style for the collapsed description */
            .card-text {
                overflow: hidden;
                display: -webkit-box;
                -webkit-line-clamp: 3; /* number of lines to show */
                -webkit-box-orient: vertical;
            }

            /* Style for the "Read More" anchor tag */
            #readMoreLink {
                display: none; /* Hide the link by default */
                /* margin-top: 10px; */
                color: blue;
                text-decoration: none;
                cursor: pointer;
            }
        </style>

    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow" id="message">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                @if (session('message'))
                <div id="message" style="
                    font-size: 16px;
                    background-color: green;
                    padding: 10px;
                    color: white;
                    border-radius: 10px;">
                    {{ session('message') }}
                </div>
                <script>
                    setTimeout(function() {
                        var messageDiv = document.getElementById('message');
                        if (messageDiv) {
                            messageDiv.style.display = 'none';
                        }
                    }, 3000);
                </script>
            @endif
                {{ $slot }}
            </main>
        </div>

        <x-footer/>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Bootstrap Datepicker JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

          <!-- flatpickr CDN -->
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

        <script>
            // Flatpickr for date and time input
            config = {
                enableTime: true,
                altInput: true,
                altFormat: "F j, Y (h:S K)"
            }
            flatpickr ("input[type=datetime-local]", config);

            // Validate entry of either hour or day duration
            document.getElementById('eventDurationForm').addEventListener('submit', function(event) {
                var hours = document.getElementById('hours').value.trim();
                var days = document.getElementById('days').value.trim();
                var validationMessage = document.getElementById('validationMessage');

                if (hours !== '' && days !== '') {
                    // Both fields are filled, show error message and prevent form submission
                    validationMessage.textContent = 'Please enter duration in either hours or days, but not both.';
                    validationMessage.style.color = 'red'; // Set text color to red
                    event.preventDefault(); // Prevent form submission
                }
            });
            // End of Flatpickr

            // Read more feature in cards
            document.addEventListener("DOMContentLoaded", function() {
                var description = document.getElementById('description');
                var readMoreLink = document.getElementById('readMoreLink');

                // Set the number of lines to trigger "Read More"
                var triggerLines = 3;

                // Calculate height of single line
                var lineHeight = parseFloat(window.getComputedStyle(description).lineHeight);

                // Calculate maximum height of description
                var maxHeight = triggerLines * lineHeight;

                // Check if description exceeds maximum height
                if (description.scrollHeight > maxHeight) {
                    readMoreLink.style.display = 'block'; // Show the link
                }
            });
            // End of read more feature



        </script>

    </body>
</html>
