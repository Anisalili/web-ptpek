<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>{{ config('app.name', 'Business') }}</title>

    <link rel="shortcut icon" href="{{ asset('Business-1.0.0/assets/images/favicon.svg') }}" type="image/svg" />
    <link rel="stylesheet" href="{{ asset('Business-1.0.0/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('Business-1.0.0/assets/css/lineicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('Business-1.0.0/assets/css/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('Business-1.0.0/assets/css/glightbox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('Business-1.0.0/style.css') }}" />
</head>
<body>
    @include('layouts.components.navbar')
    @include('layouts.components.sidebar')

    @yield('content')

    @include('layouts.components.footer')

    <a href="#" class="scroll-top btn-hover">
        <i class="lni lni-chevron-up"></i>
    </a>

    <script src="{{ asset('Business-1.0.0/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Business-1.0.0/assets/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('Business-1.0.0/assets/js/main.js') }}"></script>
    <script src="{{ asset('Business-1.0.0/assets/js/tiny-slider.js') }}"></script>

    <script>
        let navbarTogglerNine = document.querySelector(".navbar-nine .navbar-toggler");
        navbarTogglerNine.addEventListener("click", function () {
            navbarTogglerNine.classList.toggle("active");
        });

        let sidebarLeft = document.querySelector(".sidebar-left");
        let overlayLeft = document.querySelector(".overlay-left");
        let sidebarClose = document.querySelector(".sidebar-close .close");

        overlayLeft.addEventListener("click", function () {
            sidebarLeft.classList.toggle("open");
            overlayLeft.classList.toggle("open");
        });
        sidebarClose.addEventListener("click", function () {
            sidebarLeft.classList.remove("open");
            overlayLeft.classList.remove("open");
        });

        let sideMenuLeftNine = document.querySelector(".navbar-nine .menu-bar");
        sideMenuLeftNine.addEventListener("click", function () {
            sidebarLeft.classList.add("open");
            overlayLeft.classList.add("open");
        });

        GLightbox({
            'href': 'https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM',
            'type': 'video',
            'source': 'youtube',
            'width': 900,
            'autoplayVideos': true,
        });
    </script>

    @stack('scripts')
</body>
</html>
