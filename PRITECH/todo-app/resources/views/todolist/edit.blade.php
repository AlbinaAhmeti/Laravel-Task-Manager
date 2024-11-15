<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit To-Do</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>

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
            <a href="/">
                <button class="text-white bg-green-600 border-0 py-2 px-4 focus:outline-none hover:bg-green-700 rounded text-lg">Log Out</button>
            </a>
        </div>
    </header>

    <!-- Main Content -->
    <section class="text-gray-600 body-font bg-gray-100">
        <div class="container px-5 py-24 mx-auto flex flex-col items-center">
            <h2 class="text-3xl font-semibold text-gray-900 mb-6">Edit To-Do List</h2>

            @if ($errors->any())
            <div class="alert alert-danger bg-red-100 text-red-700 p-3 mb-6 rounded-lg">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif


            <!-- Edit Form -->
            <form action="{{ route('todolist.update', $todoList->id) }}" method="POST" class="w-full max-w-lg bg-white p-8 rounded-lg shadow-lg">
                @csrf
                @method('PUT') <!-- Kjo është e rëndësishme për metodën UPDATE -->

                <div class="mb-6">
                    <label for="titulli" class="block text-gray-700 text-sm font-medium mb-2">Title:</label>
                    <input type="text" name="titulli" id="titulli" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" value="{{ old('titulli', $todoList->titulli) }}" required>
                </div>

                <div class="mb-6">
                    <label for="pershkrimi" class="block text-gray-700 text-sm font-medium mb-2">Description:</label>
                    <textarea name="pershkrimi" id="pershkrimi" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" required>{{ old('pershkrimi', $todoList->pershkrimi) }}</textarea>
                </div>

                <button type="submit" class="w-full bg-green-500 text-white py-2 px-4 rounded-full shadow-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 transition-all duration-300 ease-in-out">Update</button>
            </form>


            <a href="{{ route('todolist.index') }}" class="text-green-500 hover:text-green-600 mt-6 text-lg">
                <button class="flex mx-auto mt-16 text-white bg-green-500 hover:bg-green-600 py-2 px-8 rounded text-lg">
                    Back to To-Do List
                </button>
            </a>
        </div>
    </section>

    <!-- Footer -->
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
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
                <a class="text-gray-500">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-500">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-500">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-500">
                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                        <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                        <circle cx="4" cy="4" r="2" stroke="none"></circle>
                    </svg>
                </a>
            </span>
        </div>
    </footer>
</body>

</html>