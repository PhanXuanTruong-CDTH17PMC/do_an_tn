@extends('layout')
@section('title')
    Thêm mới dịch vụ
@endsection
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                    <h4 class="page-title">Chi tiết dịch vụ</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                {!!Form::open(['action' => ['DichVuController@update', $dichvu->id],'method'=> 'PUT']) !!}
                    <div class="form-group">
                    {{Form::label('title','Tên loại dịch vụ')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('ten_dich_vu',$dichvu->ten_dich_vu,['class'=> 'form-control','placeholder'=>'Nhập tên loại dịch vụ'])}}
                    </div> 
                    </div>
                    <div class="form-group">
                    {{Form::label('title','Đơn vị')}}<span class="text-danger"> *</span>
                    <div class="form-group">
                        <select class="form-control " id="canho" name="don_vi" value = "" required focus>
                            <option value="" >Chọn đơn vị</option>       
                            <option> m3/Tháng</option>  
                            <option> kWh/Tháng</option>  
                            <option> Chiếc/Tháng</option>  
                            <option> Hộ/Tháng</option>  
                            <option> Người/Tháng</option>  
                        </select>
                    </div> 
                     </div> 
                    <div class="form-group">
                    {{Form::label('title','Chi Phí')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('phi_dv',$dichvu->phi_dv,['class'=> 'form-control','placeholder'=>'Nhập chi phí dịch vụ'])}}
                    </div> 
                    {{Form::submit('Lưu',['class'=>'btn btn-success waves-effect waves-light'])}}
                    {{Form::button('Hủy',['class'=>'btn btn-purple waves-effect waves-light'])}}
                    {!!Form::close() !!}
                    </div>         
            </div>
        </div>
    </div>
@endsection