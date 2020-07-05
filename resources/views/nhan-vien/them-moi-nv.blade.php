@extends('layout')
@section('title')
    Thêm mới nhân viên
@endsection
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                
                    <h4 class="page-title">Thêm mới nhân viên</h4>
                
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <form
                    
                    <div class="form-group">
                        
                        <label>Tên nhân viên<span class="text-danger">*</span></label>
                        <input type="text"  placeholder="Nhập tên nhân viên" class="form-control">
                        <label>CMND<span class="text-danger">*</span></label>
                        <input type="text"  placeholder="Nhập số CMND" class="form-control">
                        <label>Số điện thoại<span class="text-danger">*</span></label>
                        <input type="text"  placeholder="Nhập số điện thoại" class="form-control">
                        <label>Email<span class="text-danger">*</span></label>
                        <input type="text"  placeholder="Nhập email" class="form-control">
                        <label>Ngày sinh<span class="text-danger">*</span></label>
                        <input type="date"  placeholder="Ngày sinh" class="form-control">
                        <label>Mật khẩu<span class="text-danger">*</span></label>
                        <input type="text"  placeholder="Nhập mật khẩu" class="form-control">
                        <label>Loại tài khoản<span class="text-danger">*</span></label>
                        <input type="text"  placeholder="Loại tài khoản" class="form-control">
                        <label>Bộ phận<span class="text-danger">*</span></label>
                        <input type="text"  placeholder="Bộ phận" class="form-control">
                    </div>
                    <div class="form-group text-left mb-0">
                        <button type="submit" class="btn btn-success waves-effect waves-light">Lưu</button>
                        <a href="#" class="btn btn-purple waves-effect waves-light">Hủy</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection