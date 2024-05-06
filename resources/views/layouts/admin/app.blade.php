<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<base href="../../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.ico')}}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Finate - Job Portal Website Template Using Bootstrap 5"/>
    <meta name="keywords" content="accessories, digital products, electronic html, modern, products, responsive"/>
    <meta name="author" content="hastech"/>

    <title>AuthenticPlacement</title>
    <link rel="stylesheet" href="{{asset('admin/assets/assets/css/dashlite.css')}}">
    <link id="skin-default" rel="stylesheet" href="{{asset('admin/assets/assets/css/theme.css')}}">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="nk-body bg-white has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
       
        <main class="py-4">
            @yield('content')
        </main>
        
    </div>
    </div>



    <script src="{{asset('admin/assets/assets/js/bundle.js')}}"></script>
    <script src="{{asset('admin/assets/assets/js/scripts.js')}}"></script>
    <script src="{{asset('admin/assets/assets/js/charts/gd-default.js')}}"></script>
</body>
</html>
