<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel1') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet"> <!--Replace with your tailwind.css once created-->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>
<body>
<header class="text-gray-600 body-font border border-bottom">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0" href="{{ route('home') }}">
            <span class="ml-3 text-xl">Home</span>
        </a>
        <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
            <a class="mr-5 hover:text-gray-900">First Link</a>
            <a class="mr-5 hover:text-gray-900">Second Link</a>
            <a class="mr-5 hover:text-gray-900">Third Link</a>
            <a class="mr-5 hover:text-gray-900">Fourth Link</a>
        </nav>


        <div class="relative inline-block text-left">
            @guest
                @if (Route::has('login'))
                    <a href="{{ route('login') }}">
                        <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                            <span>Login</span>
                        </button>
                    </a>
                @endif
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">
                        <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                            <span>Register</span>
                        </button>
                    </a>
                @endif
            @else

            <div @click.away="open = false" class="relative" x-data="{ open: false }">
                <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                    <span>{{ Auth::user()->name }}</span>
                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute w-full mt-2 rounded-md shadow-lg">
                    <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                        @role('admin')
                        <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg
                        dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600
                        dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0
                        hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200
                        focus:outline-none focus:shadow-outline" href="{{ route('homeAdmin') }}">Admin-panel</a>
                        @endrole
                        <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg
                        dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600
                        dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0
                        hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200
                        focus:outline-none focus:shadow-outline" href="{{ route('cabinet') }}">Cabinet</a>
                        <form method="POST" action="{{ route('logout') }}" role="none">
                            @csrf
                            <button type="submit" class="block px-4 py-2 mt-2 text-sm font-semibold
                            bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600
                            dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white
                             dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900
                             hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" role="menuitem"  id="menu-item-3">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
            @endguest
    </div>
</header>


<main class="p-4 m-5 flex flex-row">
            <div class="flex w-full max-w-xs p-4 bg-white">
                <ul class="flex flex-col w-full">
                    <li class="my-px">
                        <a href="#"
                           class="flex flex-row items-center h-12 px-4 rounded-lg text-gray-600 bg-gray-100">
                            <span class="flex items-center justify-center text-lg text-gray-400">
                                <svg fill="none"
                                     stroke-linecap="round"
                                     stroke-linejoin="round"
                                     stroke-width="2"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor"
                                     class="h-6 w-6">
                                    <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                </svg>
                            </span>
                            <span class="ml-3">Dashboard</span>
                            <span class="flex items-center justify-center text-sm text-gray-500 font-semibold bg-gray-200 h-6 px-2 rounded-full ml-auto">3</span>
                        </a>
                    </li>
                    <li class="my-px">
                        <span class="flex font-medium text-sm text-gray-400 px-4 my-4 uppercase">Projects</span>
                    </li>
                    <li class="my-px">
                        <a href="#"
                           class="flex flex-row items-center h-12 px-4 rounded-lg text-gray-600 hover:bg-gray-100">
                            <span class="flex items-center justify-center text-lg text-gray-400">
                                <svg fill="none"
                                     stroke-linecap="round"
                                     stroke-linejoin="round"
                                     stroke-width="2"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor"
                                     class="h-6 w-6">
                                    <path d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path>
                                </svg>
                            </span>
                            <span class="ml-3">Manager</span>
                        </a>
                    </li>
                    <li class="my-px">
                        <a href="{{ route('tasks.index') }}"
                           class="flex flex-row items-center h-12 px-4 rounded-lg text-gray-600 hover:bg-gray-100">
                            <span class="flex items-center justify-center text-lg text-gray-400">
                                <svg fill="none"
                                     stroke-linecap="round"
                                     stroke-linejoin="round"
                                     stroke-width="2"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor"
                                     class="h-6 w-6">
                                    <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                                </svg>
                            </span>
                            <span class="ml-3">Tasks</span>
                        </a>
                    </li>
                    <li class="my-px">
                        <a href="#"
                           class="flex flex-row items-center h-12 px-4 rounded-lg text-gray-600 hover:bg-gray-100">
                            <span class="flex items-center justify-center text-lg text-gray-400">
                                <svg fill="none"
                                     stroke-linecap="round"
                                     stroke-linejoin="round"
                                     stroke-width="2"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor"
                                     class="h-6 w-6">
                                    <path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </span>
                            <span class="ml-3">Clients</span>
                            <span class="flex items-center justify-center text-sm text-gray-500 font-semibold bg-gray-200 h-6 px-2 rounded-full ml-auto">1k</span>
                        </a>
                    </li>
                    <li class="my-px">
                        <a href="#"
                           class="flex flex-row items-center h-12 px-4 rounded-lg text-gray-600 hover:bg-gray-100">
                            <span class="flex items-center justify-center text-lg text-green-400">
                                <svg fill="none"
                                     stroke-linecap="round"
                                     stroke-linejoin="round"
                                     stroke-width="2"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor"
                                     class="h-6 w-6">
                                    <path d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </span>
                            <span class="ml-3">Add new</span>
                        </a>
                    </li>
                    <li class="my-px">
                        <span class="flex font-medium text-sm text-gray-400 px-4 my-4 uppercase">Account</span>
                    </li>
                    <li class="my-px">
                        <a href="#"
                           class="flex flex-row items-center h-12 px-4 rounded-lg text-gray-600 hover:bg-gray-100">
                            <span class="flex items-center justify-center text-lg text-gray-400">
                                <svg fill="none"
                                     stroke-linecap="round"
                                     stroke-linejoin="round"
                                     stroke-width="2"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor"
                                     class="h-6 w-6">
                                    <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </span>
                            <span class="ml-3">Profile</span>
                        </a>
                    </li>
                    <li class="my-px">
                        <a href="#"
                           class="flex flex-row items-center h-12 px-4 rounded-lg text-gray-600 hover:bg-gray-100">
                            <span class="flex items-center justify-center text-lg text-gray-400">
                                <svg fill="none"
                                     stroke-linecap="round"
                                     stroke-linejoin="round"
                                     stroke-width="2"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor"
                                     class="h-6 w-6">
                                    <path d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                                </svg>
                            </span>
                            <span class="ml-3">Notifications</span>
                            <span class="flex items-center justify-center text-sm text-gray-500 font-semibold bg-gray-200 h-6 px-2 rounded-full ml-auto">10</span>
                        </a>
                    </li>
                    <li class="my-px">
                        <a href="#"
                           class="flex flex-row items-center h-12 px-4 rounded-lg text-gray-600 hover:bg-gray-100">
                            <span class="flex items-center justify-center text-lg text-gray-400">
                                <svg fill="none"
                                     stroke-linecap="round"
                                     stroke-linejoin="round"
                                     stroke-width="2"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor"
                                     class="h-6 w-6">
                                    <path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                    <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </span>
                            <span class="ml-3">Settings</span>
                        </a>
                    </li>
                    <li class="my-px">
                        <a href="#"
                           class="flex flex-row items-center h-12 px-4 rounded-lg text-gray-600 hover:bg-gray-100">
                            <span class="flex items-center justify-center text-lg text-red-400">
                                <svg fill="none"
                                     stroke-linecap="round"
                                     stroke-linejoin="round"
                                     stroke-width="2"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor"
                                     class="h-6 w-6">
                                    <path d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z"></path>
                                </svg>
                            </span>
                            <span class="ml-3">Logout</span>
                        </a>
                    </li>
                </ul>
            </div>

    <div class="container">
        @yield('content')
    </div>

</main>

</body>
</html>
