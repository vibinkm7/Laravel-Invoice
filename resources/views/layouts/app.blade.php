<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->


    <!-- plugins:css -->
     <!--<link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.2.96/css/materialdesignicons.min.css">
     <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
     <!-- End plugin css for this page -->
     <!-- inject:css -->
     <link rel="stylesheet" href="{{ asset('css/vertical-layout-light/style.css') }}">
    <!-- endinject -->
     <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">

</head>
<body>
  <div class="container-scroller">
   @include('layouts.header')
   @include('layouts.sidebar')
   @yield('content')
   @include('layouts.footer')
    
  </div>
</body>
</html>
