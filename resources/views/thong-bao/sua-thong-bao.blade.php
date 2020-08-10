@extends('layout')
@section('title')
    Sửa thông báo
@endsection
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                
                    <h4 class="page-title">Sửa thông báo</h4>
                
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                

                {!!Form::open(['action' => ['ThongBaoController@update',$thongbao->id],'method'=> 'PUT']) !!}
                <div class="form-group">
                        {{Form::label('title','Tiêu đề')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('tieu_de_tb',$thongbao->tieu_de_tb,['class'=> 'form-control','placeholder'=>'Nhập tiêu đề'])}}
                    </div> 
                    <div class="form-group">
                        {{Form::label('title','Nội dung')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Textarea('noi_dung_tb',$thongbao->noi_dung_tb,['class'=> 'form-control','placeholder'=>'Nhập nội dung' ,'id'=>'editor4'])}}
                    </div> 
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="canhoid" name="can_ho_id" required focus>
                        <option value="0"  selected>Tất cả căn hộ</option>        
                        @foreach($canho as $can_ho)
                        <option name="can_ho_id" value="{{$can_ho->id}}">{{ $can_ho->name }}</option>
                        @endforeach
                        </select>
                    </div> 
                   
                    </div>                    
                    {{Form::submit('Lưu',['class'=>'btn btn-success waves-effect waves-light'])}}
                    {{Form::button('Hủy',['class'=>'btn btn-purple waves-effect waves-light'])}}
                    {!!Form::close() !!}
            </div>
        </div>
    </div>
    
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('ckfinder/ckfinder.js') }}"></script>
    <script>
		CKEDITOR.replace( 'editor4', {
        filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
        filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
        filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
        filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
        filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
        filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
    } );
		</script>
@endsection