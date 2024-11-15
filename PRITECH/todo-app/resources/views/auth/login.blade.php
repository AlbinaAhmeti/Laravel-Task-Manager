<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login - To-Do List</title>
</head>

<body class="min-h-screen flex flex-col">

    <!-- Header -->
    <header class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center justify-between">
            <a href="/" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-green-500 rounded-full" viewBox="0 0 24 24">
                    <rect x="3" y="4" width="3" height="3" fill="currentColor"></rect>
                    <rect x="3" y="10" width="3" height="3" fill="currentColor"></rect>
                    <rect x="3" y="16" width="3" height="3" fill="currentColor"></rect>
                    <path d="M9 5h12M9 11h12M9 17h12"></path>
                </svg>
                <span class="ml-3 text-xl">To Do List</span>
            </a>
        </div>
    </header>

    <!-- Login Form -->
    <main class="flex-grow bg-gray-100 flex items-center justify-center">
        <div class="bg-white shadow-lg rounded-lg p-8 max-w-md w-full">
            <h2 class="text-2xl font-medium text-gray-900 mb-6 text-center">Log In</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Field -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                    <input type="email" id="email" name="email" required autocomplete="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                </div>

                <!-- Password Field -->
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" name="password" required autocomplete="current-password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                </div>

                <!-- Remember Me -->
                <div class="mb-4 flex items-center">
                    <input type="checkbox" id="remember_me" name="remember" class="h-4 w-4 text-green-600 border-gray-300 rounded">
                    <label for="remember_me" class="ml-2 block text-sm text-gray-900">Remember me</label>
                </div>

                <!-- Forgot Password -->
                <div class="mb-4 text-sm text-right">
                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-green-600 hover:text-green-700">Forgot your password?</a>
                    @endif
                </div>

                <div class="flex items-center justify-between mt-6">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 focus:outline-none" href="{{ route('register') }}">
                        {{ __('Don\'t have an account?') }}
                    </a>
                    <x-primary-button class="bg-green-500 hover:bg-green-600 text-white py-2 px-6 rounded-md">
                        {{ __('login') }}
                    </x-primary-button>
                </div>

            </form>

        </div>
    </main>

    

    <!-- Footer -->
    <footer class="text-gray-600 body-font">
        <div class="container mx-auto px-5 py-8 flex items-center justify-between">
            <a class="flex title-font font-medium items-center text-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-green-500 rounded-full" viewBox="0 0 24 24">
                    <rect x="3" y="4" width="3" height="3" fill="currentColor"></rect>
                    <rect x="3" y="10" width="3" height="3" fill="currentColor"></rect>
                    <rect x="3" y="16" width="3" height="3" fill="currentColor"></rect>
                    <path d="M9 5h12M9 11h12M9 17h12"></path>
                </svg>
                <span class="ml-3 text-xl">To Do List</span>
            </a>
            <p class="text-sm text-gray-500">© 2024 To Do List — Albina Ahmeti</p>
        </div>
    </footer>

</body>

</html>
