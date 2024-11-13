<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite([
                'resources/css/root.css',
                'resources/css/reset.css',
                'resources/css/app.css',
                'resources/css/public.css',
                'resources/js/app.js'
            ])
        @else
            <style>
            </style>
        @endif
    </head>
    <body class="">
        <div class="">
            <header class="flex">

                <div class="title">

                    <h2>nom du site</h2>

                </div>

                <nav class="main-nav nav">

                    <ul class="flex">
                        <li><a href="/">home</a></li>
                        <li><a href="/about">about</a></li>
                        <li><a href="/galeries">galeries</a></li>
                        <li><a href="/tools">tools</a></li>
                    </ul>
                </nav>

                <nav class="nav">
                    <ul>
            
            @if (Route::has('login'))
                @auth
                        @if (auth()->user()->role_id == 1)

                                <li><a href="/dashboard/admin" class="">Dashboard</a></li>

                        @endif

                        @if (auth()->user()->role_id == 2)

                            <li><a href="/dashboard/editor" class="">Dashboard</a></li>

                        @endif
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button class="" href="{{ route('logout') }}">
                                        logout
                                    </button>
                                </form>
                            </li>
            @else

                <li><a href="{{ route('login') }}" class="">Log in</a></li>
            
                    @if (Route::has('register'))

                        <li><a href="{{ route('register') }}" class="">Register</a></li>

                    @endif

                @endauth
            @endif
                    </ul>
                </nav>
            </header>

            <main class="center">
                @yield('content')
            </main>

            <footer class="">

                <p>Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</p>

            </footer>
        </div>
    </body>
</html>
