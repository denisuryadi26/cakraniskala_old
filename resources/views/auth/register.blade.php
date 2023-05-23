<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register Page - Vuexy - Bootstrap HTML admin template</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('nazox/assets/images/favicon.ico')}}">

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

@php
use App\Models\Group;
use App\Models\Generator\Agama;
use App\Models\Generator\Kategori;
use App\Models\Generator\Sabuk;
use App\Models\Generator\Unlat;
$group = Group::all();
$agama = Agama::all();
$kategori = Kategori::all();
$sabuk = Sabuk::all();
$unlat = Unlat::all();
@endphp

<body class="auth-body-bg">
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
                                                <a href="index.html" class="logo"><img src="{{asset('nazox/assets/images/logo-dark.png')}}" height="20" alt="logo"></a>
                                            </div>

                                            <h4 class="font-size-18 mt-4">Welcome Back !</h4>
                                            <p class="text-muted">Sign in to continue to Nazox.</p>
                                        </div>

                                        <div class="p-2 mt-5">
                                            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                                @csrf

                                                <fieldset class="form-group floating-label-form-group">
                                                    <label for="user-name">Nama Lengkap</label>
                                                    <div class="controls">
                                                        <input type="text" class="form-control" id="name" name="name" placeholder="Nama Lengkap" required data-validation-required-message="Harap Masukan Nama Lengkap">
                                                    </div>
                                                </fieldset>

                                                <fieldset class="form-group floating-label-form-group">
                                                    <label for="nik">NIK</label>
                                                    <div class="controls">
                                                        <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" required data-validation-required-message="Harap Masukan NIK">
                                                    </div>
                                                </fieldset>

                                                <fieldset class="form-group floating-label-form-group">
                                                    <label for="tempat_lahir">Tempat Lahir</label>
                                                    <div class="controls">
                                                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" required data-validation-required-message="Harap Masukan Tempat Lahir">
                                                    </div>
                                                </fieldset>

                                                <!-- <fieldset class="form-group floating-label-form-group">
                                        <label for="tgl_lahir">Tanggal Lahir</label>
                                        <div class="controls">
                                            <input class="form-control" id="tgl_lahir" required>
                                        </div>
                                    </fieldset> -->

                                                <fieldset class="form-group floating-label-form-group">
                                                    <label for="tgl_lahir">Tanggal Lahir</label>
                                                    <div class="controls">
                                                        <input type="date" class="form-control" name="tgl_lahir" required>
                                                        <!-- <input class="form-control" id="tgl_lahir" required> -->
                                                    </div>

                                                    <!-- <div class="col-12 col-md-6 form-group">
                                            <label for="pd-months-year">Select Month & Year</label>
                                            <input type="text" id="pd-months-year" class="form-control pickadate-months-year" placeholder="18 June, 2020" />
                                        </div> -->
                                                </fieldset>

                                                <fieldset class="form-group floating-label-form-group">
                                                    <label for="alamat">Alamat Lengkap</label>
                                                    <div class="controls">
                                                        <textarea class="form-control" id="alamat" name="alamat" placeholder="Alamat Lengkap" required data-validation-required-message="Harap Masukan Alamat Lengkap"></textarea>
                                                    </div>
                                                </fieldset>

                                                <fieldset class="form-group floating-label-form-group">
                                                    <label for="no_hp">No. Hp</label>
                                                    <div class="controls">
                                                        <input type="number" class="form-control" id="no_hp" name="no_hp" placeholder="Nomor HP" required data-validation-required-message="Harap Masukan Nomor HP">
                                                    </div>
                                                </fieldset>

                                                <fieldset class="form-group floating-label-form-group">
                                                    <label for="group">Jabatan</label>
                                                    <div class="controls">

                                                        <select class="select2 form-control form-control-lg" id="group" name="group_id" style="padding:10px !important;">
                                                            <option value="">Pilih Jabatan</option>
                                                            @foreach($group as $item)
                                                            <!-- <option value="{{$item->id}}">{{$item->name}}</option> -->
                                                            @if($item->name === 'Anggota' || $item->name === 'Pengurus/Pelatih' || $item->name === 'Anggota Kehormatan')
                                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                                            @endif
                                                            @endforeach
                                                            <!-- <option value="">-- Pilih Jabatan --</option>
                                                <option value="a2f82094-0cb6-4767-b662-d0c8c3da5bc1" {{ old('group_id') == 'a2f82094-0cb6-4767-b662-d0c8c3da5bc1' ? 'selected' : '' }}>Pengurus/Pelatih</option>
                                                <option value="3c1de8b3-a519-40a6-beb0-992291c7060c" {{ old('group_id') == '3c1de8b3-a519-40a6-beb0-992291c7060c' ? 'selected' : '' }}>Anggota</option> -->

                                                        </select>

                                                    </div>
                                                </fieldset>
                                                <fieldset class="form-group floating-label-form-group">
                                                    <label for="agama">Agama</label>
                                                    <div class="controls">

                                                        <select class="select2 form-control form-control-lg" id="agama_id" name="agama_id" style="padding:10px !important;">
                                                            <option value="">Pilih Agama</option>
                                                            @foreach($agama as $item)
                                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                                            @endforeach

                                                        </select>

                                                    </div>
                                                </fieldset>

                                                <fieldset class="form-group floating-label-form-group">
                                                    <label for="kategori">Kategori</label>
                                                    <div class="controls">

                                                        <select class="select2 form-control form-control-lg" id="kategori" name="kategori_id" style="padding:10px !important;">
                                                            <option value="">Pilih Kategori</option>
                                                            @foreach($kategori as $item)
                                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                                            @endforeach

                                                        </select>

                                                    </div>
                                                </fieldset>

                                                <fieldset class="form-group floating-label-form-group">
                                                    <label for="sabuk">Sabuk</label>
                                                    <div class="controls">

                                                        <select class="select2 form-control form-control-lg" id="sabuk" name="sabuk_id" style="padding:10px !important;">
                                                            <option value="">Pilih Sabuk</option>
                                                            @foreach($sabuk as $item)
                                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                                            @endforeach

                                                        </select>

                                                    </div>
                                                </fieldset>

                                                <fieldset class="form-group floating-label-form-group">
                                                    <label for="unlat">Unlat</label>
                                                    <div class="controls">

                                                        <select class="select2 form-control form-control-lg" id="unlat" name="unlat_id" style="padding:10px !important;">
                                                            <option value="">Pilih Unlat</option>
                                                            @foreach($unlat as $item)
                                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                                            @endforeach

                                                        </select>

                                                    </div>
                                                </fieldset>

                                                <fieldset class="form-group floating-label-form-group">
                                                    <label for="email">Email</label>
                                                    <div class="controls">
                                                        <input type="text" class="form-control" id="email" name="email" placeholder="User Name" required data-validation-required-message="Harap Masukan Email">
                                                    </div>
                                                </fieldset>

                                                <fieldset class="form-group floating-label-form-group">
                                                    <label for="user-name">User Name</label>
                                                    <div class="controls">
                                                        <input type="text" class="form-control" id="username" name="username" placeholder="User Name" required data-validation-required-message="Harap Masukan Username">
                                                    </div>
                                                </fieldset>

                                                <fieldset class="form-group floating-label-form-group mb-1">
                                                    <label for="user-password">Enter Password</label>
                                                    <div class="controls">
                                                        <input type="password" name="password" id="password" class="form-control" required data-validation-required-message="Harap Masukan Password" placeholder="Enter Password">
                                                    </div>
                                                </fieldset>
                                                <fieldset class="form-group floating-label-form-group mb-1">
                                                    <label for="user-password">Confirm Password</label>
                                                    <div class="controls">
                                                        <input type="password" data-validation-match-match="password" class="form-control mb-1" placeholder="Re type password" required>
                                                    </div>
                                                </fieldset>

                                                <fieldset class="form-group floating-label-form-group mb-1">
                                                    <label for="user-name">Foto Memakai Seragam (Hanya Foto)</label>
                                                    <input type="file" class="files" id="avatar" name="avatar" accept=".jpg,.png,.svg" required>
                                                </fieldset>
                                                <!-- <div class="row mb-3">
                                        <label for="avatar" class="col-md-4 col-form-label text-md-end">{{ __('Avatar') }}</label>

                                        <div class="col-md-6">
                                            <input id="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar" value="{{ old('avatar') }}" required autocomplete="avatar">

                                            @error('avatar')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div> -->

                                                <fieldset class="form-group floating-label-form-group">
                                                    <label for="user-name">Foto Ijazah/Akte Kelahiran (Hanya Foto)</label>
                                                    <input type="file" class="files" id="dokument" name="dokument" accept=".jpg,.png,.svg">
                                                </fieldset>

                                                <div class="row mb-0">
                                                    <div class="col-md-6 offset-md-4">
                                                        <button type="submit" class="btn btn-primary">
                                                            {{ __('Register') }}
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="mt-5 text-center">
                                            <p>You have an account ? <a href="{{ route('login') }}" class="font-weight-medium text-primary"> Login </a> </p>
                                            <p>© 2020 Nazox. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign</p>
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


    <script type="text/javascript">
        $(document).ready(function() {
            var CSRF_TOKEN = "{{@csrf_token()}}";
            const tglLahir = flatpickr("#tgl_lahir", {
                enableTime: false,
                dateFormat: "Y-m-d",
                required: true
            }); // flatpickr
        });
    </script>

</body>

</html>