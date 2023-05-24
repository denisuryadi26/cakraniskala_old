<!DOCTYPE html>
<html lang="en">

<head>
    <title{{($setting['app_name'] ? $setting['app_name'] : 'APP NAME' )}}< /title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('nazox/assets/images/favicon-cn.ico')}}">

        <!-- Bootstrap Css -->
        <link href="{{asset('nazox/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('nazox/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('nazox/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />


        <!-- BEGIN: Theme CSS-->
        <!-- <link rel="stylesheet" type="text/css" href="{{asset('auth/css/bootstrap.css')}}"> -->
        <!-- <link rel="stylesheet" type="text/css" href="{{asset('auth/css/bootstrap-extended.css')}}"> -->

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('auth/css/form-validation.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('auth/css/page-auth.css')}}">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('auth/css/style.css')}}">
        <!-- END: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('auth/css/sweetalert2.min.css')}}">
        <!-- <link rel="stylesheet" type="text/css" href="{{asset('plugins/sweetalert2/sweetalert2.min.css')}}"> -->

</head>

<body class="auth-body-bg">

    <!-- <div class="main-content">
        <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
            <div class="container">
                <div class="header-body text-center mb-7">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                            <h1 class="text-white">Welcome!</h1>
                            <p class="text-lead text-white">Use these awesome forms to login or create new account in your project for free.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
        <div class="container mt--8 pb-5">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                    <div class="card bg-secondary border-0 mb-0">
                        <div class="card-body px-lg-5 py-lg-5">
                            <div class="text-center text-muted mb-4">
                                <small>Login</small>
                            </div>
                            <form role="form" method="POST" action="{{route('login')}}" novalidate>
                                @csrf
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                        </div>
                                        <input class="form-control" type="text" name="username" placeholder="Username">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input class="form-control" type="password" name="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    <input class="custom-control-input" id=" customCheckLogin" type="checkbox" checked="">
                                    <label class="custom-control-label" for=" customCheckLogin">
                                        <span class="text-muted">Remember me</span>
                                    </label>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary my-4">Sign in</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- end page -->
    <div class="home-btn d-none d-sm-block">
        <a href="index.html"><i class="mdi mdi-home-variant h2 text-white"></i></a>
    </div>
    <div>
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-lg-4">
                    <div class="authentication-page-content p-4 d-flex align-items-center min-vh-100">
                        <div class="w-100">
                            <div class="row justify-content-center">
                                <div class="col-lg-9">
                                    <div>
                                        <div class="text-center">
                                            <div>
                                                <a href="index.html" class="logo"><img src="{{asset('nazox/assets/images/logo-dark-cn.png')}}" height="40" alt="logo"></a>
                                            </div>

                                            <h4 class="font-size-18 mt-4">Welcome Back !</h4>
                                            <p class="text-muted">Sign in to continue to Cakra Niskala Dashboard.</p>
                                        </div>

                                        <div class="p-2 mt-5">
                                            <form class="form-horizontal" method="POST" action="{{route('login')}}" novalidate>
                                                @csrf
                                                <div class="form-group auth-form-group-custom mb-4">
                                                    <i class="ri-user-2-line auti-custom-input-icon"></i>
                                                    <label for="username">Username</label>
                                                    <input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
                                                </div>

                                                <div class="form-group auth-form-group-custom mb-4">
                                                    <i class="ri-lock-2-line auti-custom-input-icon"></i>
                                                    <label for="userpassword">Password</label>
                                                    <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password">
                                                </div>

                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customControlInline">
                                                    <label class="custom-control-label" for="customControlInline">Remember me</label>
                                                </div>

                                                <div class="mt-4 text-center">
                                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                                                </div>

                                                <div class="mt-4 text-center">
                                                    <a href="auth-recoverpw.html" class="text-muted"><i class="mdi mdi-lock mr-1"></i> Forgot your password?</a>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="mt-5 text-center">
                                            <p>Don't have an account ? <a href="{{ route('register') }}" class="font-weight-medium text-primary"> Register </a> </p>
                                            <p>© {{ now()->year }} Crafted with <i class="mdi mdi-heart text-danger"></i> by Cakra Niskala</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="authentication-bg">
                        <div class="bg-overlay"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{asset('nazox/assets/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('nazox/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('nazox/assets/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('nazox/assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('nazox/assets/libs/node-waves/waves.min.js')}}"></script>

    <script src="{{asset('nazox/assets/js/app.js')}}"></script>


    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('auth/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('auth/js/jquery.validate.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('auth/js/app-menu.js')}}"></script>
    <script src="{{asset('auth/js/app.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('auth/js/page-auth-login.js')}}"></script>
    <!-- END: Page JS-->

    <script src="{{asset('lib/sweetalert2/sweetalert2.js')}}"></script>
    <!-- <script src="{{asset('plugins/sweetalert2/sweetalert2.min.js')}}"></script> -->



    @if($message)
    <script>
        setTimeout(function() {
            Swal.fire({
                icon: `error`,
                title: `Login Failed`,
                html: 'Kombinasi username dan password tidak sesuai',
                showCancelButton: false,
                showConfirmButton: true,
                confirmButtonColor: "#DD6B55",
                // timer: 2000,
            })
        }, 1000);
    </script>
    @endif

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>

</body>

</html>