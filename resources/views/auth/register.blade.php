{{-- <x-guest-layout title="SignUp Page"> --}}
<script src="https://cdn.tailwindcss.com"></script>
<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    primary: "#1a1a1a",
                    secondary: "#F6E71D",
                    muted: "#F6E71D",
                    accent: "#F6E71D",
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
        @apply flex h-10 w-full rounded-md border bg-white px-3 py-2 text-sm placeholder:text-slate-500 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#F6E71D] focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50;
        border-color: #F6E71D;
    }
    .card {
        @apply rounded-lg border border-slate-200 bg-card shadow-sm;
    }
</style>
<div class="grid min-h-screen lg:grid-cols-2">
    <div class="relative hidden bg-muted lg:block" style="background: url('/images/plan_img.jpg') center center/cover no-repeat;">
        <div class="absolute inset-0" style="background: rgba(246, 231, 29, 0.4);"></div>
        <div class="relative h-full flex items-center justify-center p-12">
            <div class="max-w-md text-center">
                <h2 class="text-3xl font-bold mb-4">Welcome to Trip Craft</h2>
                <p class="text-gray-600">Create your account and join our community of adventurers!</p>
            </div>
        </div>
    </div>
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
                        <h1 class="text-2xl font-semibold tracking-tight">Create your account</h1>
                        <p class="text-sm text-gray-600">Fill in your details below</p>
                    </div>
                    <form method="POST" action="{{ route('register') }}" class="space-y-4">
                        @csrf
                        <div class="space-y-2">
                            <x-input-label for="name" :value="__('Name')" class="text-sm font-medium" />
                            <x-text-input id="name" class="input" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <div class="space-y-2">
                            <x-input-label for="email" :value="__('Email')" class="text-sm font-medium" />
                            <x-text-input id="email" class="input" type="email" name="email" :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <div class="space-y-2">
                            <x-input-label for="password" :value="__('Password')" class="text-sm font-medium" />
                            <x-text-input id="password" class="input" type="password" name="password" required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        <div class="space-y-2">
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-sm font-medium" />
                            <x-text-input id="password_confirmation" class="input" type="password" name="password_confirmation" required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>
                            <button type="submit" class="btn h-10 px-4 py-2 w-full" style="background-color: #F6E71D; color: black;">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- </x-guest-layout> --}}
