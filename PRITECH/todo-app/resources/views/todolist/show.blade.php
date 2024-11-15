<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>To-Do List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
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
            <a href="/">
                <button class="text-white bg-green-600 border-0 py-2 px-4 focus:outline-none hover:bg-green-700 rounded text-lg">Log Out</button>
            </a>
        </div>
    </header>

    <section class="text-gray-600 body-font bg-gray-100 min-h-screen flex flex-col">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
                <h1 class="text-lg text-gray-900 font-medium title-font mb-5">
                    <span class="font-bold text-white bg-green-600 rounded-full border-4 border-green-600 px-12 py-20 text-9xl">{{ $ToDoList->id }}</span>
                </h1>
            </div>

            <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
                <h1 class="title-font lg:text-7xl text-5xl mb-6 font-medium text-gray-900">{{ $ToDoList->titulli }}</h1>
                <p class="mb-8 lg:text-3xl text-2xl leading-relaxed text-justify">{{ $ToDoList->pershkrimi }}</p>
                <div class="flex justify-center">
                    <a href="{{ route('todolist.index') }}" class="text-green-500 hover:text-green-600 mt-6 text-lg">
                        <button class="flex mx-auto mt-16 text-white bg-green-500 hover:bg-green-600 py-2 px-8 rounded text-lg">
                            Back to To-Do List
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-gray-600 body-font mt-auto">
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
                <!-- Social icons here -->
            </span>
        </div>
    </footer>

</body>

</html>