@extends('banxe.layout.product_master')
@section('stylesheet')
<link rel="stylesheet" href="/source/index.css">
@endsection
@section('container')
<!-- <div id="motor-banner" class="container-fluid">
    <img src="/image/{{ $chitietpk -> image}}" alt="">
</div> -->
<div id="motor-detail" class="container">
    <div class="row d-none d-lg-block motor-breadscrumb">
        <a class="breadscrumb-parent" href="/">Trang chủ</a>
        <span class="breadscrumb-arrow">❯</span>
        <a class="breadscrumb-parent" href="/">Xe máy</a>
        <span class="breadscrumb-arrow">❯</span>
        <a class="breadscrumb-parent" href="{{route('banxe.phukien')}}">Phụ kiện</a>
        <span class="breadscrumb-arrow">❯</span>
        <a class="breadscrumb-current">{{$chitietpk->name}}</a>
    </div>
    <div class="row overview">
                <div class="col-12 col-lg-7 overview-left">
            <div class="characteristics-image">
                <img src="/image/{{$chitietpk->image}}" alt="" width="510px" height="360px">
            </div>
            <h3 class="d-block d-lg-none">{{$chitietpk->name}}</h3>
            <h4 class="d-block d-lg-none">{{$chitietpk->unit_price}}</h4>
            <div class="characteristics-desc">
                <h5>{{$chitietpk->description}}</h5>
                <p class="text-justify"></p>
            </div>
        </div>
        <div class="col-12 col-lg-5 overview-right">
            <h3 class="d-none d-lg-block">{{$chitietpk->name}}</h3>
            <h4 class="d-none d-lg-block">Giá bán: {{ number_format($chitietpk->unit_price) }}</h4>

            <div class="single-item-caption">
                 <form action="{{ route('banxe.addtocartpk',$chitietpk->id) }}">
                <!--  <input type="submit" class="btn-danger my-2" style="width:300px; height: 40px; border-radius: 5px" value="ADD TO CART" /> -->
                 </form>
            </div>

            <div class="overview-detail">
                <div class="accordion" id="accordion-overview">
                    <div class="accordion-item">
                        <a class="d-flex justify-content-between align-items-center accordion-header" id="heading-design" data-toggle="collapse" data-target="#collapse-design" aria-expanded="true" aria-controls="collapse-design">
                            <span class="align-middle">THIẾT KẾ</span>
                            <i class="fa fa-minus"></i>
                        </a>
                        <div id="collapse-design" class="collapse accordion-body show" aria-labelledby="heading-design" data-parent="#accordion-overview">
                            
                        </div>
                    </div>

                    <div class="accordion-item">
                        <a class="d-flex justify-content-between align-items-center accordion-header" id="heading-tech" data-toggle="collapse" data-target="#collapse-tech" aria-expanded="false" aria-controls="collapse-tech">
                            <span>CÔNG NGHỆ</span>
                            <i class="fa fa-plus"></i>
                        </a>

                        <div id="collapse-tech" class="collapse accordion-body" aria-labelledby="heading-tech" data-parent="#accordion-overview">
                            
                        </div>
                    </div>

                    <div class="accordion-item">
                        <a class="d-flex justify-content-between align-items-center accordion-header" id="heading-utility" data-toggle="collapse" data-target="#collapse-utility" aria-expanded="false" aria-controls="collapse-utility">
                            <span>TIỆN ÍCH & AN TOÀN</span>
                            <i class="fa fa-plus"></i>
                        </a>

                        <div id="collapse-utility" class="collapse accordion-body" aria-labelledby="heading-utility" data-parent="#accordion-overview">
                            
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    

  

</div>
@endsection