<!DOCTYPE html>
<html dir="{{ str_replace('_', '-', app()->getLocale()) }}"
     lang="{{ App::getLocale() == 'ar' ? 'rtl':'ltr' }}">

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
          href="{{ asset('assets/images/favicon.jpg') }}">
     <link rel="icon"
          type="image/x-icon"
          href="{{ asset('assets/images/favicon.jpg') }}" />
     <title>{{ config('app.name') }}</title>
     @vite('resources/css/style.css')

     <link rel="stylesheet"
          href="{{ asset('dist/css/orders.css') }}">
</head>

<body>

     <!-- ============================================================== -->
     <!-- Main wrapper - style you can find in pages.scss -->
     <!-- ============================================================== -->
     <div id="main-wrapper"
          data-theme="light"
          data-layout="vertical"
          data-navbarbg="skin6"
          data-sidebartype="full"
          data-sidebar-position="fixed"
          data-header-position="fixed"
          data-boxed-layout="full">

          <x-nav-bar />
          <x-side-bar />
          <!-- Page wrapper  -->
          <!-- ============================================================== -->
          <div class="page-wrapper">
               <x-hero />
               {{ $slot }}
          </div>

</body>

</html>