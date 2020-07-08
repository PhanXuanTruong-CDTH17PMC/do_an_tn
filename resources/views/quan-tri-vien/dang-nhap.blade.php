@extends('layout')
@section('title')
    Đăng nhập hệ thống
@endsection
@section('main-content')
    <body class="authentication-bg authentication-bg-pattern">
        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">

                            <div class="card-body p-4">
                                <h5 class="auth-title">Đăng nhập</h5>
                                
                                    <form>
                                    <div>s
                                        <label >Tên đăng nhập</label>
                                        <input class="form-control" type="text" id="ten_dang_nhap" name="ten_dang_nhap"  placeholder="Nhập tên đăng nhập">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Mật khẩu</label>
                                        <input class="form-control" type="password" id="mat_khau" name="mat_khau" placeholder="Nhập mật khẩu">
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-danger btn-block" type="submit">Đăng nhập</button>
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
@endsection