@extends('layout')
@section('title')
    Thêm mới dịch vụ
@endsection
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                
                    <h4 class="page-title">Thêm mới dịch vụ</h4>
                
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <form
                    
                    <div class="form-group">
                        
                        <label>Tên dịch vụ<span class="text-danger">*</span></label>
                        <input type="text"  placeholder="Nhập nhãn hiệu" class="form-control">
                        <label>Loại dịch vụ<span class="text-danger">*</span></label>
                        <input type="text"  placeholder="Nhập màu sắc phương tiện" class="form-control">
                        
                        
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