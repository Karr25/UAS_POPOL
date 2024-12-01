<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/assets/admin/sb_admin/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - {{ $title }}</title>
    <link rel="icon" href="/assets/user/img/icon_logo.png">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    {{-- Custom CSS --}}
    <link href="css/sb-admin.css" rel="stylesheet">

    {{-- Custom Fonts --}}
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/7aa6d504e7.js" crossorigin="anonymous"></script>

    @livewireStyles
    {{-- CSS Blade --}}
    @yield('styles')
</head>

<body>
    <div id="wrapper">
        @include('partials.navbar-admin')

        <div id="page-wrapper">
            @yield('content')
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/bootstrap.min.js"></script>

    @livewireScripts

    @yield('scripts')
    <!-- Bootstrap Core JavaScript -->
</body>
</html>