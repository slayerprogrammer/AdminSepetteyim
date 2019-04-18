<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sepetteyim Grup Bilişim') }} - @yield('title')</title>
    <meta name="keywords" content="{{isset ($settings->keyword) ? $settings->keyword : ''}}">
    <meta name="description" content="{{isset ($settings->description) ? $settings->description : ''}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="yandex-verification" content="8deb8c863cc1e13b" />

    <meta property="og:url" content="/about" />
    <meta property="og:title" content="Güven Kuyumculuk Mücevherat || Güveniniz Altından Kıymetlidir" />
    <meta property="og:description" content="{{isset ($settings->description) ? $settings->description : ''}}" />
    <meta property="og:image" content="/storage/{{$settings->logo}}" />

    <meta name="classification" content="{{isset ($settings->description) ? $settings->description : ''}}">
    <meta name="distribution" content="Global">
    <meta name="rating" content="All">
    <meta name="revisit-after" content="7 days">
    <meta http-equiv="reply-to" content="{{isset ($settings->mail) ? $settings->mail : ''}}">
    <meta http-equiv="window-target" content="_top">
    <meta property="og:type" content="{{isset ($settings->description) ? $settings->description : ''}}" />
    <meta property="og:url" content="/about" />
    <meta property="og:title" content="{{isset ($settings->keyword) ? $settings->keyword : ''}}" />
    <meta property="og:description" content="{{isset ($settings->description) ? $settings->description : ''}}" />
    <link rel="canonical" href="/about" />
    <link rel="sitemap" type="application/xml" title="Sitemap" href="/sitemap.xml" />
    <link rel="sitemap" type="application/xml" title="Sitemap" href="/sitemap.xml" />
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700' rel='stylesheet' type='text/css'>

    <!-- all css here -->
    <!-- style css -->
    <link rel="stylesheet" href="{{asset("assets/frontend/style.css")}}">
    <link rel="stylesheet" href="{{asset("assets/frontend/popup1.css")}}">
    <link rel="stylesheet" href="{{asset("assets/frontend/lib/css/nivo-slider.css")}}" type="text/css" />
    <!-- modernizr css -->
    <script src="{{asset("assets/frontend/js/vendor/modernizr-2.8.3.min.js")}}"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-126324095-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-126324095-3');
    </script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-9165412912611050",
            enable_page_level_ads: true
        });
    </script>
    @stack("customCss")

</head>
<body>
<!-- Add your site or application content here -->
<!--Header Area Start-->
@include('layouts.frontend.partial.header')
<!--Header Area End-->


@yield("content")


<!-- Footer Area Start -->
@include('layouts.frontend.partial.footer')
<!-- Footer Bottom End -->

<!-- jquery latest version -->
<script src="{{asset("assets/frontend/js/vendor/jquery-1.12.0.min.js")}}"></script>
<!-- bootstrap js -->
<script src="{{asset("assets/frontend/js/bootstrap.min.js")}}"></script>
<!-- owl.carousel js -->
<script src="{{asset("assets/frontend/js/owl.carousel.min.js")}}"></script>
<!-- jquery-ui js -->
<script src="{{asset("assets/frontend/js/jquery-ui.min.js")}}"></script>
<!-- jquery countdown js -->
<script src="{{asset("assets/frontend/js/jquery.countdown.min.js")}}"></script>
<!-- jquery countdown js -->
<script type="text/javascript" src="{{asset("assets/frontend/venobox/venobox.min.js")}}"></script>
<!-- jquery Meanmenu js -->
<script src="{{asset("assets/frontend/js/jquery.meanmenu.js")}}"></script>
<!-- wow js -->
<script src="{{asset("assets/frontend/js/wow.min.js")}}"></script>
<!-- scrollUp JS -->
<script src="{{asset("assets/frontend/js/jquery.scrollUp.min.js")}}"></script>
<!-- plugins js -->
<script src="{{asset("assets/frontend/js/plugins.js")}}"></script>
<script src="{{asset("assets/frontend/popup1.js")}}"></script>
<!-- Nivo slider js -->
<script src="{{asset("assets/frontend/lib/js/jquery.nivo.slider.js")}}" type="text/javascript"></script>
<script type="text/javascript">
    $(window).on('load', function() {
        $('#ensign-nivoslider-3').nivoSlider({
            pauseTime: 3000,
            pauseOnHover: true,
        });
    });
</script>
<!-- main js -->
<script src="{{asset("assets/frontend/js/main.js")}}"></script>
<script src="https://maps.googleapis.com/maps/api/js"></script>

@stack("customJs")
</body>
</html>
