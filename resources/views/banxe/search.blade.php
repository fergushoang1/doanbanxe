@extends('banxe.layout.master')
@section('stylesheet')
<link rel="stylesheet" href="/source/san-pham.css">
@endsection
@section('container')
<div class="container fix-ctn">
    

    <div class="breadscrumb">
        <a class="parent" href="{{ route('banxe.index') }}">Trang chủ</a>
        <span class="img">❯</span>
        <a class="parent" href="#">Xe máy</a>
        <span class="img">❯</span>
        <a class="current">Danh sách sản phẩm</a>
    </div>

    <p class="row product-TxtTile col-sm-12 col-lg-12 col-md-12 col-lg-1">Lựa Chọn<br> Phong Cách Riêng Của Bạn </p>

    <div class="row  option d-none d-md-block">
        <a class="hide-product btn-outline-filter btn-option mr-4 btn-category btn-active">TẤT CẢ</a>
        @foreach ($loai as $loai)
        <a href="{{route('banxe.type_product',$loai->id)}}" class="hide-product btn-outline-filter btn-option mr-4 mt-3 btn-category">{{ $loai -> name}}</a>
        @endforeach
    </div>

    <div class="homepage-product-head-right-mobile-v2">
        <div class="hp-mobile-select-text">
            <p>TẤT CẢ</p>
            <div class="hp-mobile-select-item"><i class="fa fa-angle-down"></i></div>
        </div>
        <div class="hp-mobile-select-menu">
        
        </div>
    </div>

        <div id="product-container" class="row product-list">
            @foreach ($search as $all)
            <div class="homepage-product-slide-tab col-12 col-xl-3 col-lg-4 col-md-6 show" data-sid="283" data-category="2">
                <div class="homepage-product-slide-tab-top">
                    <div class="img-product">
                        <div class="image-motor-product">
                            <img src="/image/{{$all->image}}">
                        </div>
                    </div>
                    
                </div>
                <div class="name-price-motor w-100">
                    <p class="homepage-product-slide-tab-name w-100">{{$all->name}}</p>
                        <p class="homepage-product-slide-tab-price w-100 homepage-txt-price">Từ  {{ number_format($all['unit_price']) }} VNĐ
                    </p>
                </div>
                <div class="row " >
                    <div class=" homepage-product-slide-tab-detail justify-content-between d-flex ms-5" style="cursor: pointer; bottom: 150px; opacity: 0;">
                        <div class="col  align-self-center">
                            <a class="" href="{{route('product_detail',$all->id)}}">    
                                Xem chi tiết
                            </a>
                        </div>
                        
                        <!-- <div class="col col-5 px-0">
                            <form action="{{ route('banxe.addtocart',$all->id) }}" >
                                <input type="submit" class="type-add" value="ADD TO CART" />
                            </form>
                        </div> -->
                    </div>
                    <div class="overlay-circle-hover"></div>
                </div>
            </div>
            @endforeach
            
        </div>
    <p class="empty-list ">Hiện tại chưa có sản phẩm bạn tìm kiếm</p>
</div>
@endsection