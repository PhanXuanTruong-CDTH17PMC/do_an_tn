<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>
    @section('title')
        Đăng nhập hệ thống
    @endsection
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="styles
@section('main-content')
    <body class="   ">
        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">

                            <div class="card-body p-4">
                                <h5 class="auth-title">Đăng nhập</h5>
                                
                                    <form action="/admin-info">
                                    <div>
                                        <label >Tên đăng nhập</label>
                                        <input class="form-control" type="text" id="ten_dang_nhap" name="ten_dang_nhap"  placeholder="Nhập tên đăng nhập">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Mật khẩu</label>
                                        <input class="form-control" type="password" id="mat_khau" name="mat_khau" placeholder="Nhập mật khẩu">
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-danger btn-block" >Đăng nhập</button>
                                    </div>

                                </form>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->
    </body>