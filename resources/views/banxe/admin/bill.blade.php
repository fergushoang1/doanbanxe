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
                        <h1 class="page-header">Bill </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>Tên khách</th>
                                <th>Ngày order</th>
                                <th>Tổng tiền</th>
                                <th>Thanh toán</th>
                                 <th>Chi tiết</th>                              
                                <th>Delete</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            

                             @foreach($bill as $b)
                            <tr class="odd gradeX" align="center">
                                <td>{{$b->name}}</td>                  
                                <td>{{$b->date_order}}</td>
                                <td>{{ number_format($b->total) }}</td>
                                <td>{{$b->payment}}</td>        
                                <td class="center">
                                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                                <a href="{{route('banxe.billdetail',$b->id)}}"> Chi tiết</a></td>                      
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i>
                                <a href="{{route('deleteb',$b->id)}}"> Delete</a></td>
                                
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