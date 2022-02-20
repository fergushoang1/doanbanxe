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
                            <small>Add</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" class="needs-validation" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Chọn loại xe</label>
                                <select name="option" class="form-control">
                                    <option>--- Chọn loại xe ---</option>
                                    @foreach($loaisp as $loai)
                                <option  value="{{$loai->id}}">{{$loai->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="txtName" placeholder="Please Enter Username" required=""/>
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input class="form-control" name="txtPrice" placeholder="Please Enter price" required=""/>
                            </div>                                                    
                            <div class="form-group">
                                <label>Images</label>
                                <input type="file" name="file" required="">
                            </div>                            
                            <div class="form-group">
                                <label>Product Description</label>
                                <textarea name="description" class="form-control" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Product Status</label>
                                <label class="radio-inline">
                                    <input name="txtnew" value="1" checked="" type="radio" required="">Visible
                                </label>
                                <label class="radio-inline">
                                    <input name="txtnew" value="2" type="radio">Invisible
                                </label>
                            </div>
                            <h2 class="page-header">Thông số kỹ thuật</h2>
                             <hr class="mb-4"> 

                            <div class="form-group">
                                <label>Khối lượng bản thân</label>
                                <input class="form-control" name="khoiluongbanthan" placeholder="" required=""/>
                            </div>

                            <div class="form-group">
                                <label>Dài x Rộng x Cao</label>
                                <input class="form-control" name="dairongcao" placeholder="" required=""/>
                            </div>

                            <div class="form-group">
                                <label>Dung tích bình xăng</label>
                                <input class="form-control" name="dungtichbinhxang" placeholder="" required=""/>
                            </div>

                            <div class="form-group">
                                <label>Loại động cơ</label>
                                <input class="form-control" name="loaidongco" placeholder="" required=""/>
                            </div>

                            <div class="form-group">
                                <label>Công suất tối da</label>
                                <input class="form-control" name="congsuattoida" placeholder="" required=""/>
                            </div>

                            <div class="form-group">
                                <label>Mức tiêu thụ nhiên liệu</label>
                                <input class="form-control" name="muctieuthunhienlieu" placeholder="" required=""/>
                            </div>

                            <div class="form-group">
                                <label>Hệ thống khởi động</label>
                                <input class="form-control" name="hethongkhoidong" placeholder="" required=""/>
                            </div>
                            <button type="submit" class="btn btn-default">Product Add</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
    @endsection