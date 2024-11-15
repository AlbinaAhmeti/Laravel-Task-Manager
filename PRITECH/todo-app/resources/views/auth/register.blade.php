<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>To-Do List</title>
</head>

<body class="min-h-screen flex flex-col">

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

    <main class="flex-grow bg-gray-100 flex items-center justify-center">
        <div class="bg-white shadow-lg rounded-lg p-8 max-w-md w-full">
            <h2 class="text-2xl font-medium text-gray-900 mb-6 text-center">Create an Account</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Full Name Field -->
                <div class="mb-6">
                    <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                    <x-text-input id="name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-500" />
                </div>

                <!-- Email Field -->
                <div class="mb-6">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                    <x-text-input id="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
                </div>

                <!-- Password Field -->
                <div class=" mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <x-text-input id="password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
                </div>

                <!-- Confirm Password -->
                <div class=" mb-6">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                    <x-text-input id="password_confirmation" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-500" />
                </div>

                <div class="flex items-center justify-between mt-6">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 focus:outline-none" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
                    <x-primary-button class="bg-green-500 hover:bg-green-600 text-white py-2 px-6 rounded-md">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </main>


    <footer class="text-gray-600 body-font">
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
            <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-green-500 rounded-full" viewBox="0 0 24 24">
                    <rect x="3" y="4" width="3" height="3" fill="currentColor"></rect>
                    <rect x="3" y="10" width="3" height="3" fill="currentColor"></rect>
                    <rect x="3" y="16" width="3" height="3" fill="currentColor"></rect>
                    <path d="M9 5h12M9 11h12M9 17h12"></path>
                </svg>
                <span class="ml-3 text-xl">To Do List</span>
            </a>
            <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2024 To Do List —
                <a href="https://twitter.com/knyttneve" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">Albina Ahmeti</a>
            </p>
        </div>
    </footer>

</body>

</html>