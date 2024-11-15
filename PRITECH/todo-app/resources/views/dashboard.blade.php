<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>To-Do List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">

    <style>
        .custom-line-clamp {
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
</head>

<body>

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
            @auth
            <a href="javascript:void(0);" onclick="document.getElementById('logout-form').submit();">
                <button class="text-white bg-green-600 border-0 py-2 px-4 focus:outline-none hover:bg-green-700 rounded text-lg">Log Out</button>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            @endauth
            @guest
            <a href="/login" class="text-green-600">Log In</a>
            @endguest
        </div>
    </header>


    @auth
    <section class="text-gray-600 body-font bg-gray-100">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">To-Do List</h1>
                <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Manage your tasks and stay productive.</p>
            </div>

            @if (session('success'))
            <div class="bg-green-200 text-green-800 p-3 mb-4 rounded">
                <p>{{ session('success') }}</p>
            </div>
            @endif

            <div class="flex justify-end mb-8">
                <a href="{{ route('todolist.create') }}" class="inline-flex items-center text-white bg-green-600 hover:bg-green-700 py-2 px-6 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6 mr-2" viewBox="0 0 24 24">
                        <path d="M12 5v14m7-7H5" stroke="#fff" stroke-width="2" />
                    </svg>
                    Add New To-Do Item
                </a>
            </div>

            <div class="flex flex-wrap -m-4">
                @foreach ($todoList as $index => $item)
                <div id="item-{{ $item->id }}" class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="border border-gray-200 p-6 rounded-lg bg-white">
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-5">
                            <span class="font-bold text-white bg-green-600 rounded-full border-2 border-green-600 px-4 py-2 text-xl">{{ $index + 1 }}</span>
                        </h2>
                        <h1 class="text-2xl font-bold text-gray-900 mb-5">
                            <a href="{{ route('todolist.show', $item->id) }}" class="text-green-600 hover:text-green-800">{{ $item->titulli }}</a>
                        </h1>
                        <p class="leading-relaxed text-base text-gray-600 mb-5 text-justify overflow-hidden custom-line-clamp">
                            {{ $item->pershkrimi }}
                        </p>
                        <div class="flex justify-between mt-4">
                            <!-- Edit Button with Icon -->
                            <a href="{{ route('todolist.edit', $item->id) }}" class="inline-flex items-center text-green-500 border-2 border-green-500 hover:bg-green-100 hover:text-green-700 py-2 px-4 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6 mr-2" viewBox="0 0 24 24">
                                    <path d="M17.25 3.75l3 3a1.5 1.5 0 010 2.121l-10.5 10.5a1.5 1.5 0 01-.707.354l-4.5 1.5a1.5 1.5 0 01-1.5-1.5l1.5-4.5a1.5 1.5 0 01.354-.707l10.5-10.5a1.5 1.5 0 012.121 0z"></path>
                                </svg>
                                Edit
                            </a>
                            <!-- Delete Button with Icon -->
                            <form action="{{ route('todolist.destroy', $item->id) }}" method="POST" style="display: inline;" id="delete-form-{{ $item->id }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="inline-flex items-center text-red-500 border-2 border-red-500 hover:bg-red-100 hover:text-red-700 py-2 px-4 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6 mr-2" viewBox="0 0 24 24">
                                        <path d="M6 19c0 1.104.896 2 2 2h8c1.104 0 2-.896 2-2v-10H6v10zM19 4h-4V3c0-.553-.447-1-1-1h-4c-.553 0-1 .447-1 1v1H5c-.553 0-1 .447-1 1v2h16V5c0-.553-.447-1-1-1z"></path>
                                    </svg>
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <button class="flex mx-auto mt-16 text-white bg-green-500 hover:bg-green-600 py-2 px-8 rounded text-lg">
                View more of your to-do list
            </button>
        </div>
    </section>
    @else
    <p>{{ __("Please log in or sign up.") }}</p>
    <a href="/login" class="text-green-600">Log In</a>
    @endauth

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
                <a href="https://twitter.com" class="text-gray-600 ml-1" target="_blank">Follow Us</a>
            </p>
        </div>
    </footer>

    <script>
        function deleteItem(itemId) {
            // Simulate item removal from the UI
            const itemDiv = document.getElementById('item-' + itemId);
            if (itemDiv) {
                itemDiv.style.display = 'none'; // Hide the div containing the item
            }
        }
    </script>

</body>

</html>