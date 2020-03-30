<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Adomx - Responsive Bootstrap 4 Admin Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

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

    <!-- Content Body Start -->
    <div class="content-body m-0 p-0">

        <div class="login-register-wrap">
            <div class="row">

                <div class="d-flex align-self-center justify-content-center order-2 order-lg-1 col-lg-5 col-12">
                    <div class="login-register-form-wrap">

                        <div class="content">
                            <h1>Sign in</h1>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>

                        <div class="login-register-form">
                            <form method="POST" action="{{ route('login') }}">
                                <div class="row">
                                    <div class="col-12 mb-20">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-12 mb-20">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-12 mb-20">
                                        <label for="remember" class="adomx-checkbox-2">
                                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <i class="icon"></i>
                                            {{ __('Remember') }}
                                        </label>
                                    </div>
                                    <div class="col-12">
                                        <div class="row justify-content-between">
                                            <div class="col-auto mb-15"><a href="#">Forgot Password?</a></div>
                                            <div class="col-auto mb-15">Dont have account? <a href="register.html">Create Now.</a></div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-10"><button class="button button-primary button-outline">sign in</button></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="login-register-bg order-1 order-lg-2 col-lg-7 col-12">
                    <div class="content">
                        <h1>Sign in</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>

            </div>
        </div>

    </div><!-- Content Body End -->

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

</body>

</html>