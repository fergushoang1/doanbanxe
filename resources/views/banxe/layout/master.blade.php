<!DOCTYPE html>
<html lang="vi">
<head>
    <title>Racing</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Racing Home page" />
    <meta name="keywords" content="Racing, xe may, xe máy" />
    <meta name="csrf-token" content="YQSFDDOxrAo5LL94Smf17FnPqi9Cwy1JOsiNxXQy">
    <link rel="stylesheet" type="text/css" href="https://www.honda.com.vn/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://www.honda.com.vn/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="https://www.honda.com.vn/css/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="https://www.honda.com.vn/css/slick-theme.min.css" />
    <!-- <link rel="stylesheet" type="text/css" href="https://www.honda.com.vn/css/common.css?v=1.0" /> -->
    <link rel="stylesheet" href="https://www.honda.com.vn/css/feel-the-performance/app.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"/>
    <link rel="stylesheet" type="text/css" href=https://www.honda.com.vn/css/trang-chu/index.css>
    <link rel="stylesheet" href="/source/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Link Boostrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Link css New -->
    
    <link rel="stylesheet" href="/source/common.css">
    
    <link rel="stylesheet" href="/source/style.css">
    @yield('stylesheet')
<!------ Include the above in your HEAD tag ---------->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>


<body>

        @include('banxe.layout.header')

            <div class="container-fluid" id="container-fluid-id">
        @yield('container')
            <!-- <div class="container"> -->
            
            <!-- ---------homepage-operation------------------------- -->
        @yield('thongtin')
            </div>

        ﻿@include('banxe.layout.footer')
    <a class="scroll-to-top">
        <div class="inner"></div>
    </a>
   <!-- Link BoxChat -->
   <script src="https://uhchat.net/code.php?f=41e01e"></script>

    <script type="text/javascript" src="https://www.honda.com.vn/js/feel-the-performance/app.js"></script>
    <script type="text/javascript" src="https://www.honda.com.vn/js/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.honda.com.vn/js/tween-max.min.js"></script>
    <script type="text/javascript" src="https://www.honda.com.vn/js/jquery.uniform.min.js"></script>
    <script type="text/javascript" src="https://www.honda.com.vn/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="https://www.honda.com.vn/js/popper.min.js"></script>
    <script type="text/javascript" src="https://www.honda.com.vn/js/bootstrap.min.js"></script>
    <!-- cdnjs -->
    <script type="text/javascript" src="https://www.honda.com.vn/js/jquery.lazy.min.js"></script>
    <script type="text/javascript" src="https://www.honda.com.vn/js/jquery.lazy.plugins.min.js"></script>
    <script type="text/javascript" src="https://www.honda.com.vn/js/common.js"></script>
    <script type="text/javascript" src="https://www.honda.com.vn/js/social.js"></script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.3.0/jquery-migrate.min.js" integrity="sha256-+/QytbLYK1r6AApmPrwhgXw7uz4u9H1E65c85XWyHRo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha256-DHF4zGyjT7GOMPBwpeehwoey18z8uiz98G4PRu2lV0A=" crossorigin="anonymous"></script>
<script type="text/javascript" src=https://www.honda.com.vn/js/trang-chu/index.js></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.slide-show-product').slick({
        autoplay: true,
        autoplaySpeed: 2000,
        slidesToShow: 4,
        // variableWidth: true,
        nextArrow: "<img id='product-next' style='cursor: pointer;' src=https://www.honda.com.vn/images/trang-chu/home-page-product-next.png>",
        prevArrow: "<img id='product-back' style='cursor: pointer;' src=https://www.honda.com.vn/images/trang-chu/home-page-product-back.png>",
        responsive: [
            {
                breakpoint: 801,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    centerMode: true
                }
            }
        ]
    });

    $('.slide-show-hoat-dong').slick({
        autoplay: false,
        variableWidth: true,
        infinite: false,
        slidesToShow: 2,
        nextArrow: "<img class='product-next-class' id='product-next' style='cursor: pointer;' src=https://www.honda.com.vn/images/trang-chu/home-page-product-next.png>",
        prevArrow: "<img class='product-prev-class' id='product-back' style='cursor: pointer;' src=https://www.honda.com.vn/images/trang-chu/home-page-product-back.png>",
        responsive: [
            {
                breakpoint: 1025,
                settings: {
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });

    $('.product-prev-class').hide();
    $('.slide-show-hoat-dong').on('afterChange', function (event, slick, currentSlide) {
        console.log(slick.activeBreakpoint > 801);
        var fix = 3;
        if(slick.activeBreakpoint) {
            fix = 2;
        }
        if(currentSlide > slick.slideCount - fix) {
            $('.product-next-class').hide();
        } else {
            $('.product-next-class').show();
        }
        if (currentSlide < 1) {
            $('.product-prev-class').hide();
        } else {
            $('.product-prev-class').show();
        }
    });
    // $(".slide-show-product, .slide-show-hoat-dong").animate({opacity: 1});
    $("#container-fluid-id").animate({opacity: 1});
})
</script>


</html>
