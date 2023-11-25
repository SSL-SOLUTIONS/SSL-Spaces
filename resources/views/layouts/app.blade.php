<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
    <title>SSL Spaces-space you need</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        .login-button {
            background-color: #2ca8dd;
            padding: 8px 15px;
            border: 1px solid #2ca8dd;
            border-radius: 5px;
            color: #fff;
            transition: 0.3s;
        }

        .login-button:hover {
            background-color: #1b3d6d;
        }
    </style>
</head>

<body style="background-color: #2ca8dd;">
    <div id="app">
        <!-- <nav>
            <input id="nav-toggle" type="checkbox">
            <div class="logo">
                <a href="{{route('index')}}" class="logo-nav">
                    <img src="{{asset('images/SSL logo-01.png')}}" style="height: 60px;" alt="">
                </a>
            </div>
            <ul class="links">
                <li>
                    <a href="{{route('features')}}" class="links-nav" active>
                        Features
                    </a>
                </li>
                <li class="dropdown">
                    <a href="{{route('lern&grow')}}" class="links-nav">
                        Learn & Grow
                    </a>
                </li>
                <li>
                    <a href="{{route('gallery')}}" class="links-nav">
                        Gallery
                    </a>
                </li>
                <li>
                    <a href="{{route('blog')}}" class="links-nav">
                        Blog
                    </a>
                </li>
                <li>
                    <a href="{{route('pricing')}}" class="links-nav">
                        Pricing
                    </a>
                </li>
                <li>
                    <a href="{{route('partners')}}" class="links-nav">
                        Partners
                    </a>
                </li>
                <li>
                    <a href="{{route('register')}}" class="links-nav-login">
                        Register
                    </a>
                </li>
            </ul>
            <label for="nav-toggle" class="icon-burger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </label>
        </nav> -->

        <main class="py-5" style="margin-top: 100px;">
            @yield('content')
        </main>
    </div>
</body>

</html>