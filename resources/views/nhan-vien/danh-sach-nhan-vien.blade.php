@extends('layout')
@section('title')
    Danh sách Nhân viên
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
    
    <!-- Datatables init -->
    <script src="{{ asset('assets/js/pages/init/datatables.init.js') }}"></script>

    <!-- Sweet Alert2 QuanTriVien init js-->
    <script src="{{ asset('assets/js/pages/init/sweet-alerts-quan-tri-vien.init.js') }}"></script>
    
@endsection
@section('main-content')
<!-- start page title -->
<div class="row container">
    <div class="col-12">
        <div >
            <h2 class="page-title">Nhân viên</h2>
            <a href="{{ Route('danh-sach-nhan-vien.them-nhan-vien') }}" style="margin-bottom:10px;" class="btn btn-primary waves-effect waves-light">Thêm mới</a>
            <a href="/danh-sach-bo-phan   " style="margin-bottom:10px;" class="btn btn-primary waves-effect waves-light">Quản lý bộ phận</a>
			<a href="/loai-account   " style="margin-bottom:10px;" class="btn btn-primary waves-effect waves-light">Quản lý loại tài khoản</a><br>
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
                        <tr style="background-color: #6c757d; color:white">
                            <th>ID</th>
                            <th>Họ tên</th>
                            <th>CMND</th>
                            <th>SĐT</th>
                            <th>Email</th>
                            <th>Ngày sinh</th>
                            <th>Tên đăng nhập</th>
                            <th>Bộ phận</th>
                            <th>Loại tài khoản</th>
                            <th style="width:15
                            0px"></th>
                            
                        </tr>
                        @if (count($nhanvien )>0)
                            @foreach ($nhanvien as $nhan_vien )
                                    <tr>
                                        <th>{{$nhan_vien-> id_nhan_vien}}</th>
                                        <th>{{$nhan_vien-> ho_ten_nv}}</th>
                                        <th>{{$nhan_vien-> CMND}}</th>
                                        <th>{{$nhan_vien-> SDT}}</th>
                                        <th>{{$nhan_vien-> email}}</th>
                                        <th>{{$nhan_vien-> ngay_sinh}}</th>
                                        <th>{{$nhan_vien-> username}}</th>
                                        <th>{{$nhan_vien-> tenbophan}}</th>
                                        <th>{{$nhan_vien-> loai_account}}</th>
                                        <th>
                                            <div>
<<<<<<< Updated upstream
                                                <button type="button" class="btn "><a href="/danh-sach-nhan-vien/{{$nhan_vien->id_nhan_vien}}/edit" class="btn btn-info" ><i class="fa fa-edit"></i></a></button>
                                                <a type="button" href="{{ route('nhan-vien.xoa', ['id' => $nhan_vien->id_nhan_vien]) }}"  class="btn btn-danger delete-confirm"><i class="fa fa-trash"></i></a>
                                            </div>			
=======
                                            <a href="{{Route('danh-sach-nhan-vien.sua-nhan-vien',['id'=>$nhan_vien->id_nhan_vien])}}" class="btn btn-info" >Edit</a>
                                            {!!Form::open(['action'=> ['NhanVienController@destroy',$nhan_vien->id_nhan_vien],'method' =>'POST','class'=>'pull-right'])!!}
                                            {{Form::hidden('_method','DELETE')}}
                                            {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                            {!!Form::close()!!}
                                            </div>
>>>>>>> Stashed changes
                                        </th>
                                    </tr>                              
                            @endforeach   
                        @endif
                    </thead>
                </table>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
@endsection