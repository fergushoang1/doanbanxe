@extends('banxe.layout.master')
@section('stylesheet')
<link rel="stylesheet" href="/source/index.css">
@endsection
@section('container')

<div class="banner_custom">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="height:fit-content;">
        <ol class="carousel-indicators" data-quantity-indicator="5">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3" class=""></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4" class=""></li>
        </ol>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <div class="carousel-inner" >
            <div class="carousel-item active">
                <img class="d-block" src="https://cdn.honda.com.vn/home-banner/December2021/qE97uq0sZA5LKNKiu6q5.jpg" alt="0 slide" />
            </div>
            <div class="carousel-item ">
                <img class="d-block" src="https://cdn.honda.com.vn/home-banner/December2021/cZ0Eiop2bpixULANUs2l.jpg" alt="1 slide" />
            </div>
            <div class="carousel-item ">
                <img class="d-block" src="https://cdn.honda.com.vn/home-banner/December2021/aZHFfv8jYFkksrgmQlU6.jpg" alt="2 slide" />
            </div>
            <div class="carousel-item ">
                <img class="d-block" src="https://cdn.honda.com.vn/home-banner/October2021/SONQgyHWammhJY0YDpi4.jpg" alt="3 slide" />
            </div>
            <div class="carousel-item ">
                <img class="d-block" src="https://cdn.honda.com.vn/home-banner/October2021/t6nBUUgKFdonPHCULWqj.jpg" alt="4 slide" />
            
        </div>
    </div>
</div>

<div class="container homepage-product container-fix-ipad">
    <div class="d-flex justify-content-center">
        <div class="homepage-product-head">
            <div class="div-group1">
                <div class="col-line"></div>
                <h3 class="homepage-product-head-title">Sản phẩm</h3>
            </div>
            <div class="homepage-product-head-right">
                <p style="cursor: pointer;" id="homepage-button-xe-may">Xe Máy</p>
                
            </div>
            <div class="homepage-product-head-right-mobile-v2">
                <div class="hp-mobile-select-text">
                    <p>Ô TÔ</p>
                    <div class="hp-mobile-select-item"><i class="fa fa-angle-down"></i></div>
                </div>
                <div class="hp-mobile-select-menu">
                    <p style="cursor: pointer;" id="hp-mobile-select-xe-may" class="active">Ô TÔ</p>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- slide product -->
    <div class="row-custom-product-slide">
        <div class="w-100 h-100 overflow-hidden position-absolute" id="homepage-product-slide-child-id">
            <div class="slide-show-product w-100">
                
                @foreach($car as $car)
                <div class=homepage-product-slide-tab-ctn>
                    <div class="homepage-product-slide-tab">
                        <div class="homepage-product-slide-tab-top">
                            <div class="img-product">
                                <img class="w-100" src="/image/{{ $car -> image}}">
                            </div>
                            <div class="homepage-product-slide-tab-top-ctn-color row m-0">
                                <p style="background-color: #000000"></p>
                                <p style="background-color: #9d9d9d"></p>
                                <p style="background-color: #fdfdfd"></p>
                                <p style="background-color: #c10000"></p>
                            </div>
                        </div>
                        <p class="homepage-product-slide-tab-name">{{ $car -> name}}</p>
                        <p class="homepage-product-slide-tab-proce">
                            Từ {{ number_format($car['unit_price']) }} VNĐ</p>
                        <a href="{{route('product_detail',$car->id)}}">
                            <p class="homepage-product-slide-tab-detail">Xem chi tiết</p>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            <p class="empty-list ">Hiện tại chưa có sản phẩm bạn tìm kiếm</p>
        </div>
        
        
        <div class="homepage-product-slide-show-left"></div>
        <div class="homepage-product-slide-show-right"></div>
    </div>
</div>

