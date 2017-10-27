<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="{{ setting('site.meta_keywords') }}"/>
    <meta name="description" content="{{ setting('site.meta_description') }}"/>
    <meta name="robots" content="{{ setting('site.robots') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ setting('site.title') }}</title>
    <link rel="canonical" href="{{ config('app.url') }}" />

    <link type="text/plain" rel="author" href="{{ url('/humans.txt') }}" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<section class="hero is-info is-fullheight">
    <div class="hero-head">
        <nav class="navbar">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="../">
                        <img src="//bulma.io/images/bulma-type-white.png" alt="Logo">
                    </a>
                    <span class="navbar-burger burger" data-target="navbarMenu">
              <span></span>
              <span></span>
              <span></span>
            </span>
                </div>
                <div id="navbarMenu" class="navbar-menu">
                    <div class="navbar-end">
                        <a href="{{ route('home') }}"  class="navbar-item @if (Route::currentRouteName() == 'home') is-active @endif">
                            @lang('Home')
                        </a>
                        <a href="{{ route('page', 'about') }}" class="navbar-item @if (Route::currentRouteName() == 'page') is-active @endif">
                            @lang('About')
                        </a>
                        <span class="navbar-item">
                <a class="button is-white is-outlined is-small" href="https://github.com/johnnymast/opensource.dev/tree/master">
                  <span class="icon">
                    <i class="fa fa-github"></i>
                  </span>
                  <span>Github</span>
                </a>
              </span>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <div class="hero-body">
        <div class="container has-text-centered">
            @yield('content')
        </div>
    </div>

</section>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>