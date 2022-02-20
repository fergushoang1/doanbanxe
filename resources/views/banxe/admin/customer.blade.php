@extends('banxe.admin.master')
@section('container')
   <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Customer
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                       
                        <thead>
                            <tr align="center">
                                
                                <th>Tên</th>
                                <th>Giới Tính</th>
                                <th>Email</th>
                                <th>Địa chỉ</th>
                                <th>Số điện thoại</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        @php $stt= 0 @endphp
                        @foreach($cus as $cus)
                        @php $stt++ @endphp
                        @if($stt % 2!= 0)
                        <tr class="odd gradeX" align="center">
                        @else 
                            <tr class="odd gradeC" align="center">
                        @endif
                                <td>{{ $cus -> name}}</td>
                                <td>{{ $cus -> gender}}</td>
                                <td>{{ $cus -> email}}</td>
                                <td>{{ $cus -> address}}</td>
                                <td>{{ $cus -> phone}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection