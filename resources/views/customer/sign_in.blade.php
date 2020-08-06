<html lang="en"><head>
    <base href="{{asset('')}}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>OneUI - Bootstrap 4 Admin Template &amp; UI Framework</title>

    <meta name="description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="OneUI">
    <meta property="og:description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="public/assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="public/assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="public/assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Fonts and OneUI framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
    <link rel="stylesheet" id="css-main" href="public/assets/css/oneui.min.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="public/assets/css/themes/amethyst.min.css"> -->
    <!-- END Stylesheets -->
</head>
<body>
    <div id="page-container" class="side-trans-enabled">

        <!-- Main Container -->
        <main id="main-container">
            <!-- Page Content -->
            <div class="bg-image" style="background-image: url('public/assets/media/photos/photo6@2x.jpg');">
                <div class="hero-static bg-white-95">
                    <div class="content">
                        <div class="row justify-content-center">
                            <div class="col-md-8 col-lg-6 col-xl-4">
                                <!-- Sign In Block -->
                                <div class="block block-themed block-fx-shadow mb-0">
                                    <div class="block-header">
                                        <h3 class="block-title">Sign In</h3>
                                        <div class="block-options">
                                            <a class="btn-block-option font-size-sm" href="op_auth_reminder.html">Forgot Password?</a>
                                            <a class="btn-block-option js-tooltip-enabled" href="op_auth_signup.html" data-toggle="tooltip" data-placement="left" title="" data-original-title="New Account">
                                                <i class="fa fa-user-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="block-content">
                                        <div class="p-sm-3 px-lg-4 py-lg-5">
                                            <h1 class="mb-2">
                                            @if (Session('message'))
                                                {{Session::get('message')}}
                                               {{Session::put('message',null)}} 
                                            @endif
                                            </h1>
                                            <p>Welcome, please login.</p>

                                            <!-- Sign In Form -->
                                            <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _es6/pages/op_auth_signin.js) -->
                                            <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                            <form class="js-validation-signin" action="sign-in" method="POST" novalidate="novalidate">
                                                {{ csrf_field() }}
                                                <div class="py-3">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control form-control-alt form-control-lg" id="login-username" name="username" placeholder="Username">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="password" class="form-control form-control-alt form-control-lg" id="login-password" name="password" placeholder="Password">
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="login-remember" name="login-remember">
                                                            <label class="custom-control-label font-w400" for="login-remember">Remember Me</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-6 col-xl-5">
                                                        <button type="submit" class="btn btn-block btn-primary">
                                                            <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Sign In
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- END Sign In Form -->
                                        </div>
                                    </div>
                                </div>
                                <!-- END Sign In Block -->
                            </div>
                        </div>
                    </div>
                    <div class="content content-full font-size-sm text-muted text-center">
                        <strong>OneUI 4.6</strong> © <span data-toggle="year-copy" class="js-year-copy-enabled">2020</span>
                    </div>
                </div>
            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->
    </div>
    <!-- END Page Container -->

  
    <script src="public/assets/js/oneui.core.min.js"></script>

    <!--
        OneUI JS

        Custom functionality including Blocks/Layout API as well as other vital and optional helpers
        webpack is putting everything together at public/assets/_es6/main/app.js
    -->
    <script src="public/assets/js/oneui.app.min.js"></script>

    <!-- Page JS Plugins -->
    <script src="public/assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

    <!-- Page JS Code -->
    <script src="public/assets/js/pages/op_auth_signin.min.js"></script>


</body></html>