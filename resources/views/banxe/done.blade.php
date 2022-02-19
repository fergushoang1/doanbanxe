@extends('banxe.layout.master')
@section('stylesheet')
<link rel="stylesheet" href="/source/index.css">
@endsection
@section('container')
{{-- ------------------------------------------- --}}

<div class="container ">
    <div class=" content p-5">
        <div class="row mt-5" style="justify-content: center;">
            <div class="done"><img src="https://www.clker.com/cliparts/c/Q/p/h/r/O/white-check-hi.png" alt="" srcset=""></div>
        </div>
        <div class="row" style="margin-top:50px;">
            <h1><b> Đặt Hàng Thành Công</b></h1>
        </div>
        <div class="row mt-5">
           <h2>Vui lòng vào Mail để xem lại Đơn Hàng của bạn</h2>
        </div>
        <div class="row food-oder">
            <h1>Cảm Ơn Bạn đã đặt hàng</h1>
            <h2>Chúng tôi sẽ liên hệ lại với bạn sau khi nhận được đơn hàng này.</h2>
            <h3>Mọi thắc mắc xin liên hệ vào Hotline: <b> 1800 8001</b> (Miễn phí cho tất cả thuê bao)</h3>
        </div>
        <div class="row">
             <a href="{{route('banxe.index')}}" class="col"><button class="btn-danger mt-5" style="width: 150px; height: 40px; border-radius: 20px">Trở về trang chủ</button></a>
        </div>
    </div>
</div>

{{-- ----------------------------------------------}}
@endsection