@extends('layout')
@section('title')
    Chi tiết hóa đơn
@endsection
@section('css')
    <link href="{{ asset('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('js')
    <!-- third party js -->
    <script src="{{ asset('assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/libs/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/init/datatables.init.js') }}"></script>
    <script src="{{ asset('assets/js/pages/init/sweet-alerts-quan-tri-vien.init.js') }}"></script>
    
@endsection
@section('main-content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Chi tiết hóa đơn</h4>         
            <!-- @if (isset($quanTriViens))
                <a href="{{ route('quan-tri-vien.thung-rac') }}" style="margin-bottom:10px;" class="btn btn-info waves-effect waves-light">Xem quản trị viên đã xóa</a>
            @endif -->
        </div>
    </div>
</div>
<!-- end page title --> 
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table  class="table dt-responsive nowrap">
                    <thead>
                        <tr style="background-color: #6c757d;; color:white">
							<th>Tên dịch vụ</th>   
                            <th>Phí dịch vụ</th>   
							<th>Số lượng</th>    
                            <th>Đơn vị</th>
							<th>Thành tiền</th>                     
                       </tr>
                       @if(count($cthoadon)>0)   
                            @foreach($cthoadon as $cthoa_don)
                                <tr>
                                    <th>{{$cthoa_don->ten_dv}}</th>
                                    <th>{{$cthoa_don->phi_dv}}</th>
                                    <th>{{$cthoa_don->so_luong}}</th>
                                    <th>{{$cthoa_don->don_vi}}</th>
                                    <th>{{$cthoa_don->thanh_tien}}</th>
                                </tr>
                            @endforeach
                        @endif
                        
                    </thead>
                    
                </table>
                </br>
                <div>Tổng tiền: <input type="text" style="border:1px solid gray;height:35px;border-radius:10px" value="   {{$hoadon->tong_tien}}"></div>
                </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
@endsection