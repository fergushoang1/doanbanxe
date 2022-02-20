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
                            <small>Edit</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Chọn loại xe</label>
                               <select name="option" class="form-control">
                                    <option value="0" >--- Chọn loại xe ---</option>
                                    @foreach($loaisp as $loai)
                                   
                            <option  value="{{$loai->id}}" <?php if ($edit['id_type']==$loai['id']):?>
                            selected="selected" 
                            <?php endif ?> >
                                        {{$loai->name}}</option>
                                    
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" value="{{$edit->name}}" name="txtName" placeholder="Please Enter Username" />
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input class="form-control" value="{{$edit->unit_price}}" name="txtPrice" placeholder="Please Enter price" />
                            </div>                                                    
                            <div class="form-group">
                                <label>Images</label>
                                <input type="file" name="file">
                                <img alt="{{$edit -> image}}" src="/image/{{ $edit -> image}}" height="200" width="200">
                            </div>                            
                            <div class="form-group">
                                <label>Product Description</label>
                                <textarea name="description"  class="form-control" rows="3">{{$edit->description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Product Status</label>
                                <label class="radio-inline">
                                    <input name="txtnew" value="1" checked="" type="radio">Visible
                                </label>
                                <label class="radio-inline">
                                    <input name="txtnew" value="2" type="radio">Invisible
                                </label>
                            </div>
                            <h2 class="page-header">Thông số kỹ thuật</h2>
                             <hr class="mb-4"> 

                            <div class="form-group">
                                <label>Khối lượng bản thân</label>
                                <input class="form-control" value="{{$edit->khoiluongbanthan}}" name="khoiluongbanthan" placeholder="" />
                            </div>

                            <div class="form-group">
                                <label>Dài x Rộng x Cao</label>
                                <input class="form-control" value="{{$edit->dairongcao}}" name="dairongcao" placeholder="" />
                            </div>

                            <div class="form-group">
                                <label>Dung tích bình xăng</label>
                                <input class="form-control" value="{{$edit->dungtichbinhxang}}" name="dungtichbinhxang" placeholder="" />
                            </div>

                            <div class="form-group">
                                <label>Loại động cơ</label>
                                <input class="form-control" value="{{$edit->loaidongco}}" name="loaidongco" placeholder="" />
                            </div>

                            <div class="form-group">
                                <label>Công suất tối da</label>
                                <input class="form-control" value="{{$edit->congsuattoida}}" name="congsuattoida" placeholder="" />
                            </div>

                            <div class="form-group">
                                <label>Mức tiêu thụ nhiên liệu</label>
                                <input class="form-control" value="{{$edit->muctieuthunhienlieu}}" name="muctieuthunhienlieu" placeholder="" />
                            </div>

                            <div class="form-group">
                                <label>Hệ thống khởi động</label>
                                <input class="form-control" value="{{$edit->hethongkhoidong}}" name="hethongkhoidong" placeholder="" />
                            </div>


                             <hr class="mb-4">
                            <button type="submit" class="btn btn-default">Update</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
    @endsection