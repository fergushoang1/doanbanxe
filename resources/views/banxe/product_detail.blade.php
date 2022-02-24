@extends('banxe.layout.product_master')
@section('stylesheet')
<link rel="stylesheet" href="/source/index.css">
@endsection
@section('container')
<!-- <div id="motor-banner" class="container-fluid">
    <img src="/image/{{ $sanpham -> image}}" alt="">
</div> -->
<div id="motor-detail" class="container">
    <div class="row d-none d-lg-block motor-breadscrumb">
        <a class="breadscrumb-parent" href="{{Route('banxe.index')}}">Trang chủ</a>
        <span class="breadscrumb-arrow">❯</span>
        <a class="breadscrumb-parent" href="#">Xe máy</a>
        <span class="breadscrumb-arrow">❯</span>
        <a class="breadscrumb-parent" href="{{route('banxe.all_product')}}">Sản phẩm</a>
        <span class="breadscrumb-arrow">❯</span>
        <a class="breadscrumb-current">{{$sanpham->name}}</a>
    </div>
    <div class="row overview">
                <div class="col-12 col-lg-7 overview-left">
            <div class="characteristics-image">
                <img src="/image/{{$sanpham->image}}" alt="" width="510px" height="360px">
            </div>
            <h3 class="d-block d-lg-none">{{$sanpham->name}}</h3>  
          
            <h4 class="d-block d-lg-none"> {{ number_format($sanpham['unit_price']) }} </h4>
            <div class="characteristics-desc">
                <h5>{{$sanpham->description}}</h5>
                <!-- <p class="text-justify"></p> -->
            </div>
        </div>
        <div class="col-12 col-lg-5 overview-right">
            <h3 class="d-none d-lg-block my-5">{{$sanpham->name}}</h3>
            <h4 class="d-none d-lg-block my-3">Giá bán: {{ number_format($sanpham['unit_price']) }} VND</h4>

            <div class="single-item-caption">
                 <form action="{{ route('banxe.addtocart',$sanpham->id) }}">
                 <input type="submit" class="btn-danger my-2" style="width:300px; height: 40px; border-radius: 5px;background-color: #cc0000" value="ADD TO CART" />
                 </form>
            </div>

            <div class="overview-detail">
                <div class="accordion" id="accordion-overview">
                    <div class="accordion-item">
                        <a class="d-flex justify-content-between align-items-center accordion-header" id="heading-design" data-toggle="collapse" data-target="#collapse-design" aria-expanded="true" aria-controls="collapse-design">
                            <span class="align-middle">NGOẠI HÌNH</span>
                            <i class="fa fa-minus"></i>
                        </a>
                        <div id="collapse-design" class="collapse accordion-body show" aria-labelledby="heading-design" data-parent="#accordion-overview">
                            <div class="row ">
                                <div class="col-6 col-lg-4 spec_item design_item mx-3" style=" width: auto; height: auto">
                                <h5>Khối lượng bản thân</h5>
                                <hr>
                                <p>{{$sanpham->khoiluongbanthan}}</p>
                                    
                                </div>
                                <div class="col-6 col-lg-4 spec_item design_item mx-3" style="width: auto; height: auto">
                                    <h5>Dài x Rộng x Cao</h5>
                                    <hr>
                                    <p>{{$sanpham->dairongcao}}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <a class="d-flex justify-content-between align-items-center accordion-header" id="heading-tech" data-toggle="collapse" data-target="#collapse-tech" aria-expanded="false" aria-controls="collapse-tech">
                            <span>ĐỘNG CƠ - BÌNH XĂNG</span>
                            <i class="fa fa-plus"></i>
                        </a>

                        <div id="collapse-tech" class="collapse accordion-body" aria-labelledby="heading-tech" data-parent="#accordion-overview">
                        <div class="row ">
                                <div class="col-6 col-lg-4 spec_item design_item " style=" width: auto; height: auto">
                                <h5>Loại động cơ</h5>
                                <hr>
                                <p>{{$sanpham->loaidongco}}</p>
                                    
                                </div>
                                <div class="col-6 col-lg-4 spec_item design_item " style="width: auto; height: auto">
                                    <h5>Dung tích bình xăng</h5>
                                    <hr>
                                    <p>{{$sanpham->dungtichbinhxang}}</p>
                                </div>
                            </div>
                    </div>

                    <div class="accordion-item">
                        <a class="d-flex justify-content-between align-items-center accordion-header" id="heading-utility" data-toggle="collapse" data-target="#collapse-utility" aria-expanded="false" aria-controls="collapse-utility">
                            <span>KHÁC</span>
                            <i class="fa fa-plus"></i>
                            
                        </a>

                        <div id="collapse-utility" class="collapse accordion-body" aria-labelledby="heading-utility" data-parent="#accordion-overview">
                        <div class="row ">
                                <div class="col-6 col-lg-4 spec_item design_item " style=" width: auto; height: auto">
                                <h5>Hệ thống khởi động</h5>
                                <hr>
                                <p>{{$sanpham->hethongkhoidong}}</p>
                                    
                                </div>
                                <div class="col-6 col-lg-4 spec_item design_item " style="width: auto; height: auto">
                                    <h5>Mức tiêu thụ nhiên liệu</h5>
                                    <hr>
                                    <p>{{$sanpham->muctieuthunhienlieu}}</p>
                                </div>
                                <div class="col-6 col-lg-4 spec_item design_item " style="width: auto; height: auto">
                                    <h5>Công suất tối đa</h5>
                                    <hr>
                                    <p>{{$sanpham->congsuattoida}}</p>
                                </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row title">Bảng giá và màu sắc</div>
    <div class="row detail-item price-list">
        <div class="col-12 color-dropdown d-block d-lg-none">
            <div class="color-dropdown-select">
                <p>Phiên bản đặc biệt</p>
                <div class="color-dropdown-select-item"><i class="fa fa-angle-down"></i></div>
            </div>
            <div class="color-dropdown-menu">
                                <p class="color-dropdown-menu-item active">
                    Phiên bản đặc biệt
                </p>
                                <p class="color-dropdown-menu-item ">
                    Phiên bản tiêu chuẩn
                </p>
                                <p class="color-dropdown-menu-item ">
                    Phiên bản tiêu chuẩn
                </p>
                                <p class="color-dropdown-menu-item ">
                    Phiên bản tiêu chuẩn
                </p>
                            </div>
        </div>

                <div class="col-12 col-lg-6 price-inner show">
            <img src="/image/{{$sanpham->image}}" alt="">
            <div class="price-item">
                <div>
                    <span class="price-label d-block d-lg-inline">Giá bán lẻ đề xuất:</span>
                    <span class="price-value d-block d-lg-inline">
                        {{ number_format($sanpham['unit_price']) }} VND
                    </span>
                </div>
            </div>
        </div>
                
    <div class="row title">Thông số kĩ thuật</div>
    <div class="row justify-content-center detail-item specification">
        <div class="col-12 spec-inner">
                        <div class="row spec-item">
                <div class="col-12 col-lg-5 spec-item-label">Khối lượng bản thân</div>
                <div class="col-12 col-lg-7 spec-item-value"><p>{{$sanpham->khoiluongbanthan}}</p></div>
            </div>
                                    <div class="row spec-item">
                <div class="col-12 col-lg-5 spec-item-label">Dài x Rộng x Cao</div>
                <div class="col-12 col-lg-7 spec-item-value"><p>{{$sanpham->dairongcao}}</p></div>
            </div>
                                                                                                 
                                    <div class="row spec-item">
                <div class="col-12 col-lg-5 spec-item-label">Dung tích bình xăng</div>
                <div class="col-12 col-lg-7 spec-item-value"><p>{{$sanpham->dungtichbinhxang}}</p></div>
            </div>
                                                                                                     
                                    <div class="row spec-item">
                <div class="col-12 col-lg-5 spec-item-label">Loại động cơ</div>
                <div class="col-12 col-lg-7 spec-item-value"><p>{{$sanpham->loaidongco}}</p></div>
            </div>
                                    <div class="row spec-item">
                <div class="col-12 col-lg-5 spec-item-label">Công suất tối đa</div>
                <div class="col-12 col-lg-7 spec-item-value"><p>{{$sanpham->congsuattoida}}</p></div>
            </div>
                                    
                                    <div class="row spec-item">
                <div class="col-12 col-lg-5 spec-item-label">Mức tiêu thụ nhiên liệu</div>
                <div class="col-12 col-lg-7 spec-item-value"><p>{{$sanpham->muctieuthunhienlieu}}</p></div>
            </div>
                                                
                                    <div class="row spec-item">
                <div class="col-12 col-lg-5 spec-item-label">Hệ thống khởi động</div>
                <div class="col-12 col-lg-7 spec-item-value"><p>{{$sanpham->hethongkhoidong}}</p></div>
            </div>
                                    
                                                                 
                                   
                    </div>
    </div>

    {{-- <div class="row title">Thư viện</div>
        <div class="row detail-item library">
                    <div class="col-12 col-lg-6">
                <img class="library-top" src="https://cdn.honda.com.vn/motorbikes/October2021/YAfoIV9dgf1akYSnSjj4.png" alt="">
        </div>
                    <div class="col-12 col-lg-6">
                <img class="library-top" src="https://cdn.honda.com.vn/motorbikes/October2021/C8LgmbBzbjqIJNPmXYpZ.png" alt="">
        </div>
                        <div class="col-6 col-lg-3">
            <img class="library-mid" src="https://cdn.honda.com.vn/motorbikes/October2021/nuRedtB9JREnqcxDDvY3.png" alt="">
        </div>
                        <div class="col-6 col-lg-3">
            <img class="library-mid" src="https://cdn.honda.com.vn/motorbikes/October2021/0EnDyFv3F7odmaohrc3y.png" alt="">
        </div>
    </div> --}}
{{-- <div class="history-ctn">
    <div class="title">Lịch sử đời xe</div>
    <div class="detail-item history">
                <div class="history-carousel-inner-slick w-100">
                        <div class="history-carousel-item">
                <div class="row">
                    <div class="product">
                        <img src="https://cdn.honda.com.vn/motorbike-generation/October2021/dsY9erMFzXb67zyMVzt4.png" alt="">
                        <span>Super Cub C125 2018</span>
                    </div>
                    <div class="divider">
                        <div class="divider-item"></div>
                    </div>
                </div>
            </div>
                        <div class="history-carousel-item">
                <div class="row">
                    <div class="product">
                        <img src="https://cdn.honda.com.vn/motorbike-generation/October2021/7pMk67N4nK1oVrocU8hK.png" alt="">
                        <span>Super Cub C125 2021</span>
                    </div>
                    <div class="divider">
                        <div class="divider-item"></div>
                    </div>
                </div>
            </div>
                    </div>
            </div>

    {{-- <div class="row title">Thư viện</div>
        <div class="row detail-item library">
                    <div class="col-12 col-lg-6">
                <img class="library-top" src="https://cdn.honda.com.vn/motorbikes/October2021/YAfoIV9dgf1akYSnSjj4.png" alt="">
        </div>
                    <div class="col-12 col-lg-6">
                <img class="library-top" src="https://cdn.honda.com.vn/motorbikes/October2021/C8LgmbBzbjqIJNPmXYpZ.png" alt="">
        </div>
                        <div class="col-6 col-lg-3">
            <img class="library-mid" src="https://cdn.honda.com.vn/motorbikes/October2021/nuRedtB9JREnqcxDDvY3.png" alt="">
        </div>
                        <div class="col-6 col-lg-3">
            <img class="library-mid" src="https://cdn.honda.com.vn/motorbikes/October2021/0EnDyFv3F7odmaohrc3y.png" alt="">
        </div>
    </div> --}}
{{-- <div class="history-ctn">
    <div class="title">Lịch sử đời xe</div>
    <div class="detail-item history">
                <div class="history-carousel-inner-slick w-100">
                        <div class="history-carousel-item">
                <div class="row">
                    <div class="product">
                        <img src="https://cdn.honda.com.vn/motorbike-generation/October2021/dsY9erMFzXb67zyMVzt4.png" alt="">
                        <span>Super Cub C125 2018</span>
                    </div>
                    <div class="divider">
                        <div class="divider-item"></div>
                    </div>
                </div>
            </div>
                        <div class="history-carousel-item">
                <div class="row">
                    <div class="product">
                        <img src="https://cdn.honda.com.vn/motorbike-generation/October2021/7pMk67N4nK1oVrocU8hK.png" alt="">
                        <span>Super Cub C125 2021</span>
                    </div>
                    <div class="divider">
                        <div class="divider-item"></div>
                    </div>
                </div>
            </div>
                    </div>
            </div>
</div> --}}
</div>
@endsection