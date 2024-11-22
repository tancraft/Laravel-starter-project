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
                        <div>
                            des infos utiles a l utilisateur
                        </div>
                        <nav class="profil">   
                            <ul>
                        @if (Route::has('login'))
                            @auth
                                <li><a href="{{ route('home') }}" class="">
                                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="file" role="img" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="rgb(18, 24, 24)">
                                        <path d="M480-80q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-83 31.5-155.5t86-127Q252-817 325-848.5T480-880q83 0 155.5 31.5t127 86q54.5 54.5 86 127T880-480q0 82-31.5 155t-86 127.5q-54.5 54.5-127 86T480-80Zm0-82q26-36 45-75t31-83H404q12 44 31 83t45 75Zm-104-16q-18-33-31.5-68.5T322-320H204q29 50 72.5 87t99.5 55Zm208 0q56-18 99.5-55t72.5-87H638q-9 38-22.5 73.5T584-178ZM170-400h136q-3-20-4.5-39.5T300-480q0-21 1.5-40.5T306-560H170q-5 20-7.5 39.5T160-480q0 21 2.5 40.5T170-400Zm216 0h188q3-20 4.5-39.5T580-480q0-21-1.5-40.5T574-560H386q-3 20-4.5 39.5T380-480q0 21 1.5 40.5T386-400Zm268 0h136q5-20 7.5-39.5T800-480q0-21-2.5-40.5T790-560H654q3 20 4.5 39.5T660-480q0 21-1.5 40.5T654-400Zm-16-240h118q-29-50-72.5-87T584-782q18 33 31.5 68.5T638-640Zm-234 0h152q-12-44-31-83t-45-75q-26 36-45 75t-31 83Zm-200 0h118q9-38 22.5-73.5T376-782q-56 18-99.5 55T204-640Z"/>
                                    </svg>
                                </a>
                            </li>
        
                                <li>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button class="no-line">
                                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="file" role="img" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="rgb(18, 24, 24)">
                                                <path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z"/>
                                            </svg>
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
                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="file" role="img" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                                <path d="M240-200h120v-240h240v240h120v-360L480-740 240-560v360Zm-80 80v-480l320-240 320 240v480H520v-240h-80v240H160Zm320-350Z"/>
                            </svg>
                            <div class="sub-nav">
                                <h2>Accueil</h2>
                                <ul>
                                    <li>
                                        <li><a href="{{ route('dashboard') }}" class="">Dashboard</a></li>
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

                        @if (auth()->user()->roles->contains('name', 'admin'))
                        <div class="nav-bloc">
                            <a href="{{ route('users.index') }}" class="">
                                <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="file" role="img" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                                    <path d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z"/>
                                </svg>
                            </a>
                            <div class="sub-nav">
                                <h2>Utilisateurs</h2>
                                <ul>
                                    <li>
                                        <li><a href="{{ route('users.index') }}" class="">Tous</a></li>
                                    </li>
                                    <li>
                                        <a>ajouter</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        @endif

                        @if (auth()->user()->roles->contains('name', 'editor'))

                        <div class="nav-bloc">
                            <a href="{{ route('posts.index') }}">
                                <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="file" role="img" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                                    <path d="M320-240h320v-80H320v80Zm0-160h320v-80H320v80ZM240-80q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h320l240 240v480q0 33-23.5 56.5T720-80H240Zm280-520v-200H240v640h480v-440H520ZM240-800v200-200 640-640Z"/>
                                </svg>
                            </a>
                            <div class="sub-nav">
                                <h2>articles</h2>
                                <ul>
                                    <li>
                                        <li><a href="{{ route('posts.index') }}">tous</a></li>
                                    </li>
                                    <li>
                                        <a>ajouter</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="nav-bloc">
                            <a href="{{ route('categories.index') }}"><svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="file" role="img" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                                <path d="M360-200v-80h480v80H360Zm0-240v-80h480v80H360Zm0-240v-80h480v80H360ZM200-160q-33 0-56.5-23.5T120-240q0-33 23.5-56.5T200-320q33 0 56.5 23.5T280-240q0 33-23.5 56.5T200-160Zm0-240q-33 0-56.5-23.5T120-480q0-33 23.5-56.5T200-560q33 0 56.5 23.5T280-480q0 33-23.5 56.5T200-400Zm0-240q-33 0-56.5-23.5T120-720q0-33 23.5-56.5T200-800q33 0 56.5 23.5T280-720q0 33-23.5 56.5T200-640Z"/>
                            </svg></a><
                            <div class="sub-nav">
                                <h2>categories</h2>
                                <ul>
                                    <li>
                                        <li><a href="{{ route('categories.index') }}">tous</a></li>
                                    </li>
                                    <li>
                                        <a>ajouter</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="nav-bloc">
                            <a href="{{ route('tags.index') }}">
                                <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="file" role="img" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                                    <path d="M856-390 570-104q-12 12-27 18t-30 6q-15 0-30-6t-27-18L103-457q-11-11-17-25.5T80-513v-287q0-33 23.5-56.5T160-880h287q16 0 31 6.5t26 17.5l352 353q12 12 17.5 27t5.5 30q0 15-5.5 29.5T856-390ZM513-160l286-286-353-354H160v286l353 354ZM260-640q25 0 42.5-17.5T320-700q0-25-17.5-42.5T260-760q-25 0-42.5 17.5T200-700q0 25 17.5 42.5T260-640Zm220 160Z"/>
                                </svg>
                            </a>
                            <div class="sub-nav">
                                <h2>tags</h2>
                                <ul>
                                    <li>
                                        <li><a href="{{ route('tags.index') }}">tous</a></li>
                                    </li>
                                    <li>
                                        <a>ajouter</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </aside>
        </main>
    </body>
</html>
