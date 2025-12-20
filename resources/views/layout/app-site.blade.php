<!doctype html>
<html lang="en" data-layout="horizontal" data-topbar="light" data-sidebar="light" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="Mirnah Technology Systems" name="description" />
    <meta content="Mirnah" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | Akil Security & Alarm System</title>
    <link rel="shortcut icon" href="{{ asset('/assets/images/favicon.ico') }}" />

    @include('include.site.head')


</head>

<body class="preload-wrapper">

    <x-site.component.whatsapp-float />

    {{-- <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="{{ asset('site/images/loader.svg') }}" alt=""></div>
        </div>
    </div> --}}


    @include('include.site.header')

    @yield('content')

    @include('include.site.footer')

    @include('include.site.foot')



</body>

</html>
