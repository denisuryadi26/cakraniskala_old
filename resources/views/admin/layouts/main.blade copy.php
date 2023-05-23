<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="user_id" content="{{Auth::id() }}">

    <title> {{env('APP_NAME') }} @hasSection('title') - @yield('title') @else - @endif </title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="ws_url" content="{{ env('WS_URL') }}">
    <meta name="user_id" content="{{Auth::id() }}">
    <link rel="apple-touch-icon" href="{{asset('img/icon/favicon.ico')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/icon/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Plugins css -->
    <link href="{{asset('plugins/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('plugins/datatables/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('plugins/datatables/buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('plugins/datatables/select.bootstrap4.css')}}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{asset('opatix/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('opatix/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('opatix/assets/css/theme.min.css')}}" rel="stylesheet" type="text/css" />


    <link rel="stylesheet" type="text/css" href="{{asset('lib/flatpickr/css/flatpickr.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('lib/bootstrap-fileinput/css/fileinput.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}">

    <!-- END: Page CSS-->

    <!-- END: Custom CSS-->

    <!-- <link rel="stylesheet" type="text/css" href="{{asset('table/css/main.css')}}"> -->

    <!-- <link rel="stylesheet" type="text/css" href="{{asset('css/chat.css')}}"> -->

    @yield('stylesheet')



</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">


        @include('admin.templates.sidebar')

        @include('admin.templates.header')


        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18">{{$menu['breadcrumbs']->name}}</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                        <li class="breadcrumb-item active">Datatables</li> -->
                                        @yield('breadcumbs')
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    @yield('content')
                </div>
            </div>
            @include('admin.templates.footer')

        </div>


        <div class="sidenav-overlay"></div>
        <div class="drag-target"></div>
    </div>
    <!-- END THEME CONFIG PANEL-->
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->


    <!-- BEGIN: Vendor JS-->
    <!-- <script src="{{asset('lib/jquery-validation/js/jquery.validate.min.js')}}"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>



    {{--CORE JS--}}
    <!-- form-picker-custom Js -->
    <script src="{{asset('lib/form/form-validation.js')}}"></script>
    <script src="{{asset('js/core.js')}}"></script>

    <script src="{{asset('lib/flatpickr/js/flatpickr.js')}}"></script>
    <script src="{{asset('lib/sweetalert2/sweetalert2.js')}}"></script>
    <!-- CORE PLUGINS-->
    <!-- jQuery  -->
    <!-- <script src="{{asset('opatix/assets/js/jquery.min.js')}}"></script> -->
    <script src="{{asset('opatix/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('opatix/assets/js/metismenu.min.js')}}"></script>
    <script src="{{asset('opatix/assets/js/waves.js')}}"></script>
    <script src="{{asset('opatix/assets/js/simplebar.min.js')}}"></script>

    <!-- third party js -->
    <script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
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
    <script src="{{asset('plugins/datatables/vfs_fonts.js')}}"></script>
    <!-- third party js ends -->

    <!-- Datatables init -->
    <script src="{{asset('opatix/assets/pages/datatables-demo.js')}}"></script>

    <!-- Morris Js-->
    <script src="{{asset('plugins/morris-js/morris.min.js')}}"></script>
    <!-- Raphael Js-->
    <script src="{{asset('plugins/raphael/raphael.min.js')}}"></script>

    <!-- Morris Custom Js-->
    <script src="{{asset('opatix/assets/pages/dashboard-demo.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('opatix/assets/js/theme.js')}}"></script>
    <!-- PAGE LEVEL SCRIPTS-->

    <script src="{{asset('lib/bootstrap-fileinput/js/fileinput.js')}}"></script>
    <script src="{{asset('lib/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('lib/fa-theme/theme.js')}}"></script>


    <!-- END: Page JS-->

    @yield('script')
</body>

</html>