<!DOCTYPE html>

<html
    lang="en"
    class="light-style layout-menu-fixed"
    dir="rtl"
    data-theme="theme-default"
    data-assets-path="backend_theme/assets/"
    data-template="horizontal-menu-template-no-customizer"
>
<head>
    <meta charset="utf-8"/>
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Dashboard - Analytics | Vuexy - Bootstrap Admin Template</title>

    <meta name="description" content=""/>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('backend_theme/assets/img/favicon/favicon.ico')}}"/>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet"
    />

    <!-- Icons -->
    <link rel="stylesheet" href="{{asset('backend_theme/assets/vendor/fonts/fontawesome.css')}}"/>
    <link rel="stylesheet" href="{{asset('backend_theme/assets/vendor/fonts/tabler-icons.css')}}"/>
    <link rel="stylesheet" href="{{asset('backend_theme/assets/vendor/fonts/flag-icons.css')}}"/>

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('backend_theme/assets/vendor/css/rtl/core.css')}}" />
    <link rel="stylesheet" href="{{asset('backend_theme/assets/vendor/css/rtl/theme-default.css')}}" />
    <link rel="stylesheet" href="{{asset('backend_theme/assets/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet"
          href="{{asset('backend_theme/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}"/>
    <link rel="stylesheet" href="{{asset('backend_theme/assets/vendor/libs/node-waves/node-waves.css')}}"/>
    <link rel="stylesheet" href="{{asset('backend_theme/assets/vendor/libs/typeahead-js/typeahead.css')}}"/>
{{--    <link rel="stylesheet" href="{{asset('backend_theme/assets/vendor/libs/apex-charts/apex-charts.css')}}"/>--}}
    <link rel="stylesheet" href="{{asset('backend_theme/assets/vendor/libs/swiper/swiper.css')}}"/>
    <link rel="stylesheet"
          href="{{asset('backend_theme/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}"/>
    <link rel="stylesheet"
          href="{{asset('backend_theme/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}"/>
    <link rel="stylesheet"
          href="{{asset('backend_theme/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css')}}"/>
@yield('style')

    <!-- Page CSS -->
    <link rel="stylesheet" href="{{asset('backend_theme/assets/vendor/css/pages/cards-advance.css')}}"/>
    <!-- Helpers -->
    <script src="{{asset('backend_theme/assets/vendor/js/helpers.js')}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
{{--        <script src="{{asset('backend_theme/assets/vendor/js/template-customizer.js')}}"></script>--}}
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('backend_theme/assets/js/config.js')}}"></script>
</head>

<body>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
    <div class="layout-container">
        <!-- Navbar -->

        <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
            <div class="container-xxl">
                <div class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-4">
                    <a href="{{route('dashboard')}}" class="app-brand-link gap-2">
                        <span class="app-brand-text demo menu-text fw-bold">The Best Solution </span>
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-xl-none">
                        <i class="ti ti-x ti-sm align-middle"></i>
                    </a>
                </div>

                <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                    <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                        <i class="ti ti-menu-2 ti-sm"></i>
                    </a>
                </div>

            </div>
        </nav>

        <!-- / Navbar -->

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Menu -->

                <!-- Content -->

                @yield('content')
                <!--/ Content -->


                <div class="content-backdrop fade"></div>
            </div>
            <!--/ Content wrapper -->
        </div>

        <!--/ Layout container -->
    </div>
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>

<!-- Drag Target Area To SlideIn Menu On Small Screens -->
<div class="drag-target"></div>

<!--/ Layout wrapper -->

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{{asset('backend_theme/assets/vendor/libs/jquery/jquery.js')}}"></script>
<script src="{{asset('backend_theme/assets/vendor/libs/popper/popper.js')}}"></script>
<script src="{{asset('backend_theme/assets/vendor/js/bootstrap.js')}}"></script>
<script src="{{asset('backend_theme/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
<script src="{{asset('backend_theme/assets/vendor/libs/node-waves/node-waves.js')}}"></script>

<script src="{{asset('backend_theme/assets/vendor/libs/hammer/hammer.js')}}"></script>
<script src="{{asset('backend_theme/assets/vendor/libs/i18n/i18n.js')}}"></script>
<script src="{{asset('backend_theme/assets/vendor/libs/typeahead-js/typeahead.js')}}"></script>

<script src="{{asset('backend_theme/assets/vendor/js/menu.js')}}"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{asset('backend_theme/assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
<script src="{{asset('backend_theme/assets/vendor/libs/swiper/swiper.js')}}"></script>
<script src="{{asset('backend_theme/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
@yield('script_vendor')
<!-- Main JS -->
@yield('script_main')

<!-- Page JS -->
<script src="{{asset('backend_theme/assets/js/dashboards-analytics.js')}}"></script>
   @yield('script_page')
</body>
</html>
