{{-- <x-guest-layout title="Login Page"> --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: "#1a1a1a",
                        secondary: "#f1f5f9",
                        muted: "#f1f5f9",
                        accent: "#f1f5f9",
                        card: "#ffffff",
                    },
                }
            }
        }
    </script>
    <style type="text/tailwindcss">
        .btn {
            @apply inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-slate-950 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50;
        }
        .btn-primary {
            @apply bg-primary text-white hover:bg-primary/90;
        }
        .btn-secondary {
            @apply bg-secondary text-slate-900 hover:bg-secondary/80;
        }
        .btn-outline {
            @apply border border-slate-200 bg-white hover:bg-accent hover:text-slate-900;
        }
        .input {
            @apply flex h-10 w-full rounded-md border border-slate-200 bg-white px-3 py-2 text-sm placeholder:text-slate-500 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-slate-950 focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50;
        }
        .card {
            @apply rounded-lg border border-slate-200 bg-card shadow-sm;
        }
    </style>

    <!-- Split Screen -->
    <div class="grid min-h-screen lg:grid-cols-2">
        <div class="flex flex-col gap-4 p-6 md:p-10">
            <div class="flex justify-center gap-2 md:justify-start">
                <a href="{{ route('welcome')}}" class="flex items-center gap-2 font-medium">
                    <div class="flex h-6 w-6 items-center justify-center rounded-md text-white" style="background-color: #F6E71D;">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                        </svg>
                    </div>
                    Trip Craft
                </a>
            </div>
            
            
            <div class="flex flex-1 items-center justify-center">
                <div class="w-full max-w-xs">
                    <div class="flex flex-col space-y-6">
                        <div class="flex flex-col space-y-2 text-center">
                            <h1 class="text-2xl font-semibold tracking-tight">Sign in to your account</h1>
                            <p class="text-sm text-gray-600">Enter your email and password below</p>
                        </div>

                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <form method="POST" action="{{ route('login') }}" class="space-y-4">
                            @csrf

                            <!-- Email Address -->
                            <div class="space-y-2">
                                <x-input-label for="email" :value="__('Email')" class="text-sm font-medium" />
                                <x-text-input id="email" 
                                    class="input" 
                                    type="email" 
                                    name="email" 
                                    :value="old('email')" 
                                    placeholder="name@example.com"
                                    required 
                                    autofocus 
                                    autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Password -->
                            <div class="space-y-2">
                                <x-input-label for="password" :value="__('Password')" class="text-sm font-medium" />
                                <div class="relative">
                                    <x-text-input id="password" 
                                        class="input pr-10"
                                        type="password"
                                        name="password"
                                        required 
                                        autocomplete="current-password" />
                                    <button type="button" id="togglePassword"
                                        class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                        <!-- Eye icon (hidden state) -->
                                        <svg id="eyeIcon" class="h-4 w-4 text-gray-400 hover:text-gray-600"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                            </path>
                                        </svg>
                                        <!-- Eye slash icon (visible state) -->
                                        <svg id="eyeSlashIcon"
                                            class="h-4 w-4 text-gray-400 hover:text-gray-600 hidden" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.878 9.878L3 3m6.878 6.878L21 21">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Remember Me -->
                            <div class="block">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>

                            <button type="submit" class="btn h-10 px-4 py-2 w-full" style="background-color: #F6E71D; color: black;">
                                {{ __('Log in') }}
                            </button>
                            
                        </form>

                        <div class="relative">
                            <div class="absolute inset-0 flex items-center">
                                <span class="w-full border-t border-gray-200"></span>
                            </div>
                            <div class="relative flex justify-center text-xs uppercase">
                                <span class="bg-white px-2 text-gray-500">Or continue with</span>
                            </div>
                        </div>

                        <button class="btn btn-outline h-10 px-4 py-2 w-full">
                            <svg class="mr-2 h-4 w-4" viewBox="0 0 24 24">
                                <path
                                    d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"
                                    fill="#4285F4" />
                                <path
                                    d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"
                                    fill="#34A853" />
                                <path
                                    d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"
                                    fill="#FBBC05" />
                                <path
                                    d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"
                                    fill="#EA4335" />
                            </svg>
                            Google
                        </button>

                        @if (Route::has('password.request'))
                            <p class="px-8 text-center text-sm text-gray-600">
                                <a class="underline underline-offset-4 hover:text-primary-yellow" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            </p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="relative hidden bg-muted lg:block">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-gray-900 dark:to-gray-800">
            </div>
            <div class="relative h-full flex items-center justify-center p-12">
                <div class="max-w-md text-center">
                    <h2 class="text-3xl font-bold mb-4">Join thousands of users</h2>
                    <p class="text-gray-600">Experience the power of our platform with a seamless and secure
                        authentication process.</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eyeIcon');
        const eyeSlashIcon = document.getElementById('eyeSlashIcon');

        togglePassword.addEventListener('click', function () {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            eyeIcon.classList.toggle('hidden');
            eyeSlashIcon.classList.toggle('hidden');
        });
    </script>
{{-- </x-guest-layout> --}}