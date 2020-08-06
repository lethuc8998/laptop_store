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
    <link rel="stylesheet" href="public/assets/css/home.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="public/assets/css/themes/amethyst.min.css"> -->
    <!-- END Stylesheets -->
</head>
<body>
    <!-- Page Container -->
    <!--
        Available classes for #page-container:

    GENERIC

        'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())

    SIDEBAR & SIDE OVERLAY

        'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
        'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
        'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
        'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
        'sidebar-dark'                              Dark themed sidebar

        'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
        'side-overlay-o'                            Visible Side Overlay by default

        'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

        'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

    HEADER

        ''                                          Static Header if no class is added
        'page-header-fixed'                         Fixed Header

    HEADER STYLE

        ''                                          Light themed Header
        'page-header-dark'                          Dark themed Header

    MAIN CONTENT LAYOUT

        ''                                          Full width Main Content if no class is added
        'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
        'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
    -->
    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-boxed side-trans-enabled"><div id="page-overlay"></div>
        <!-- Side Overlay-->
        <aside id="side-overlay" class="font-size-sm" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px;">
            <!-- Side Header -->
            <div class="content-header border-bottom">
                <!-- User Avatar -->
                <a class="img-link mr-1" href="javascript:void(0)">
                    <img class="img-avatar img-avatar32" src="public/assets/media/avatars/avatar10.jpg" alt="">
                </a>
                <!-- END User Avatar -->

                <!-- User Info -->
                <div class="ml-2">
                    <a class="link-fx text-dark font-w600" href="javascript:void(0)">Adam McCoy</a>
                </div>
                <!-- END User Info -->

                <!-- Close Side Overlay -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <a class="ml-auto btn btn-sm btn-alt-danger" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">
                    <i class="fa fa-fw fa-times text-danger"></i>
                </a>
                <!-- END Close Side Overlay -->
            </div>
            <!-- END Side Header -->

            <!-- Side Content -->
            <div class="content-side">
                <!-- Side Overlay Tabs -->
                <div class="block block-transparent pull-x pull-t">
                    <ul class="nav nav-tabs nav-tabs-alt nav-justified js-tabs-enabled" data-toggle="tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#so-overview">
                                <i class="fa fa-fw fa-coffee text-gray mr-1"></i> Overview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#so-sales">
                                <i class="fa fa-fw fa-chart-line text-gray mr-1"></i> Sales
                            </a>
                        </li>
                    </ul>
                    <div class="block-content tab-content overflow-hidden">
                        <!-- Overview Tab -->
                        <div class="tab-pane pull-x fade fade-left show active" id="so-overview" role="tabpanel">
                            <!-- Activity -->
                            <div class="block">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">Recent Activity</h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"><i class="si si-arrow-up"></i></button>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <!-- Activity List -->
                                    <ul class="nav-items mb-0">
                                        <li>
                                            <a class="text-dark media py-2" href="javascript:void(0)">
                                                <div class="mr-3 ml-2">
                                                    <i class="si si-wallet text-success"></i>
                                                </div>
                                                <div class="media-body">
                                                    <div class="font-w600">New sale ($15)</div>
                                                    <div class="text-success">Admin Template</div>
                                                    <small class="text-muted">3 min ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-dark media py-2" href="javascript:void(0)">
                                                <div class="mr-3 ml-2">
                                                    <i class="si si-pencil text-info"></i>
                                                </div>
                                                <div class="media-body">
                                                    <div class="font-w600">You edited the file</div>
                                                    <div class="text-info">
                                                        <i class="fa fa-file-text"></i> Documentation.doc
                                                    </div>
                                                    <small class="text-muted">15 min ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-dark media py-2" href="javascript:void(0)">
                                                <div class="mr-3 ml-2">
                                                    <i class="si si-close text-danger"></i>
                                                </div>
                                                <div class="media-body">
                                                    <div class="font-w600">Project deleted</div>
                                                    <div class="text-danger">Line Icon Set</div>
                                                    <small class="text-muted">4 hours ago</small>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- END Activity List -->
                                </div>
                            </div>
                            <!-- END Activity -->

                            <!-- Online Friends -->
                            <div class="block">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">Online Friends</h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"><i class="si si-arrow-up"></i></button>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <!-- Users Navigation -->
                                    <ul class="nav-items mb-0">
                                        <li>
                                            <a class="media py-2" href="javascript:void(0)">
                                                <div class="mr-3 ml-2 overlay-container overlay-bottom">
                                                    <img class="img-avatar img-avatar48" src="public/assets/media/avatars/avatar8.jpg" alt="">
                                                    <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-success"></span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="font-w600">Sara Fields</div>
                                                    <div class="font-w400 text-muted">Copywriter</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="media py-2" href="javascript:void(0)">
                                                <div class="mr-3 ml-2 overlay-container overlay-bottom">
                                                    <img class="img-avatar img-avatar48" src="public/assets/media/avatars/avatar13.jpg" alt="">
                                                    <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-success"></span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="font-w600">Jose Parker</div>
                                                    <div class="font-w400 text-muted">Web Developer</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="media py-2" href="javascript:void(0)">
                                                <div class="mr-3 ml-2 overlay-container overlay-bottom">
                                                    <img class="img-avatar img-avatar48" src="public/assets/media/avatars/avatar8.jpg" alt="">
                                                    <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-success"></span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="font-w600">Melissa Rice</div>
                                                    <div class="font-w400 text-muted">Web Designer</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="media py-2" href="javascript:void(0)">
                                                <div class="mr-3 ml-2 overlay-container overlay-bottom">
                                                    <img class="img-avatar img-avatar48" src="public/assets/media/avatars/avatar8.jpg" alt="">
                                                    <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-warning"></span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="font-w600">Carol Ray</div>
                                                    <div class="font-w400 text-muted">Photographer</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="media py-2" href="javascript:void(0)">
                                                <div class="mr-3 ml-2 overlay-container overlay-bottom">
                                                    <img class="img-avatar img-avatar48" src="public/assets/media/avatars/avatar13.jpg" alt="">
                                                    <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-warning"></span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="font-w600">Ralph Murray</div>
                                                    <div class="font-w400 text-muted">Graphic Designer</div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- END Users Navigation -->
                                </div>
                            </div>
                            <!-- END Online Friends -->

                            <!-- Quick Settings -->
                            <div class="block mb-0">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">Quick Settings</h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"><i class="si si-arrow-up"></i></button>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <!-- Quick Settings Form -->
                                    <form action="be_pages_dashboard.html" method="POST" onsubmit="return false;">
                                        <div class="form-group">
                                            <p class="font-w600 mb-2">
                                                Online Status
                                            </p>
                                            <div class="custom-control custom-switch mb-1">
                                                <input type="checkbox" class="custom-control-input" id="so-settings-check1" name="so-settings-check1" checked="">
                                                <label class="custom-control-label" for="so-settings-check1">Show your status to all</label>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <p class="font-w600 mb-2">
                                                Auto Updates
                                            </p>
                                            <div class="custom-control custom-switch mb-1">
                                                <input type="checkbox" class="custom-control-input" id="so-settings-check2" name="so-settings-check2" checked="">
                                                <label class="custom-control-label" for="so-settings-check2">Keep up to date</label>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <p class="font-w600 mb-1">
                                                Application Alerts
                                            </p>
                                            <div class="custom-control custom-switch mb-1">
                                                <input type="checkbox" class="custom-control-input" id="so-settings-check3" name="so-settings-check3" checked="">
                                                <label class="custom-control-label" for="so-settings-check3">Email Notifications</label>
                                            </div>
                                            <div class="custom-control custom-switch mb-1">
                                                <input type="checkbox" class="custom-control-input" id="so-settings-check4" name="so-settings-check4" checked="">
                                                <label class="custom-control-label" for="so-settings-check4">SMS Notifications</label>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <p class="font-w600 mb-1">
                                                API
                                            </p>
                                            <div class="custom-control custom-switch mb-1">
                                                <input type="checkbox" class="custom-control-input" id="so-settings-check5" name="so-settings-check5" checked="">
                                                <label class="custom-control-label" for="so-settings-check5">Enable access</label>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- END Quick Settings Form -->
                                </div>
                            </div>
                            <!-- END Quick Settings -->
                        </div>
                        <!-- END Overview Tab -->

                        <!-- Sales Tab -->
                        <div class="tab-pane pull-x fade fade-right" id="so-sales" role="tabpanel">
                            <div class="block mb-0">
                                <!-- Stats -->
                                <div class="block-content">
                                    <div class="row items-push pull-t">
                                        <div class="col-6">
                                            <div class="font-w700 text-uppercase">Sales</div>
                                            <a class="link-fx font-size-h3 font-w300" href="javascript:void(0)">22.030</a>
                                        </div>
                                        <div class="col-6">
                                            <div class="font-w700 text-uppercase">Balance</div>
                                            <a class="link-fx font-size-h3 font-w300" href="javascript:void(0)">$4.589,00</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Stats -->

                                <!-- Today -->
                                <div class="block-content block-content-full block-content-sm bg-body-light">
                                    <div class="row">
                                        <div class="col-6">
                                            <span class="font-w600 text-uppercase">Today</span>
                                        </div>
                                        <div class="col-6 text-right">
                                            <span class="ext-muted">$996</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <ul class="nav-items push">
                                        <li>
                                            <a class="text-dark media py-2" href="javascript:void(0)">
                                                <div class="mr-3 ml-2">
                                                    <i class="fa fa-fw fa-circle text-success"></i>
                                                </div>
                                                <div class="media-body">
                                                    <div class="font-w600">New sale! + $249</div>
                                                    <small class="text-muted">3 min ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-dark media py-2" href="javascript:void(0)">
                                                <div class="mr-3 ml-2">
                                                    <i class="fa fa-fw fa-circle text-success"></i>
                                                </div>
                                                <div class="media-body">
                                                    <div class="font-w600">New sale! + $129</div>
                                                    <small class="text-muted">50 min ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-dark media py-2" href="javascript:void(0)">
                                                <div class="mr-3 ml-2">
                                                    <i class="fa fa-fw fa-circle text-success"></i>
                                                </div>
                                                <div class="media-body">
                                                    <div class="font-w600">New sale! + $119</div>
                                                    <small class="text-muted">2 hours ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-dark media py-2" href="javascript:void(0)">
                                                <div class="mr-3 ml-2">
                                                    <i class="fa fa-fw fa-circle text-success"></i>
                                                </div>
                                                <div class="media-body">
                                                    <div class="font-w600">New sale! + $499</div>
                                                    <small class="text-muted">3 hours ago</small>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- END Today -->

                                <!-- Yesterday -->
                                <div class="block-content block-content-full block-content-sm bg-body-light">
                                    <div class="row">
                                        <div class="col-6">
                                            <span class="font-w600 text-uppercase">Yesterday</span>
                                        </div>
                                        <div class="col-6 text-right">
                                            <span class="text-muted">$765</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <ul class="nav-items push">
                                        <li>
                                            <a class="text-dark media py-2" href="javascript:void(0)">
                                                <div class="mr-3 ml-2">
                                                    <i class="fa fa-fw fa-circle text-success"></i>
                                                </div>
                                                <div class="media-body">
                                                    <div class="font-w600">New sale! + $249</div>
                                                    <small class="text-muted">26 hours ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-dark media py-2" href="javascript:void(0)">
                                                <div class="mr-3 ml-2">
                                                    <i class="fa fa-fw fa-circle text-danger"></i>
                                                </div>
                                                <div class="media-body">
                                                    <div class="font-w600">Product Purchase - $50</div>
                                                    <small class="text-muted">28 hours ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-dark media py-2" href="javascript:void(0)">
                                                <div class="mr-3 ml-2">
                                                    <i class="fa fa-fw fa-circle text-success"></i>
                                                </div>
                                                <div class="media-body">
                                                    <div class="font-w600">New sale! + $119</div>
                                                    <small class="text-muted">29 hours ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-dark media py-2" href="javascript:void(0)">
                                                <div class="mr-3 ml-2">
                                                    <i class="fa fa-fw fa-circle text-danger"></i>
                                                </div>
                                                <div class="media-body">
                                                    <div class="font-w600">Paypal Withdrawal - $300</div>
                                                    <small class="text-muted">37 hours ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-dark media py-2" href="javascript:void(0)">
                                                <div class="mr-3 ml-2">
                                                    <i class="fa fa-fw fa-circle text-success"></i>
                                                </div>
                                                <div class="media-body">
                                                    <div class="font-w600">New sale! + $129</div>
                                                    <small class="text-muted">39 hours ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-dark media py-2" href="javascript:void(0)">
                                                <div class="mr-3 ml-2">
                                                    <i class="fa fa-fw fa-circle text-success"></i>
                                                </div>
                                                <div class="media-body">
                                                    <div class="font-w600">New sale! + $119</div>
                                                    <small class="text-muted">45 hours ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-dark media py-2" href="javascript:void(0)">
                                                <div class="mr-3 ml-2">
                                                    <i class="fa fa-fw fa-circle text-success"></i>
                                                </div>
                                                <div class="media-body">
                                                    <div class="font-w600">New sale! + $499</div>
                                                    <small class="text-muted">46 hours ago</small>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>

                                    <!-- More -->
                                    <div class="text-center">
                                        <a class="btn btn-sm btn-light" href="javascript:void(0)">
                                            <i class="fa fa-arrow-down mr-1"></i> Load More..
                                        </a>
                                    </div>
                                    <!-- END More -->
                                </div>
                                <!-- END Yesterday -->
                            </div>
                        </div>
                        <!-- END Sales Tab -->
                    </div>
                </div>
                <!-- END Side Overlay Tabs -->
            </div>
            <!-- END Side Content -->
        </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 1338px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 389px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></aside>
        <!-- END Side Overlay -->

        <!-- Sidebar -->
        <!--
            Sidebar Mini Mode - Display Helper classes

            Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
            Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
                If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

            Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
            Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
            Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
        -->
        
            <!-- Side Header -->
            <div class="content-header bg-white-5">
                <!-- Logo -->
                <a class="font-w600 text-dual" href="index.html">
                    <i class="fa fa-circle-notch text-primary"></i>
                    <span class="smini-hide">
                        <span class="font-w700 font-size-h5">ne</span>
                    </span>
                </a>
                <!-- END Logo -->

                <!-- Extra -->
                <div>
                    <!-- Options -->
                    <div class="dropdown d-inline-block ml-2">
                        <a class="btn btn-sm btn-dual" id="sidebar-themes-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                            <i class="si si-drop"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right font-size-sm smini-hide border-0" aria-labelledby="sidebar-themes-dropdown">
                            <!-- Color Themes -->
                            <!-- Layout API, functionality initialized in Template._uiHandleTheme() -->
                            <a class="dropdown-item d-flex align-items-center justify-content-between active" data-toggle="theme" data-theme="default" href="#">
                                <span>Default</span>
                                <i class="fa fa-circle text-default"></i>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="public/assets/css/themes/amethyst.min.css" href="#">
                                <span>Amethyst</span>
                                <i class="fa fa-circle text-amethyst"></i>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="public/assets/css/themes/city.min.css" href="#">
                                <span>City</span>
                                <i class="fa fa-circle text-city"></i>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="public/assets/css/themes/flat.min.css" href="#">
                                <span>Flat</span>
                                <i class="fa fa-circle text-flat"></i>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="public/assets/css/themes/modern.min.css" href="#">
                                <span>Modern</span>
                                <i class="fa fa-circle text-modern"></i>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="public/assets/css/themes/smooth.min.css" href="#">
                                <span>Smooth</span>
                                <i class="fa fa-circle text-smooth"></i>
                            </a>
                            <!-- END Color Themes -->

                            <div class="dropdown-divider"></div>

                            <!-- Sidebar Styles -->
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <a class="dropdown-item" data-toggle="layout" data-action="sidebar_style_light" href="#">
                                <span>Sidebar Light</span>
                            </a>
                            <a class="dropdown-item" data-toggle="layout" data-action="sidebar_style_dark" href="#">
                                <span>Sidebar Dark</span>
                            </a>
                            <!-- Sidebar Styles -->

                            <div class="dropdown-divider"></div>

                            <!-- Header Styles -->
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <a class="dropdown-item" data-toggle="layout" data-action="header_style_light" href="#">
                                <span>Header Light</span>
                            </a>
                            <a class="dropdown-item" data-toggle="layout" data-action="header_style_dark" href="#">
                                <span>Header Dark</span>
                            </a>
                            <!-- Header Styles -->
                        </div>
                    </div>
                    <!-- END Options -->

                    <!-- Close Sidebar, Visible only on mobile screens -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <a class="d-lg-none btn btn-sm btn-dual ml-2" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                        <i class="fa fa-fw fa-times"></i>
                    </a>
                    <!-- END Close Sidebar -->
                </div>
                <!-- END Extra -->
            </div>
            <!-- END Side Header -->

            <!-- Side Navigation -->
            
        <!-- END Sidebar -->

        <!-- Header -->
        <header id="page-header">
            <!-- Header Content -->
            <div class="content-header">
                
                <!-- Left Section -->
                <div class="d-flex align-items-center">
                   
                    <!-- Toggle Sidebar -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                    {{-- <button type="button" class="btn btn-sm btn-dual mr-2 d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                        <i class="fa fa-fw fa-bars"></i>
                    </button> --}}
                    <!-- END Toggle Sidebar -->

                    <!-- Toggle Mini Sidebar -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                    {{-- <button type="button" class="btn btn-sm btn-dual mr-2 d-none d-lg-inline-block" data-toggle="layout" data-action="sidebar_mini_toggle">
                        <i class="fa fa-fw fa-ellipsis-v"></i>
                    </button> --}}
                    <!-- END Toggle Mini Sidebar -->

                    <!-- Apps Modal -->
                    <!-- Opens the Apps modal found at the bottom of the page, after footer’s markup -->
                    {{-- <button type="button" class="btn btn-sm btn-dual mr-2" data-toggle="modal" data-target="#one-modal-apps">
                        <i class="si si-grid"></i>
                    </button> --}}
                    <!-- END Apps Modal -->

                    <!-- Open Search Section (visible on smaller screens) -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    {{-- <button type="button" class="btn btn-sm btn-dual d-sm-none" data-toggle="layout" data-action="header_search_on">
                        <i class="si si-magnifier"></i>
                    </button> --}}
                    <!-- END Open Search Section -->

                    <!-- Search Form (visible on larger screens) -->
                   
                    <!-- END Search Form -->
                    <a href="home" class="btn btn-outline-dark ml-5">Home</a>
                </div>
                <!-- END Left Section -->
               
                <!-- Right Section -->
                <div class="d-flex align-items-center">
                    <!-- User Dropdown -->
                    @if (Session('message'))
                        <div class=" alert-success p-2 mr-3" role="alert">
                            {{Session::get('message')}}
                            {{Session::put('message',null)}}
                         </div>
                    @endif
                   
                    @if (Session('customer_id'))
                    <div class="dropdown d-inline-block ml-2">
                        <button type="button" class="btn btn-sm btn-dual" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded" src="public/assets/media/avatars/avatar10.jpg" alt="Header Avatar" style="width: 18px;">
                            <span class="d-none d-sm-inline-block ml-1">{{Session::get('customer_name')}}</span>
                            <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="page-header-user-dropdown">
                            <div class="p-3 text-center bg-primary">
                                <img class="img-avatar img-avatar48 img-avatar-thumb" src="public/assets/media/avatars/avatar10.jpg" alt="">
                            </div>
                            <div class="p-2">
                                <h5 class="dropdown-header text-uppercase">User Options</h5>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="show-history">
                                    <span>History</span>
                                    <span>
                                        {{-- <span class="badge badge-pill badge-primary">3</span> --}}
                                        <i class="si si-envelope-open ml-1"></i>
                                    </span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="profile">
                                    <span>Profile</span>
                                    <span>
                                        {{-- <span class="badge badge-pill badge-success">1</span> --}}
                                        <i class="si si-user ml-1"></i>
                                    </span>
                                </a>
                                
                                <div role="separator" class="dropdown-divider"></div>
                                <h5 class="dropdown-header text-uppercase">Actions</h5>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="change-password-customer">
                                    <span>Change Password</span>
                                    <i class="si si-lock ml-1"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="log-out-customer">
                                    <span>Log Out</span>
                                    <i class="si si-logout ml-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="btn-group">
                        <div class="btn btn-outline-info "><a class="text-info" href="sign-in">Sign In</a></div>
                        <div class="btn btn-outline-info "><a class="text-info" href="sign-up">Sign Up</a></div>
                    </div>
                    @endif
         
                    <!-- END User Dropdown -->

                    <!-- Notifications Dropdown -->
                   
                    <!-- END Notifications Dropdown -->

                    <!-- Toggle Side Overlay -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                   
                    <!-- END Toggle Side Overlay -->
                </div>
                <!-- END Right Section -->
            </div>
            <!-- END Header Content -->

            <!-- Header Search -->
            <div id="page-header-search" class="overlay-header bg-white">
                <div class="content-header">
                    <form class="w-100" action="be_pages_generic_search.html" method="POST">
                        <div class="input-group input-group-sm">
                            <div class="input-group-prepend">
                                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                <button type="button" class="btn btn-danger" data-toggle="layout" data-action="header_search_off">
                                    <i class="fa fa-fw fa-times-circle"></i>
                                </button>
                            </div>
                            <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Header Search -->

            <!-- Header Loader -->
            <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
            <div id="page-header-loader" class="overlay-header bg-white">
                <div class="content-header">
                    <div class="w-100 text-center">
                        <i class="fa fa-fw fa-circle-notch fa-spin"></i>
                    </div>
                </div>
            </div>
            <!-- END Header Loader -->
        </header>
        <!-- END Header -->

        <!-- Main Container -->
        <main id="main-container" style="width: 100%">
            <div class="bg-image">
               <div class="bg-primary-dark-op slide">
                   <div class="vai-cai-slide">
                       <div class="_1_slide active-slide"><img src="public/images/laptop1.png" alt="slide"></div>
                       <div class="_1_slide"><img src="public/images/laptop2.png" alt="slide"></div>
                       <div class="_1_slide"><img src="public/images/laptop3.png" alt="slide"></div>
                       <div class="_1_slide"><img src="public/images/laptop4.png" alt="slide"></div>
                   </div>
                   <div class="vai-cai-nut">
                       <div class="prev">&lt;</div>
                       <div class="next">&gt;</div>
                       <div class="vai-dau-cham">
                           <ul>
                               <li class="active-number">1</li>
                               <li>2</li>
                               <li>3</li>
                               <li>4</li>
                           </ul>
                       </div>
                   </div>
                </div>
            </div>
            <div class="content">
                <!-- Toggle Side Content -->
                <!-- Class Toggle, functionality initialized in Helpers.coreToggleClass() -->
                <div class="d-xl-none push">
                    <div class="row gutters-tiny">
                        <div class="col-6">
                            <button type="button" class="btn btn-light btn-block" data-toggle="class-toggle" data-target=".js-ecom-div-nav" data-class="d-none">
                                <i class="fa fa-fw fa-bars text-muted mr-1"></i> Navigation
                            </button>
                        </div>
                        <div class="col-6">
                            <button type="button" class="btn btn-light btn-block" data-toggle="class-toggle" data-target=".js-ecom-div-cart" data-class="d-none">
                                <i class="fa fa-fw fa-shopping-cart text-muted mr-1"></i> Cart (3)
                            </button>
                        </div>
                    </div>
                </div>
                <!-- END Toggle Side Content -->
        
                <div class="row push">
                    <div class="col-xl-4 order-xl-1">
                        <!-- Categories -->
                        <div class="block js-ecom-div-nav d-none d-xl-block">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">
                                    <i class="fa fa-fw fa-boxes text-muted mr-1"></i> Categories
                                </h3>
                            </div>
                            <div class="block-content">
                                <ul class="nav nav-pills flex-column push">
                                    @foreach ($list_category as $item)

                                    <li class="nav-item mb-1">
                                    <a class="nav-link d-flex justify-content-between align-items-center" href="show-by-category/{{$item->category_id}}">
                                           {{$item->category_name}} <span class="badge badge-pill badge-secondary ml-1">{{$item->count}}</span>
                                        </a>
                                    </li>
                                        
                                    @endforeach
                                 
                                </ul>
                            </div>
                        </div>
                        <!-- END Categories -->
        
                        <!-- Shopping Cart -->
                        @if (Session('customer_id'))
                        <div class="block js-ecom-div-cart d-none d-xl-block">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">
                                    <i class="fa fa-fw fa-shopping-cart text-muted mr-1"></i>{{ 'Shopping Cart ('.Cart::count().')'}}
                                </h3>
                            </div>
                            <div class="block-content">
                               
                                <table class="table table-borderless table-hover table-vcenter">
                                    
                                    <tbody>
                                        @foreach (Cart::content() as $item)
                                        <tr>
                                            <td class="text-center">
                                                <a class="text-danger" href="delete-one-row-home/{{$item->rowId}}"><i class="fa fa-times"></i></a>
                                            </td>
                                            <td style="width: 60px;">
                                                <img class="img-fluid" src="public/upload/{{$item->options->image}}" alt="">
                                            </td>
                                            <td>
                                                <a class="h5" href="be_pages_ecom_store_product.html">{{$item->name}}</a>
                                            </td>
                                            <td>
                                                <a class="h5 text-danger" href="be_pages_ecom_store_product.html">{{$item->qty}}</a>
                                            </td>
                                            <td class="text-right">
                                                <div class="font-w600 text-success">{{'$ '.$item->price}}</div>
                                            </td>
                                        </tr>
                                            
                                        @endforeach
                                       
                                        <tr class="bg-success-light">
                                            <td class="text-right" colspan="4">
                                                <span class="h4 font-w600">Total</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="h4 font-w600 text-success">{{Cart::subtotal()}}</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="block-content block-content-full bg-body-light text-right">
                                <a class="btn btn-sm btn-primary" href="show-cart">
                                    <i class="fa fa-check mr-1"></i> Complete Checkout
                                </a>
                            </div>
                        </div>
                            
                        @endif
                        
                        <!-- END Shopping Cart -->
                    </div>
                    <div class="col-xl-8 order-xl-0">
                        <!-- Sort and Show Filters -->
                        <div class="d-flex justify-content-between">
                            {{-- <div class="mb-3">
                                <select id="ecom-results-show" name="ecom-results-show" class="form-control form-control-sm" size="1">
                                    <option value="0" disabled="" selected="">SHOW</option>
                                    <option value="9">9</option>
                                    <option value="18">18</option>
                                    <option value="36">36</option>
                                    <option value="72">72</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <select id="ecom-results-sort" name="ecom-results-sort" class="form-control form-control-sm" size="1">
                                    <option value="0" disabled="" selected="">SORT BY</option>
                                    <option value="1">Popularity</option>
                                    <option value="2">Name (A to Z)</option>
                                    <option value="3">Name (Z to A)</option>
                                    <option value="4">Price (Lowest to Highest)</option>
                                    <option value="5">Price (Highest to Lowest)</option>
                                    <option value="6">Sales (Lowest to Highest)</option>
                                    <option value="7">Sales (Highest to Lowest)</option>
                                </select>
                            </div> --}}
                            <form class="d-none d-sm-inline-block" action="search-form" method="POST">
                                {{ csrf_field() }}
                                <div style="margin-bottom:15px;" class="input-group input-group-sm">
                                    <input style="background: #747d8cba;
                                    border-radius: 9px;" type="text" class="form-control form-control-alt" placeholder="Search.." id="page-header-search-input2" name="input_value">
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-body border-0">
                                           <button style="border: none"><i class="si si-magnifier"></i></button> 
                                        </span>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- END Sort and Show Filters -->
                         @yield('content')
                       
                    </div>
                </div>
            </div>
           
        </main>
        <!-- END Main Container -->

        <!-- Footer -->
        <footer id="page-footer" class="bg-body-light">
            <div class="content py-3">
                <div class="row font-size-sm">
                    <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-right">
                        Crafted with <i class="fa fa-heart text-danger"></i> by <a class="font-w600" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
                    </div>
                    <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-left">
                        <a class="font-w600" href="https://1.envato.market/AVD6j" target="_blank">OneUI 4.6</a> © <span data-toggle="year-copy" class="js-year-copy-enabled">2020</span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END Footer -->

        <!-- Apps Modal -->
        <!-- Opens from the modal toggle button in the header -->
        <div class="modal fade" id="one-modal-apps" tabindex="-1" role="dialog" aria-labelledby="one-modal-apps" aria-hidden="true">
            <div class="modal-dialog modal-dialog-top modal-sm" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Apps</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="row gutters-tiny">
                                <div class="col-6">
                                    <!-- CRM -->
                                    <a class="block block-rounded block-themed bg-default" href="javascript:void(0)">
                                        <div class="block-content text-center">
                                            <i class="si si-speedometer fa-2x text-white-75"></i>
                                            <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                                CRM
                                            </p>
                                        </div>
                                    </a>
                                    <!-- END CRM -->
                                </div>
                                <div class="col-6">
                                    <!-- Products -->
                                    <a class="block block-rounded block-themed bg-danger" href="javascript:void(0)">
                                        <div class="block-content text-center">
                                            <i class="si si-rocket fa-2x text-white-75"></i>
                                            <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                                Products
                                            </p>
                                        </div>
                                    </a>
                                    <!-- END Products -->
                                </div>
                                <div class="col-6">
                                    <!-- Sales -->
                                    <a class="block block-rounded block-themed bg-success mb-0" href="javascript:void(0)">
                                        <div class="block-content text-center">
                                            <i class="si si-plane fa-2x text-white-75"></i>
                                            <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                                Sales
                                            </p>
                                        </div>
                                    </a>
                                    <!-- END Sales -->
                                </div>
                                <div class="col-6">
                                    <!-- Payments -->
                                    <a class="block block-rounded block-themed bg-warning mb-0" href="javascript:void(0)">
                                        <div class="block-content text-center">
                                            <i class="si si-wallet fa-2x text-white-75"></i>
                                            <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                                Payments
                                            </p>
                                        </div>
                                    </a>
                                    <!-- END Payments -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Apps Modal -->
    </div>
    <!-- END Page Container -->

    <!--
        OneUI JS Core

        Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
        to handle those dependencies through webpack. Please check out public/assets/_es6/main/bootstrap.js for more info.

        If you like, you could also include them separately directly from the public/assets/js/core folder in the following
        order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

        public/assets/js/core/jquery.min.js
        public/assets/js/core/bootstrap.bundle.min.js
        public/assets/js/core/simplebar.min.js
        public/assets/js/core/jquery-scrollLock.min.js
        public/assets/js/core/jquery.appear.min.js
        public/assets/js/core/js.cookie.min.js
    -->
    <script src="public/assets/js/oneui.core.min.js"></script>

    <!--
        OneUI JS

        Custom functionality including Blocks/Layout API as well as other vital and optional helpers
        webpack is putting everything together at public/assets/_es6/main/app.js
    -->
    <script src="public/assets/js/oneui.app.min.js"></script>
    <script src="public/assets/js/home_page.js"></script>
            

</body></html>