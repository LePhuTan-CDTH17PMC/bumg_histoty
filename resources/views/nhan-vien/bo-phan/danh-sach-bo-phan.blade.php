@extends('layout')
@section('title')
    Danh sách bộ phận
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
    <!-- third party js ends -->

    <!-- Sweet Alert2 js-->
    <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    
    <!-- Datatables init -->
    <script src="{{ asset('assets/js/pages/init/datatables.init.js') }}"></script>

    <!-- Sweet Alert2 QuanTriVien init js-->
    <script src="{{ asset('assets/js/pages/init/sweet-alerts-quan-tri-vien.init.js') }}"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
@endsection
@section('main-content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Nhân viên</h4>
            <a href="/danh-sach-bo-phan/create" style="margin-bottom:10px;" class="btn btn-primary waves-effect waves-light">Thêm mới</a>
            
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
                            <th>ID</th>
                            <th>Bộ phận</th>
                            <th></th>
                        </tr>

                        @if (count($bophan )>1)
                            @foreach ($bophan as $bo_phan )
                                    <tr>
                                        <th>{{$bo_phan-> id}}</th>
                                        <th>{{$bo_phan-> ten_bo_phan}}</th>
                                        <th style="width: 200px">
                                            <div>
                                                <button type="button" class="btn "><a href="/danh-sach-bo-phan/{{$bo_phan->id}}/edit" class="btn btn-info" ><i class="fa fa-edit"></i></a></button>
                                                <button  type="submit" class="btn delete-confirm" id = "delete" onclick="return confirm('Bạn có chắc muốn xóa?')"data-toggle="modal" data-target="#dialog1"><a href="{{ route('bo-phan.xoa', ['id' => $bo_phan->id]) }}"  class="btn btn-danger delete-confirm"><i class="fa fa-trash"></i></a></button>
                                            </div>
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
<!-- @include('models.deleted_success')
<script>    
    // $("#dialog1").modal('show');
</script> -->
<script>
$('.delete-confirm').on('click', function (event) {
        event.preventDefault();
        var url = $(this).attr('href');
        Swal.fire({
            title: 'Bạn có chắc muốn xóa?',
            text: "Dữ liệu sẽ bị xóa tạm thời!",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Đồng ý',
            cancelButtonText: 'Hủy'
        }).then(function(result) {
            if (result.value) {
                window.location.href = url;
            }
        });
    });
</script>
@endsection