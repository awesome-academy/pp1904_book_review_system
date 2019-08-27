<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
    <!-- begin::Head -->
    <head>
        <meta charset="utf-8" />
        <title> @yield('title') </title>
        <meta name="description" content="Latest updates and statistic charts">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!--begin::Web font -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
            WebFont.load({
                google: {
                    "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
                },
                active: function() {
                    sessionStorage.fonts = true;
                }
            });
        </script>
        <!--end::Web font -->
        <!--begin::Base Styles -->
        <!--begin::Page Vendors -->
        <link href="{{ asset('admin/vendors/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/vendors/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
        <!--end::Page Vendors -->
        <link href="{{ asset('admin/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/demo/default/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{ asset('css/croppie.css')}}">
        <!--end::Base Styles -->
        <link rel="shortcut icon" href="{{ asset('admin/demo/default/media/img/logo/favicon.ico')}}" />
    </head>
    <!-- end::Head -->
    <!-- begin::Body -->
    <body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
        <!-- begin:: Page -->
        <div class="m-grid m-grid--hor m-grid--root m-page">
            <!-- BEGIN: Header -->
            @include('admin.layouts.header')
            <!-- END: Header -->
            <!-- begin::Body -->
            <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
                <!-- BEGIN: Left Aside -->
                @include('admin.layouts.leftaside')
                <!-- END: Left Aside -->
                <div class="m-grid__item m-grid__item--fluid m-wrapper">
                    <!-- BEGIN: Subheader -->
                        @yield('subheader')
                    <!-- END: Subheader -->
                    <div class="m-content">
                        @yield('content')
                    </div>
                </div>
            </div>
            <!-- end:: Body -->
            <!-- begin::Footer -->
            @include('admin.layouts.footer')
            <!-- end::Footer -->
        </div>
        <!-- end:: Page -->
        <!-- begin::Scroll Top -->
        <div id="m_scroll_top" class="m-scroll-top">
            <i class="la la-arrow-up"></i>
        </div>
        <!-- end::Scroll Top -->
        <!--begin::Base Scripts -->
        <script src="{{ asset('admin/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
        <script src="{{ asset('admin/demo/default/base/scripts.bundle.js')}}" type="text/javascript"></script>
        <!--end::Base Scripts -->
        <!--begin::Page Vendors -->
        <script src="{{asset('admin/vendors/custom/datatables/datatables.bundle.js')}}" type="text/javascript"></script>
        <!--end::Page Vendors -->
        <!--begin::Page Resources -->
        <script src="{{ asset('admin/demo/default/custom/header/actions.js')}}" type="text/javascript"></script>
        <script src="{{ asset('admin/demo/default/custom/components/base/sweetalert2.js')}}" type="text/javascript"></script>
        <script src="{{ asset('admin/demo/default/custom/crud/datatables/basic/basic.js')}}" type="text/javascript"></script>
        <script src="{{ asset('admin/demo/default/custom/crud/forms/widgets/bootstrap-datepicker.js') }}" type="text/javascript"></script>
        <!--end::Page Resources -->
        <!--begin::Page Snippets -->
        <script src="{{ asset('admin/app/js/dashboard.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/croppie.js')}}"></script>
        <!--end::Page Snippets -->
        @yield('script')
    </body>
    <!-- end::Body -->
</html>
