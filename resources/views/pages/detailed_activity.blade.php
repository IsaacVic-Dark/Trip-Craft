<x-app-layout>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tropical Paradise Recreation</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'inter': ['Inter', 'sans-serif'],
                    },
                    colors: {
                        'warm-gray': {
                            50: '#fafaf9',
                            100: '#f5f5f4',
                            200: '#e7e5e4',
                            300: '#d6d3d1',
                            400: '#a8a29e',
                            500: '#78716c',
                            600: '#57534e',
                            700: '#44403c',
                            800: '#292524',
                            900: '#1c1917',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="font-sans bg-white">
    <div class="max-w-6xl mx-auto p-10">
        <!-- Header Section -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-12">
            <!-- Left Column - Text Content -->
            <div class="space-y-8">
                <div>
                    <h1 class="text-5xl font-extrabold text-gray-900 mb-2 tracking-tight">{{ $activity_name }}</h1>
                    <h2 class="text-3xl font-light text-gray-700">Recreation</h2>
                </div>
                <div class="space-y-3 text-lg text-gray-600">
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span>{{ $location }}</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span>{{ $createdAgo }}</span>
                    </div>
                </div>
                <p class="text-gray-600 text-lg leading-relaxed">
                    Unveil the bounty of tropical bliss. From sun-kissed shores to vibrant cultural experiences, this journey promises you a solitary escape.
                </p>
            </div>
            <!-- Right Column - Image -->
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1000&q=80" 
                     alt="Tropical beach with palm trees and rocky coastline" 
                     class="w-full h-80 object-cover rounded-2xl shadow-xl">
                <button class="absolute bottom-4 left-4 bg-white/90 backdrop-blur-sm px-4 py-2 rounded-full text-sm font-medium text-gray-700 flex items-center gap-2 shadow">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                    </svg>
                    See Gallery
                </button>
            </div>
        </div>
        <!-- Main Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Left Column - Package Details -->
            <div class="lg:col-span-2 space-y-10">
                <!-- Package Info -->
                <div class="grid grid-cols-3 gap-6 text-lg">
                    <div>
                        <div class="text-gray-500 mb-1">Price</div>
                        <div class="font-semibold text-gray-900 text-xl">${{ $price }}</div>
                    </div>
                    <div>
                        <div class="text-gray-500 mb-1">Quota</div>
                        <div class="font-semibold text-gray-900 text-xl">20 Available</div>
                    </div>
                    <div>
                        <div class="text-gray-500 mb-1">Schedule</div>
                        <div class="font-semibold text-gray-900 text-xl">10 - 17 November 2023</div>
                    </div>
                </div>
                <!-- Description -->
                <div class="text-lg text-gray-600 leading-relaxed">
                    <p>{{ $description }}</p>
                </div>
                <!-- Includes Section -->
                <div>
                    <h3 class="font-semibold text-gray-900 mb-4 text-xl">Includes:</h3>
                    <div class="space-y-3 text-lg text-gray-600">
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 bg-black rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span>Accommodation in luxury beachfront resorts</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 bg-black rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span>Daily breakfast, lunch and dinner</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 bg-black rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span>Travel insurance & airport transfers</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 bg-black rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span>English-speaking tour guide with 3 tours</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 bg-black rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span>Sport activities & cultural experiences with locals</span>
                        </div>
                    </div>
                </div>
                <!-- Excludes Section -->
                <div>
                    <h3 class="font-semibold text-gray-900 mb-4 text-xl">Excludes:</h3>
                    <div class="space-y-3 text-lg text-gray-600">
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 border-2 border-gray-300 rounded-full flex items-center justify-center">
                                <div class="w-3 h-3 bg-gray-300 rounded-full"></div>
                            </div>
                            <span>Personal expenses (souvenirs, spa, etc.)</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 border-2 border-gray-300 rounded-full flex items-center justify-center">
                                <div class="w-3 h-3 bg-gray-300 rounded-full"></div>
                            </div>
                            <span>International tax & visa airfare</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 border-2 border-gray-300 rounded-full flex items-center justify-center">
                                <div class="w-3 h-3 bg-gray-300 rounded-full"></div>
                            </div>
                            <span>Optional excursions</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right Column - Booking Panel -->
            <div class="space-y-8">
                <!-- Action Buttons -->
                <div class="flex gap-3">
                    <button class="flex-1 bg-primary-yellow text-primary-dark px-6 py-3 rounded-xl text-lg font-semibold shadow hover:bg-yellow-300 transition">Book Tour</button>
                    <button class="flex-1 text-gray-500 px-6 py-3 text-lg font-semibold rounded-xl border border-gray-200 shadow hover:bg-gray-100 transition">Message</button>
                </div>
                <!-- Booking Details -->
                <div class="bg-gray-50 rounded-2xl p-6 space-y-6 shadow-lg">
                    <div>
                        <div class="text-lg text-gray-500 mb-1">Full Name</div>
                        <input type="text" placeholder="Clara Judith Smith" class="w-full p-3 text-lg border border-gray-200 rounded-lg bg-white">
                    </div>
                    <div>
                        <div class="text-lg text-gray-500 mb-2">Tour Package</div>
                        <select class="w-full p-3 text-lg border border-gray-200 rounded-lg bg-white">
                            <option>Tropical Paradise Package (recreation)</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
</x-app-layout>