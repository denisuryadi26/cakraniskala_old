<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Register | Nazox - Responsive Bootstrap 4 Admin Dashboard</title>
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

<body class="auth-body-bg d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Registrasi Akun</h4>
                        <p class="card-title-desc">Isi data diri kamu dengan benar dan teliti.</p>

                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset class="form-group floating-label-form-group">
                                        <label for="user-name">Nama Lengkap</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Nama Lengkap" required data-validation-required-message="Harap Masukkan Nama Lengkap">
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset class="form-group floating-label-form-group">
                                        <label for="nik">NIK</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" required data-validation-required-message="Harap Masukkan NIK">
                                        </div>
                                    </fieldset>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset class="form-group floating-label-form-group">
                                        <label for="tempat_lahir">Tempat Lahir</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" required data-validation-required-message="Harap Masukkan Tempat Lahir">
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset class="form-group floating-label-form-group">
                                        <label for="tgl_lahir">Tanggal Lahir</label>
                                        <div class="controls">
                                            <input type="date" class="form-control" name="tgl_lahir" required>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>


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

                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset class="form-group floating-label-form-group">
                                        <label for="group">Jabatan</label>
                                        <div class="controls">
                                            <select class="select2 form-control form-control-lg" id="group" name="group_id" style="padding:10px !important;">
                                                <option value="">Pilih Jabatan</option>
                                                @foreach($group as $item)
                                                @if($item->name === 'Anggota' || $item->name === 'Pengurus/Pelatih' || $item->name === 'Anggota Kehormatan')
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
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
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
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
                                </div>
                                <div class="col-md-6">
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
                                </div>
                            </div>


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

                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset class="form-group floating-label-form-group">
                                        <label for="email">Email</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" id="email" name="email" placeholder="Email" required data-validation-required-message="Harap Masukkan Email">
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset class="form-group floating-label-form-group">
                                        <label for="user-name">User Name</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" id="username" name="username" placeholder="User Name" required data-validation-required-message="Harap Masukkan Username">
                                        </div>
                                    </fieldset>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset class="form-group floating-label-form-group mb-1">
                                        <label for="user-password">Enter Password</label>
                                        <div class="controls">
                                            <input type="password" name="password" id="password" class="form-control" required data-validation-required-message="Harap Masukkan Password" placeholder="Enter Password">
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset class="form-group floating-label-form-group mb-1">
                                        <label for="user-password">Confirm Password</label>
                                        <div class="controls">
                                            <input type="password" data-validation-match-match="password" class="form-control mb-1" placeholder="Re-type Password" required>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>


                            <fieldset class="form-group floating-label-form-group mb-1">
                                <label for="user-name">Foto Memakai Seragam (Hanya Foto)</label>
                                <input type="file" class="files" id="avatar" name="avatar" accept=".jpg,.png,.svg" required>
                            </fieldset>

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
                        <div class="mt-5 text-center">
                            <p>Sudah punya akun? <a href="{{ route('login') }}" class="font-weight-medium text-primary"> Login </a> </p>
                            <p>© {{ now()->year }} Crafted with <i class="mdi mdi-heart text-danger"></i> by Cakra Niskala</p>
                        </div>

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

</body>

</html>