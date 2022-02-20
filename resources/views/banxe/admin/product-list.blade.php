@extends('banxe.admin.master')
@section('container')
  <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                     @if(Session::has('success'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>{{Session::get('success')}}</strong>
                    </div>
                    @endif
                    <div class="col-lg-12">
                        <h1 class="page-header">Product
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Loại</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($prlist as $pr)
                            <tr class="odd gradeX" align="center">
                                <td>{{$pr->id}}</td>
                                <td>{{$pr->name}}</td>
                                <td>{{$pr->unit_price}}</td>
                                <td><img alt="{{$pr -> image}}" src="/image/{{ $pr -> image}}" height="200" width="200"></td>
                                <td>{{$pr->id_type}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i>
                                    <a href="{{route('delete',$pr->id)}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('banxe.proedit',$pr->id)}}">Edit</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        @endsection