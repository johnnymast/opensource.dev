<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @if (isset($page->meta_keywords))
        <meta name="keywords" content="{{ $page->meta_keywords }}"/>
    @else
        <meta name="keywords" content="{{ setting('site.meta_keywords') }}"/>
    @endif
    @if (isset($page->meta_description))
        <meta name="description" content="{{ $page->meta_description }}"/>
    @else
        <meta name="description" content="{{ setting('site.meta_description') }}"/>
    @endif
    <meta name="robots" content="{{ setting('site.robots') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ setting('site.title') }}@if (isset($page) == true) - {{$page->title}}@endif</title>
    <link rel="canonical" href="{{ config('app.url') }}" />

    <link type="text/plain" rel="author" href="{{ url('/humans.txt') }}" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    @if (setting('open-graph.locale'))
        <meta property="og:locale" content="{{setting('open-graph.locale')}}" />
    @endif
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ setting('site.title') }}@if (isset($page) == true) - {{$page->title}}@endif" />
    <meta property="og:url" content="{{ Request::url() }}" />
    <meta property="og:site_name" content="{{setting('site.title')}}" />
    @if (setting('open-graph.app_id'))<meta property="fb:app_id" content="{{setting('open-graph.app_id')}}" />@endif

    @if (setting('open-graph.image'))<meta property="og:image" content="{{asset(Voyager::image(setting('open-graph.image')))}}" />@endif


    @if (setting('site.google_analytics_tracking_id'))<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-109078007-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '{{setting('site.google_analytics_tracking_id')}}');
    </script>
    @endif
    @if (setting('site.hotjar_tracking_code))
        {{setting('site.hotjar_tracking_code)}}
    @endif
</head>
<body>
<section class="hero is-info is-fullheight">
    <div class="hero-head">
        <nav class="navbar">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="../">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo">
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
                        <a href="{{ route('contact') }}" class="navbar-item @if (Route::currentRouteName() == 'contact') is-active @endif">
                            @lang('Contact')
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