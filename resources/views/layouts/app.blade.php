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
            <span class="ml-3 text-xl">Label</span>
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

<main class="p-4 m-5">

    @yield('content')

</div>
</main>

</body>
</html>
