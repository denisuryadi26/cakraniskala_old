<!DOCTYPE html>
<html>

<head>
    <meta name="user_id" content="{{Auth::id() }}">

    <title> {{env('APP_NAME') }} @hasSection('title') - @yield('title') @else - @endif </title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="ws_url" content="{{ env('WS_URL') }}">
    <meta name="user_id" content="{{Auth::id() }}">
    <link rel="apple-touch-icon" href="{{asset('img/icon/favicon-cn.ico')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/icon/favicon-cn.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">

    <!-- Plugins css -->
    <!-- <link href="{{asset('plugins/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('plugins/datatables/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('plugins/datatables/buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('plugins/datatables/select.bootstrap4.css')}}" rel="stylesheet" type="text/css" /> -->

    <!-- App css -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('nazox/assets/images/favicon-cn.ico')}}">

    <!-- jquery.vectormap css -->
    <link href="{{asset('nazox/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />

    <!-- DataTables -->
    <link href="{{asset('nazox/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('nazox/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('nazox/assets/libs/datatables.net-select-bs4/css//select.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{asset('nazox/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{asset('nazox/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('nazox/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('nazox/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />


    <link rel="stylesheet" type="text/css" href="{{asset('lib/flatpickr/css/flatpickr.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('lib/bootstrap-fileinput/css/fileinput.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}">

    <!-- END: Page CSS-->

    <!-- END: Custom CSS-->

    <!-- <link rel="stylesheet" type="text/css" href="{{asset('table/css/main.css')}}"> -->

    <!-- <link rel="stylesheet" type="text/css" href="{{asset('css/chat.css')}}"> -->

    @yield('stylesheet')



</head>

<body data-sidebar="dark">

    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('admin.templates.header')
        @include('admin.templates.sidebar')
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
                    @yield('breadcumbs')
                    @yield('content')
                </div>
            </div>
            @include('admin.templates.footer')
        </div>
    </div>
    <!-- <script src="{{asset('lib/jquery-validation/js/jquery.validate.min.js')}}"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script> -->



    {{--CORE JS--}}
    <!-- form-picker-custom Js -->
    <script src="{{asset('lib/form/form-validation.js')}}"></script>
    <script src="{{asset('js/core.js')}}"></script>

    <script src="{{asset('lib/flatpickr/js/flatpickr.js')}}"></script>
    <script src="{{asset('lib/sweetalert2/sweetalert2.js')}}"></script>
    <!-- <script src="{{asset('argon-dashboard/assets/vendor/sweetalert2/dist/sweetalert2.min.js')}}"></script> -->
    <!-- CORE PLUGINS-->
    <!-- Argon Scripts -->
    <!-- Core -->

    <!-- JAVASCRIPT -->
    <!-- <script src="{{asset('nazox/assets/libs/jquery/jquery.min.js')}}"></script> -->
    <script src="{{asset('nazox/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('nazox/assets/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('nazox/assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('nazox/assets/libs/node-waves/waves.min.js')}}"></script>

    <!-- apexcharts -->
    <script src="{{asset('nazox/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

    <!-- jquery.vectormap map -->
    <script src="{{asset('nazox/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{asset('nazox/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js')}}"></script>

    <!-- Required datatable js -->
    <script src="{{asset('nazox/assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('nazox/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Buttons examples -->
    <script src="{{asset('nazox/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('nazox/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('nazox/assets/libs/jszip/jszip.min.js')}}"></script>
    <script src="{{asset('nazox/assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('nazox/assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
    <script src="{{asset('nazox/assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('nazox/assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('nazox/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>

    <script src="{{asset('nazox/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('nazox/assets/libs/datatables.net-select/js/dataTables.select.min.js')}}"></script>

    <!-- Datatable init js -->
    <script src="{{asset('nazox/assets/js/pages/datatables.init.js')}}"></script>

    <!-- Responsive examples -->
    <script src="{{asset('nazox/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('nazox/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

    <script src="{{asset('nazox/assets/js/pages/dashboard.init.js')}}"></script>

    <script src="{{asset('nazox/assets/js/app.js')}}"></script>

    <!-- third party js -->
    <!-- <script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('plugins/datatables/dataTables.bootstrap4.js')}}"></script>
    <script src="{{asset('plugins/datatables/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('plugins/datatables/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('plugins/datatables/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('plugins/datatables/buttons.html5.min.js')}}"></script>
    <script src="{{asset('plugins/datatables/buttons.flash.min.js')}}"></script>
    <script src="{{asset('plugins/datatables/buttons.print.min.js')}}"></script>
    <script src="{{asset('plugins/datatables/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('plugins/datatables/dataTables.select.min.js')}}"></script>
    <script src="{{asset('plugins/datatables/pdfmake.min.js')}}"></script>
    <script src="{{asset('plugins/datatables/vfs_fonts.js')}}"></script> -->
    <!-- third party js ends -->

    <!-- Morris Js-->
    <!-- <script src="{{asset('plugins/morris-js/morris.min.js')}}"></script> -->
    <!-- Raphael Js-->
    <!-- <script src="{{asset('plugins/raphael/raphael.min.js')}}"></script> -->
    <!-- PAGE LEVEL SCRIPTS-->

    <script src="{{asset('lib/bootstrap-fileinput/js/fileinput.js')}}"></script>
    <script src="{{asset('lib/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('lib/fa-theme/theme.js')}}"></script>


    <!-- END: Page JS-->

    @yield('script')
</body>

</html>