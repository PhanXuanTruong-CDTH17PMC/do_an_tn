@extends('layout')
@section('title')
    Thêm mới hóa đơn
@endsection
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                
                    <h4 class="page-title">Thêm mới hóa đơn</h4>
                
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <form
                    
                    <div class="form-group">
                        
                        <label>Mã căn hộ<span class="text-danger">*</span></label>
                        <input type="text"  placeholder="Nhập mã căn hộ" class="form-control">
                        <label>Dịch vụ<span class="text-danger">*</span></label>
                        <input type="text"  placeholder="Nhập thông tin dịch vụ" class="form-control">
                        <label>Số lượng<span class="text-danger">*</span></label>
                        <input type="text"  placeholder="Nhập số lượng" class="form-control">
                        <label>Thành tiền<span class="text-danger">*</span></label>
                        <input type="text"  placeholder="Nhập số tiền" class="form-control">
						<label>Tình trạng<span class="text-danger">*</span></label>
                        <input type="text"  placeholder="Nhập tình trạng hóa đơn" class="form-control">
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