<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Admin Panel') }} - @yield('title')</title>

    <!-- Scripts -->
    <link rel="stylesheet" href="{{asset("assets/backend/vendors/iconfonts/mdi/font/css/materialdesignicons.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/backend/vendors/css/vendor.bundle.base.css")}}">
    <link rel="stylesheet" href="{{asset("assets/backend/vendors/css/vendor.bundle.addons.css")}}">
    <!-- endinject -->
    <!-- plugin css for this page -->

    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset("assets/backend/css/vertical-layout-light/style.css")}}">
    <!-- endinject -->
    @stack("customCss")
    <link rel="shortcut icon" href="{{asset("assets/backend/images/favicon.png")}}">
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
@include('layouts.backend.partial.header')
<!-- partial -->
    <div class="container-fluid page-body-wrapper">

        <!-- menüler -->
    @include('layouts.backend.partial.left-sidebar')
    <!-- menüler -->

        <!-- CONTENT -->
    @yield('content')
    <!-- CONTENT ends -->

    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="{{asset("assets/backend/vendors/js/vendor.bundle.base.js")}}"></script>
    <script src="{{asset("assets/backend/vendors/js/vendor.bundle.addons.js")}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{asset("assets/backend/js/off-canvas.js")}}"></script>
    <script src="{{asset("assets/backend/js/hoverable-collapse.js")}}"></script>
    <script src="{{asset("assets/backend/js/template.js")}}"></script>
    <script src="{{asset("assets/backend/js/settings.js")}}"></script>
    <script src="{{asset("assets/backend/js/todolist.js")}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset("assets/backend/js/dashboard.js")}}"></script>
    <script src="{{asset("assets/backend/js/bt-maxLength.js")}}"></script>
<script src="{{asset("assets/backend/js/file-upload.js")}}"></script>

@stack('customJs')
<!-- End custom js for this page-->
</body>
</html>
