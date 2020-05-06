<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/utility.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sign_up.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sign_in.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
</head>
<body>
    <header class="header mb20">
        <nav class="navbar">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class='navbar-logo' src="{{ asset('images/logo.png') }}">
                    {{ config('app.name') }}
                </a>
                <div class="navbar-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                             <a href="{{ route('create') }}" class='nav-link'>レビューを書く</a>
                        </li>
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="main">
    @if (session('flash_message'))
            <div class="flash_message mb30">
                {{ session('flash_message') }}
            </div>
    @endif
        @yield('content')
    </main>

    <footer class='footer'>
      <div class='copyright'>StockSound 2020 copyright</div>
    </footer>
</body>
</html>