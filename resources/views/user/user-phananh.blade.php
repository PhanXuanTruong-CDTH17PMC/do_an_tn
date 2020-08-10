@extends('user.layout.user-layout')
@section('title')
    Phản ánh
@endsection
@section('css')

    <link href="{{ asset('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
  
    <link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('js')

    
@endsection
@section('main-content')

<div class="row">
        <div class="col-lg-12">
            <div class="card-box">
            <h1>Gửi phản ánh cho ban quản lý</h1>
            @if($errors->any())
                 {{$errors}}
                @endif
                {!!Form::open(['action' => ['UserPhanAnhController@store'],'method'=> 'POST']) !!} 
                    <div class="form-group">
                        {{Form::label('title','Nội dung')}}<span class="text-danger"> 
                        *</span>
                        <div class="form-group">
                            {{Form::Textarea('noi_dung_pa','',['class'=> 'form-control','placeholder'=>'Nhập nội dung'])}}
                        </div> 
                        
                    </div>
                    {{Form::submit('Lưu',['class'=>'btn btn-success waves-effect waves-light'])}}
                    {{Form::button('Hủy',['class'=>'btn btn-purple waves-effect waves-light'])}}
                    {!!Form::close() !!}
            </div>
        </div>
    </div>
@endsection