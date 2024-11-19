<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>starter kit</title>

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite([
                'resources/css/root.css',
                'resources/css/reset.css',
                'resources/css/app.css',
                'resources/css/dashboard.css',
                'resources/js/app.js'
            ])
        @else
            <style>
            </style>
        @endif
    </head>
    <body class="">
        <main class="container">
            <div class="board flex">
                <header>
                    <div class="main-header flex">
                        <nav class="main-nav nav">
                            <ul class="flex">
                                @if (auth()->user()->roles->contains('name', 'admin'))
                                <li><a href="/dashboard/admin" class="">Dashboard Admin</a></li>
                            @endif
                            
                            @if (auth()->user()->roles->contains('name', 'editor'))
                                <li><a href="/dashboard/editor" class="">Dashboard Editor</a></li>
                            @endif
        
                                <li><a href="/dashboard/posts">articles</a></li>
                            </ul>
                        </nav>
                        <nav class="profil">   
                            <ul>
                        @if (Route::has('login'))
                            @auth
                                <li><a href="/" class="">website</a></li>
        
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
                    </div>
                </header>
                @yield('content')         
                <footer>
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </footer>
            </div>
            <aside class="side-nav">
                <div class="branding">
                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="file" class="svg-inline--fa fa-file fa-w-12" role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512">
                        <path d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z"></path>
                    </svg>
                </div>
                <div class="wrapper">
                    <div>
                        <div class="nav-bloc">
                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="file" class="svg-inline--fa fa-file fa-w-12" role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512">
                                <path d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z"></path>
                            </svg>
                            <div class="sub-nav">
                                <h2>Accueil</h2>
                                <ul>
                                    <li>
                                        <a>Link</a>
                                    </li>
                                    <li>
                                        <a>Link</a>
                                    </li>
                                    <li>
                                        <a>Link</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="nav-bloc">
                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="file" class="svg-inline--fa fa-file fa-w-12" role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512">
                                <path d="M48 48a48 48 0 1 0 48 48 48 48 0 0 0-48-48zm0 160a48 48 0 1 0 48 48 48 48 0 0 0-48-48zm0 160a48 48 0 1 0 48 48 48 48 0 0 0-48-48zm448 16H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zm0-320H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16V80a16 16 0 0 0-16-16zm0 160H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16z"></path>
                            </svg>
                            <div class="sub-nav">
                                <h2>categories</h2>
                                <ul>
                                    <li>
                                        <a>liste</a>
                                    </li>
                                    <li>
                                        <a>ajouter</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="nav-bloc">
                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="file" class="svg-inline--fa fa-file fa-w-12" role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 384 512">
                                <path d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm64 236c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12v8zm0-64c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12v8zm0-72v8c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12zm96-114.1v6.1H256V0h6.1c6.4 0 12.5 2.5 17 7l97.9 98c4.5 4.5 7 10.6 7 16.9z"></path>
                            </svg>
                            <div class="sub-nav">
                                <h2>articles</h2>
                                <ul>
                                    <li>
                                        <a>liste</a>
                                    </li>
                                    <li>
                                        <a>ajouter</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </main>
    </body>
</html>
