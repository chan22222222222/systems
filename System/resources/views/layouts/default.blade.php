@php
    $path = Request::path();
@endphp


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gamacare Health Portal</title>
        <!-- styles and scripts-->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        @endif
    </head>

    <body>
        <header class="navbar navbar-expand-lg sticky-top shadow bg-body-tertiary">
            <nav class="container px-3">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('logo.png') }}" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
                </a>
                <span class="navbar-brand d-none d-sm-block">
                    Gamacare Health Center
                </span>
                <span class="navbar-text d-flex align-items-center">
                    @switch($path)
                        @case('/')
                            Home
                            @break
                        @case('services')
                            Services
                            @break
                        @case('about')
                            About Us
                            @break
                        @case('contact')
                            Contact Us
                            @break
                        @case('appointments')
                            Appointments
                            @break
                    @endswitch
                </span>
        
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav nav-underline ms-auto">
                        <li class="nav-item">
                            <a class="nav-link @if ($path == '/') active @endif" aria-current="page" href="./">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if ($path == 'services') active @endif" href="./services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if ($path == 'about') active @endif" href="./about">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if ($path == 'contact') active @endif" href="./contact">Contact Us</a>
                        </li>

                        @if(!($path == "/" || $path == "appointments"))
                        <li class="nav-item d-flex align-items-center">
                            <a href="{{ url('/appointments') }}" class="text-decoration-none"><button class="btn btn-primary btn-sm">Book Appointment</button></a>
                        </li>
                        @endif
                        
                    </ul>
                </div>
            </nav>
        </header>

        <main class="bg-body-tertiary">
            @yield('content')
        </main>
        
        <footer class= "bg-body-secondary" id="footer">
            <div class="container-fluid p-3 text-center small text-muted text-decoration-none">
                &copy; 2025 Isorena, C. - <a href="#footer">Privacy</a> - <a href="#footer">Terms</a> - <a href="#footer">Sitemap</a>
            </div>
        </footer>
    </body>
</html>