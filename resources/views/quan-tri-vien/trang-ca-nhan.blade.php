@extends('layout')
@section('title')
    Trang cá nhân
@endsection
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Trang cá nhân</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-xl-12">
            <div class="card-box text-center">
                <img src="{{ asset('assets/images/users/user-1.jpg') }}" class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">

                <h4 class="mb-0">Name</h4>
                <p class="text-muted"></p>
                <a  class="btn btn-success btn-xs waves-effect mb-2 waves-light">Đổi tên</a>
                <a  class="btn btn-danger btn-xs waves-effect mb-2 waves-light">Đổi mật khẩu</a>

                <div class="text-left mt-3">
                    <h4 class="font-13 text-uppercase">Thông tin</h4>
                    <p class="text-muted font-13 mb-3">
                        Chào, tôi là Admin.<br>
                        Ngày 29/02/1997 là sinh nhật tôi.<br>
                        Dự là vào những năm 2025 tôi sẽ là 1 trong những lập trình viên sáng giá nhất thế giới, còn hiện tại tôi chỉ mới bắt đầu với Framework Laravel!<br>
                        Châm ngôn học Laravel của tôi là <i><b>"<a href="https://laravel.com/">Laravel</a> is easy!"</b></i>
                    </p>
                    <p class="text-muted mb-2 font-13"><strong>Họ tên:</strong> <span class="ml-2">Admin</span></p>
                    <p class="text-muted mb-2 font-13"><strong>Điện thoại :</strong><span class="ml-2">0868.3838.97</span></p>
                    <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ml-2 ">MinhTan97.Hardworking@gmail.com</span></p>
                </div>

                <ul class="social-list list-inline mt-3 mb-0">
                    <li class="list-inline-item">
                        <a href="https://www.facebook.com/profile.php?id=100015080948455" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github-circle"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection