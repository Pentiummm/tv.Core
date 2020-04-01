<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{'Dashboard'}}</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/images/backend_images/favicon.png') }}">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('/css/backend_css/vendor/bootstrap.min.css') }}">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('/css/backend_css/vendor/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/backend_css/vendor/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/backend_css/vendor/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/backend_css/vendor/cryptocurrency-icons.css') }}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('/css/backend_css/plugins/plugins.css') }}">

    <!-- Helper CSS -->
    <link rel="stylesheet" href="{{ asset('/css/backend_css/helper.css') }}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('/css/backend_css/style.css') }}">

</head>

<body class="skin-dark">

<div class="main-wrapper">

    <!-- Header Section Start -->
    @include('layouts.adminLayout.admin_header')
    <!-- Header Section End -->

    <!-- Side Header Start -->
    @include('layouts.adminLayout.admin_sidebar')
    <!-- Side Header End -->

    <!-- Content Body Start -->
    @yield('content')
    <!-- Content Body End -->

    <!-- Footer Section Start -->
    @include('layouts.adminLayout.admin_footer')
    <!-- Footer Section End -->

</div>

<!-- JS
============================================ -->

<!-- Global Vendor, plugins & Activation JS -->
<script src="{{ asset('/js/backend_js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('/js/backend_js/vendor/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('/js/backend_js/vendor/popper.min.js') }}"></script>
<script src="{{ asset('/js/backend_js/vendor/bootstrap.min.js') }}"></script>
<!--Plugins JS-->
<script src="{{ asset('/js/backend_js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('/js/backend_js/plugins/tippy4.min.js.js') }}"></script>

<!--Main JS-->
<script src="{{ asset('/js/backend_js/main.js') }}"></script>

@yield('javascript')

</body>

</html>