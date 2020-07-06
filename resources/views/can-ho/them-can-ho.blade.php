@extends('layout')
@section('title')
    Thêm mới căn hộ
@endsection
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                
                    <h4 class="page-title">Thêm mới căn hộ</h4>
                
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <form
                    
                    <div class="form-group">
                        
                        <label>Tầng<span class="text-danger">*</span></label>
                        <input type="text"  placeholder="Nhập số tầng" class="form-control">
                        <label>Diện tích<span class="text-danger">*</span></label>
                        <input type="text"  placeholder="Nhập diện tích" class="form-control">
                        <label>Password<span class="text-danger">*</span></label>
                        <input type="text"  placeholder="Nhập mật khẩu cho tài khoản căn hộ" class="form-control">
                        <label>Loại căn hộ<span class="text-danger">*</span></label>
                        <input type="text"  placeholder="Nhập loại căn hộ" class="form-control">
                        <label>Chủ hộ<span class="text-danger">*</span></label>
                        <input type="text"  placeholder="Nhập tên chủ hộ" class="form-control">
                        
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