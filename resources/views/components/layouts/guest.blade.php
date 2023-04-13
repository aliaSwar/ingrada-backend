<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible"
        content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport"
        content="width=device-width, initial-scale=1">
    <meta name="description"
        content="">
    <meta name="author"
        content="">
    <!-- Favicon icon -->
    <link rel="icon"
        type="image/png"
        sizes="16x16"
        href="{{ asset( 'assets/images/favicon.jpg') }}">
    <title>{{ config('app.name', 'Engrada Creative') }}</title>
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css"
        rel="stylesheet">

    {{ $styles ?? '' }}
    <link href="{{ asset( 'assets/auth/login.css')  }}"
        rel="stylesheet">
</head>

<body>


    <!--
                    Page Content
                -->

    {{ $slot }}

    {{ $scripts ?? '' }}



    <script src="assets/libs/jquery/dist/jquery.min.js "></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js "></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js "></script>

</body>

</html>