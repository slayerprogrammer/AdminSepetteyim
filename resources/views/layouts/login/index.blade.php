<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sepetteyim') }}</title>

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
    <link rel="shortcut icon" href="{{asset("assets/backend/images/favicon.png")}}">
</head>
<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
            <div class="row flex-grow">
                @yield('content')
                <div class="col-lg-6 login-half-bg d-flex flex-row">
                    <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2019  sepetteyim.com Tüm Hakları Saklıdır.</p>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>

</div>

<!-- plugins:js -->
<script src="{{asset("assets/backend/vendors/js/vendor.bundle.base.js")}}"></script>
<script src="{{asset("assets/backend/vendors/js/vendor.bundle.addons.js")}}"></script>
<!-- endinject -->
<!-- inject:js -->
<script src="{{asset("assets/backend/js/off-canvas.js")}}"></script>
<script src="{{asset("assets/backend/js/hoverable-collapse.js")}}"></script>
<script src="{{asset("assets/backend/js/template.js")}}"></script>
<script src="{{asset("assets/backend/js/settings.js")}}"></script>
<script src="{{asset("assets/backend/js/todolist.js")}}"></script>
</body>
</html>
