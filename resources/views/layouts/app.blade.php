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
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <link href="{{ asset('css/review.css') }}" rel="stylesheet">
    <link href="{{ asset('css/show.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hamburger.css') }}" rel="stylesheet">
</head>
<body>
<header class="header">
    <nav class="navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img class='navbar-logo' src="{{ asset('images/logo.png') }}">
                {{ config('app.name') }}
            </a>
            <div class="navbar-menu">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{ route('create') }}" class='nav-link'>
                            <i class="fas fa-edit"></i>
                            <div class="nav-text">Review</div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class='nav-link'>
                            <i class="fas fa-music"></i>
                            <div class="nav-text">Stock</div>
                        </a>
                    </li>
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">
                                <i class="fas fa-door-open"></i>
                                {{ __('Login') }}
                            </a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">
                                    <i class="fas fa-user-plus"></i>
                                    {{ __('Register') }}
                                </a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item">
                            <a a href="/" class="nav-link">
                                <i class="fas fa-user"></i>
                                <div class="nav-text">User</div>
                            </a>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    <i class="fas fa-door-closed"></i>
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
                <div class="global-nav">
                    <ul class="global-nav_list">
                        <li class="global-nav_item"><a href="{{ route('create') }}">Review</a></li>
                        <li class="global-nav_item"><a href="/">Stock</a></li>
                        @guest
                        <li class="global-nav_item"><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        @if (Route::has('register'))
                        <li class="global-nav_item"><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @endif
                        @else
                        <li class="global-nav_item"><a href="/">User</a></li>
                        <li class="global-nav_item"><a href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a></li>
                        @endguest
                    </ul>
                </div>
                <div class="hamburger" id="js-hamburger">
                    <span class="hamburger_line1"></span>
                    <span class="hamburger_line2"></span>
                    <span class="hamburger_line3"></span>
                </div>
                <div class="black-bg" id="js-black-bg"></div>
            </div>
        </div>
    </nav>
</header>
<main class="main">
@if (session('flash_message'))
        <div class="flash_message">
            {{ session('flash_message') }}
        </div>
@endif
    @yield('content')
</main>
<footer class='footer'>
<div class='copyright'>StockSound 2020 copyright</div>
</footer>
<script src="{{ asset('js/hamburger.js') }}"></script>
</body>
</html>