@endsection
@section('thongtin')
<div class="container homepage-operation container-fix-ipad">
    <div class="d-flex justify-content-center">
        <div class="homepage-operation-head">
            <div class="div-group1">
                <div class="col-line"></div>
                <h3 class="homepage-product-head-title">Event </h3>
            </div>
        </div>
    </div>
    <div class="row-custom-operation">
        <div class="slide-show-hoat-dong w-100">
            <div class="homepage-operation-slide-tab">
                <a href="#">
                    <div class="homepage-operation-slide-tab-child">
                        <div class="homepage-operation-slide-tab-child-img-ctn">
                            <img class="" src="https://cdn.honda.com.vn/home-active-honda/December2019/1La5InbwRcqogdBxut05.png" style="height:100%">
                        </div>
                        <p>Hỗ trợ môi trường</p>
                    </div>
                </a>
            </div>
            <div class="homepage-operation-slide-tab">
                <a href="#">
                    <div class="homepage-operation-slide-tab-child">
                        <div class="homepage-operation-slide-tab-child-img-ctn">
                            <img class="" src="https://cdn.honda.com.vn/home-active-honda/December2019/oAM2uzhtza1LHc99vjLX.png" style="height:100%">
                        </div>
                        <p>MotorSports</p>
                    </div>
                </a>
            </div>
            <div class="homepage-operation-slide-tab">
                <a href="#">
                    <div class="homepage-operation-slide-tab-child">
                        <div class="homepage-operation-slide-tab-child-img-ctn">
                            <img class="" src="https://cdn.honda.com.vn/home-active-honda/December2019/sy06eY8i0K2r2A8wyh8H.png" style="height:100%">
                        </div>
                        <p>Lái xe an toàn</p>
                    </div>
                </a>
            </div>
            <div class="homepage-operation-slide-tab">
                <a href="#">
                    <div class="homepage-operation-slide-tab-child">
                        <div class="homepage-operation-slide-tab-child-img-ctn">
                            <img class="" src="https://cdn.honda.com.vn/home-active-honda/December2019/fzWt5hDyRV0okeUlLF9f.png" style="height:100%">
                        </div>
                        <p>Hỗ trợ cộng đồng</p>
                    </div>
                </a>
            </div>
            <div class="homepage-operation-slide-tab">
                <a href="#">
                    <div class="homepage-operation-slide-tab-child">
                        <div class="homepage-operation-slide-tab-child-img-ctn">
                            <img class="" src="https://cdn.honda.com.vn/home-active-honda/December2019/rhOemF017zKUKK52xvj4.png" style="height:100%">
                        </div>
                        <p>Hỗ trợ giáo dục</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- <div class="container homepage-news container-fix-ipad">
    <div class="d-flex justify-content-center">
        <div class="homepage-operation-head">
            <div class="div-group1">
                <div class="col-line"></div>
                <h3 class="homepage-product-head-title">Tin tức nổi bật</h3>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="homepage-operation-head row">
            <div class="homepage-new-left pl-0 col-xl-6 col-lg-6 col-12 pr-0 pr-lg-3">
                <a href="/tin-tuc/xe-may/honda-viet-nam-gioi-thieu-phien-ban-hoan-toan-moi-lead-125cc-luot-thanh-lich-lead-cuoc-song">
                    <div class="homepage-new-container" id="homepage-new-container-1">
                        <div class="homepage-new-child-img-container">
                            <img src="https://cdn.honda.com.vn/news-motorbike/December2021/JyIIfRolikjRPVlka0kO.jpg" class="homepage-new-child-img">
                        </div>
                        <p class="homepage-new-publish">13/12/2021</p>
                        <p class="homepage-new-child-img-text big">Honda Việt Nam giới thiệu phiên bản hoàn toàn mới LEAD 125cc - Lướt thanh lịch, “LEAD” cuộc sống -</p>
                        <p class="homepage-new-read-more">Xem thêm</p>
                    </div>
                </a>
            </div>
            <div class="col-xl-6 col-lg-6 col-12 pr-0">
                <div class="homepage-new-right row ">
                    <div class="homepage-news-multi-left pl-0 col-md-6 col-lg-6 col-xl-6">
                        <a href="/tin-tuc/khuyen-mai/rinh-qua-don-xuan-voi-chuong-trinh-tri-an-khach-hang-cuoi-nam-cua-honda-viet-nam-tai-loc-toi-phoi-phoi-tet-honda">
                            <div class="homepage-new-container" id="homepage-new-container-2">
                                <div class="homepage-new-child-img-container-child">
                                    <img src="https://cdn.honda.com.vn/news-promotion/December2021/8YjZNZ6iVaxerEH3bPy3.jpg" class="homepage-new-child-img">
                                </div>
                                <p class="homepage-new-publish">01/12/2021</p>
                                <p class="homepage-new-child-img-text small">Rinh quà đón xuân với chương trình tri ân khách hàng cuối năm của Honda Việt Nam - “Tài lộc tới, phơi phới Tết Honda” -</p>
                                <p class="homepage-new-read-more">Xem thêm</p>
                            </div>
                        </a>
                    </div>
                    <div class="homepage-news-multi-right homepage-news-multi-right-top pr-0 col-md-6 col-lg-6 col-xl-6">
                        <a href="/tin-tuc/khuyen-mai/nhan-uu-dai-100-le-phi-truoc-ba-khi-mua-honda-civic-hr-v-va-brio-trong-thang-12-nam-2021">
                            <div class="homepage-new-container" id="homepage-new-container-3">
                                <div class="homepage-new-child-img-container-child">
                                    <img src="https://cdn.honda.com.vn/news-promotion/December2021/fGzAMp4qir6hXqa4Do1X.png" class="homepage-new-child-img">
                                </div>
                                <p class="homepage-new-publish">01/12/2021</p>
                                <p class="homepage-new-child-img-text small">Nhận ưu đãi 100% lệ phí trước bạ khi mua Honda Civic, HR-V và Brio trong tháng 12 năm 2021</p>
                                <p class="homepage-new-read-more">Xem thêm</p>
                            </div>
                        </a>
                    </div>
                    <div class="homepage-news-multi-left homepage-news-multi-right-bottom homepage-news-multi-bottom pl-0 col-xl-6 col-md-6">
                        <a href="/tin-tuc/o-to/ho-tro-100-le-phi-truoc-ba-cho-khach-hang-mua-xe-honda-civic-honda-hr-v-va-honda-brio-trong-thang-11-nam-2021">
                            <div class="homepage-new-container" id="homepage-new-container-4">
                                <div class="homepage-new-child-img-container-child">
                                    <img src="https://cdn.honda.com.vn/news-car/November2021/INU1DtuvjtiTXsX2kBBw.png" class="homepage-new-child-img">
                                </div>
                                <p class="homepage-new-publish">01/11/2021</p>
                                <p class="homepage-new-child-img-text small">Hỗ trợ 100% lệ phí trước bạ cho khách hàng mua xe Honda Civic, Honda HR-V và Honda Brio trong tháng 11 năm 2021</p>
                                <p class="homepage-new-read-more">Xem thêm</p>
                            </div>
                        </a>
                    </div>
                    <div class="homepage-news-multi-right homepage-news-multi-right-bottom homepage-news-multi-bottom pr-0 col-xl-6 col-md-6">
                        <a href="/tin-tuc/khuyen-mai/honda-viet-nam-trien-khai-chuong-trinh-uu-dai-cuoi-nam-cho-khach-hang-mua-xe-winner-x-khuyen-mai-lon-nhat-chat-cung-honda">
                            <div class="homepage-new-container" id="homepage-new-container-4">
                                <div class="homepage-new-child-img-container-child">
                                    <img src="https://cdn.honda.com.vn/news-promotion/November2021/K7TkCNjIeg8qxBSPFZLc.jpg" class="homepage-new-child-img">
                                </div>
                                <p class="homepage-new-publish">01/11/2021</p>
                                <p class="homepage-new-child-img-text small">Honda Việt Nam triển khai chương trình ưu đãi cuối năm cho khách hàng mua xe WINNER X - “Khuyến mại lớn nhất, chất cùng Honda” -</p>
                                <p class="homepage-new-read-more">Xem thêm</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- </div> -->
@endsection