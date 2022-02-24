@extends('banxe.admin.master')
@section('container')
   <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                       
                        <thead>
                            <tr align="center">
                                <th>Tên</th>
                                <th>Mô Tả</th>
                                <th>Ảnh minh hoạ</th>
                                <!-- <th>Delete</th> -->
                                <th>Edit</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        @php $stt= 0 @endphp
                        @foreach($cates as $all)
                        @php $stt++ @endphp
                        @if($stt % 2!= 0)
                        <tr class="odd gradeX" align="center">
                        @else 
                            <tr class="odd gradeC" align="center">
                        @endif
                                <td>{{ $all -> name}}</td>
                                <td>{{ $all -> description }}</td>
                                <td><img alt="{{$all -> image}}" src="/imagetype/{{ $all -> image}}" height="200" width="200">
                                </td>
                                <!-- <td  class="center"><i class="fa fa-trash-o fa-fw" style="color: red"></i><a style="color: red"  onclick="return confirm('bạn có chắc Xoá không??')" href="{{route('delete',$all->id)}}"> Delete</a></td> -->
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('admin.postCateEdit',$all->id)}}">Edit</a></td>
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