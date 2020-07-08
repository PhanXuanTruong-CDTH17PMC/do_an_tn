@extends('layout')
@section('title')
    Thêm mới phương tiện
@endsection
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                
                    <h4 class="page-title">Thêm mới phương tiện</h4>
                
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <form
                    
                    <div class="form-group">
                        
                        <label>Nhãn hiệu phương tiện<span class="text-danger">*</span></label>
                        <input type="text"  placeholder="Nhập nhãn hiệu" class="form-control">
                        <label>Màu sắc<span class="text-danger">*</span></label>
                        <input type="text"  placeholder="Nhập màu sắc phương tiện" class="form-control">
                        <label>Biển số<span class="text-danger">*</span></label>
                        <input type="text"  placeholder="Nhập biển số" class="form-control">
                        <label>Khu vực<span class="text-danger">*</span></label>
                        <input type="text"  placeholder="Nhập khu vực" class="form-control">
                        <label>Loại phương tiện<span class="text-danger">*</span></label>
                        <input type="text  placeholder="Nhập loại phương tiện" class="form-control">
                        <label>Mã căn hộ<span class="text-danger">*</span></label>
                        <input type="text"  placeholder="Nhập mã căn hộ" class="form-control">
                        
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