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
    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-boxed side-trans-enabled">
        {{-- <div id="page-overlay"></div> --}}
        <!-- Main Container -->
        <main id="main-container" style="width: 100%">
            <div class="bg-image" style="background-image: url('public/assets/media/photos/photo3@2x.jpg');">
                <div class="bg-primary-dark-op">
                    <div class="content content-full text-center py-6">
                        <h1 class="h2 text-white mb-2">
                           <i class="fa fa-history" aria-hidden="true"></i> History
                        </h1>
                        <h2 class="h4 font-w400 text-white-75 mb-0">We are almost there!</h2>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="row text-center">
                    <div class="col-12">
                        @if(Session('cancel_message'))
                            <div class="badge badge-warning">{{Session::get('cancel_message')}}</div>
                            {{Session::put('cancel_message',null)}}
                        @endif
                        
                    </div>
                   
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8">                      
                            <!-- Shopping Cart -->
                            <div class="block">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">Order</h3>
                                </div>
                                <div class="block-content">
                                    <!-- Search Form -->
                                   
                                    <!-- END Search Form -->
                            
                                    <!-- All Products Table -->
                                            <div class="table-responsive">
                                        <table class="table table-borderless table-striped table-vcenter text-center">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Customer</th>   
                                                    <th class="d-none d-md-table-cell">Total Price</th>
                                                    <th class="d-none d-sm-table-cell text-center">Create Time</th>
                                                    <th>Status</th>
                                                    <th class="text-center">View</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($order as $item)
                                                <tr>
                                                    <td class="text-center font-size-sm">
                                                        <a class="font-w600" href="be_pages_ecom_product_edit.html">
                                                        <strong>{{$item->users->name}}</strong>
                                                        </a>
                                                    </td>
                                                   
                                                    <td class="d-none d-md-table-cell font-size-sm">
                                                        <a href="be_pages_ecom_product_edit.html">{{$item->order_total}}</a>
                                                    </td>
                                                    <td class="d-none d-sm-table-cell text-center font-size-sm">{{$item->created_at}}</td>
                                                    <td>
                                                        @if (Str::is($item->order_status,'This order is waiting to check'))
                                                            <span class="badge badge-info">{{$item->order_status}}</span>
                                                        @elseif(Str::is($item->order_status,'Order is accepted')) 
                                                            <span class="badge badge-success">{{$item->order_status}}</span>
                                                        @else
                                                             <span class="badge badge-danger">{{$item->order_status}}</span>
                                                        @endif
                                                        
                                                    </td>
                                                    <td class="text-center font-size-sm">
                                                    <a class="btn btn-sm btn-alt-secondary js-tooltip-enabled" href="view-order-detail-history/{{$item->id}}" data-toggle="tooltip" title="" data-original-title="View">
                                                            <i class="fa fa-fw fa-eye"></i>
                                                        </a>

                                                        @if(Str::is($item->order_status,'This order is waiting to check'))
                                                             <a class="btn btn-sm btn-alt-danger js-tooltip-enabled" href="cancel-order/{{$item->id}}" data-toggle="tooltip" title="" data-original-title="Delete">
                                                        <i class="fa fa-fw fa-times text-danger"></i>
                                                        </a>
                                                        @endif
                                                       
                                                    
                                                    </td>
                                                </tr>
                                                @endforeach     
                                            </tbody>
                                        </table>
                                                </div>
                                    <!-- END All Products Table -->
                            
                                    <!-- Pagination -->
                                   
                                    <!-- END Pagination -->
                                </div>
                            </div>
                            <!-- END Shopping Cart -->

                            <!-- Create Account -->
                         
                            
                            <!-- END Create Account -->

                            

                            <!-- Submit Form -->
                            <div class="text-right push">
                                <a href='home' class="btn btn-sm btn-primary">
                                    Back
                                </a>
                            </div>
                            <!-- END Submit Form -->
                        </form>
                        
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


</body></html>