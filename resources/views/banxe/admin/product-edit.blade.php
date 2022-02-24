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
                        <form action="" method="POST" class="needs-validation" enctype="multipart/form-data">
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
                                <input class="form-control" value="{{$edit->name}}" name="txtName" placeholder="Please Enter Username" required=""/>
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input class="form-control" 
                                value="{{ $edit->unit_price }} " name="txtPrice" placeholder="Please Enter price" required=""/>
                            </div>                                                    
                            <div class="form-group">
                                <label>Images</label>
                                <input  type="file" name="file">
                                <img alt="{{$edit -> image}}" src="/image/{{ $edit -> image}}" height="200" width="200">
                            </div>                            
                            <div class="form-group">
                                <label>Product Description</label>
                                <textarea name="description"  class="form-control" rows="3">{{$edit->description}}</textarea>
                            </div>
                           
                            <h2 class="page-header">Thông số kỹ thuật</h2>
                             <hr class="mb-4"> 

                            <div class="form-group">
                                <label>Khối lượng bản thân</label>
                                <input required="" class="form-control" value="{{$edit->khoiluongbanthan}}" name="khoiluongbanthan" placeholder="" />
                            </div>

                            <div class="form-group">
                                <label>Dài x Rộng x Cao</label>
                                <input required="" class="form-control" value="{{$edit->dairongcao}}" name="dairongcao" placeholder="" />
                            </div>

                            <div class="form-group">
                                <label>Dung tích bình xăng</label>
                                <input required="" class="form-control" value="{{$edit->dungtichbinhxang}}" name="dungtichbinhxang" placeholder="" />
                            </div>

                            <div class="form-group">
                                <label>Loại động cơ</label>
                                <input required="" class="form-control" value="{{$edit->loaidongco}}" name="loaidongco" placeholder="" />
                            </div>

                            <div class="form-group">
                                <label>Công suất tối da</label>
                                <input required="" class="form-control" value="{{$edit->congsuattoida}}" name="congsuattoida" placeholder="" />
                            </div>

                            <div class="form-group">
                                <label>Mức tiêu thụ nhiên liệu</label>
                                <input required="" class="form-control" value="{{$edit->muctieuthunhienlieu}}" name="muctieuthunhienlieu" placeholder="" />
                            </div>

                            <div class="form-group">
                                <label>Hệ thống khởi động</label>
                                <input required="" class="form-control" value="{{$edit->hethongkhoidong}}" name="hethongkhoidong" placeholder="" />
                            </div>


                             <hr class="mb-4">
                            <button type="submit" onclick="return confirm('bạn có muốn UPDATE chắc không??')" class="btn btn-primary">Update</button>
                            <button type="reset" onclick="history.back()" class="btn btn-default">Cancel</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
    @endsection