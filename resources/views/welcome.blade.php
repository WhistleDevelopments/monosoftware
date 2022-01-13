<x-guest-layout>
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-mono-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                <h1 style="font-weight: bold; font-size: 52px; text-align: center;">Mono Software</h1>
                <div class="border-t border-gray-200"></div>
                <h4 style="font-weight: bold; font-size: 15px; text-align: center;">Welcome to Mono Software, Please login in the top right.</h4>
            </div>
        </div>
    </x-guest-layout>
