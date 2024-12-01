<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Aplikasi-Antri">
    <meta name="author" content="Kelompok-3">

    <title>Klinik 1/2 Sehat</title>
    <link rel="icon" href="/assets/user/img/icon_logo.png">

    <!-- Custom fonts for this theme -->
    <link href="/assets/user/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="/assets/user/css/freelancer.min.css" rel="stylesheet">
    <link href="/assets/user/lib/noty.css" rel="stylesheet">
    <link href="/assets/user/lib/themes/metroui.css" rel="stylesheet">

    <link rel="stylesheet" href="/assets/user/css/style.css">

    @livewireStyles
    {{-- Blade Styles --}}
    @yield('styles')
</head>

<body id="page-top">
    {{-- Navbar --}}
    @auth('web')
        @include('partials.navbar-login')
    @else
        @include('partials.navbar')
    @endauth

    {{-- Content --}}
    @yield('content')

    {{-- Footer --}}
    @include('partials.footer')

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
        <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
            <i class="fa fa-chevron-up pt-3"></i>
        </a>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="/assets/user/vendor/jquery/jquery.min.js"></script>
    <script src="/assets/user/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="/assets/user/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="/assets/user/js/jqBootstrapValidation.js"></script>
    <script src="/assets/user/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="/assets/user/js/freelancer.min.js"></script>
    <script src="/assets/user/lib/noty.min.js"></script>
    
    @livewireScripts

    {{-- Blade Scripts --}}
    @yield('scripts')
</body>
</html>
