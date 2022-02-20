<header>
    <div>
        <ul>
            <li>
                <div class="social-pc">
                    <div class="b-social" id="btn-social-pc">
                        <div class="btn-cart">
                            <div class="beta-select" >
                                <i class="fa fa-shopping-cart me-2 ms-2"></i>
                                <p class="d-inline ">Giỏ Hàng </p> (@if(Session::has('cart')){{ Session('cart')->totalQty }} 
                                    @else Trống @endif) 
                                <i class="fa fa-chevron-down ms-3 me-2"></i>
                            </div>
                        </div>
                        
                        <div class="social drop_hide"  id="drop_list">
                            <div class="btn-accord " style="width: 400px;">
                                @if(Session::has('cart'))
                                <div class="cart">
                                    <div class="beta-dropdown cart-body">
                                        <div class="cart-scroll">
                                        @foreach($productCarts as $product)
                                        <div class="cart-item">
                                            <div class="row ms-1 mt-5">
                                                <div class="col col-3  ">
                                                    <img src="/image/{{$product['item']['image']}}" width="50px" alt="image"></div>
                                                <span class="col col-5  text-start d-inline">{{ $product['item']['name'] }}</span>
                                                <span class="quantity  col-2  d-inline">Sl: {{ $product['qty'] }}</span>
                                                <a class="cart-item-delete col-1 pe-2" href="{{ route('banxe.xoagiohang',$product['item']['id']) }}"><button class="btn btn-danger fa fa-trash "></button></a>

                                            </div>
                                        </div>
                                        <hr>
                                        @endforeach
                                        </div>
                                        <div class="cart-caption row">
                                            <div class="cart-total col m-3"><b> Tổng tiền: </b>&nbsp <span class="cart-total-value">{{ $cart->totalPrice }} VND</span></div>
                                            <div class="center">
                                                <label class="btn-oder" for="oder">
                                                    <a href="{{route('banxe.dathang')}}" id="oder" class="dathang">Đặt Hàng</a>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                @endif
                            </div>
                           
                        </div>
                    </div>
                </div>
                
            </li>
        </ul>
        <div>
            <button>
                <i class="fa fa-bars"></i>
            </button>
            <a href="{{route('banxe.index')}}">
            <img src="/image/xe1.png" alt="" style="width: auto; height: 88px;">
            </a>
        </div>
    </div>
    <nav>
        
        <ul>
            <li>
                <a href="/">Trang chủ</a>
            </li>
            <li class="arrow ">
                <a href="#">Giới thiệu</a>
                <ul>
                    <li>
                        <a href="#">Giới thiệu về Racing</a>
                    </li>
                    <li>
                        <a href="#">Lịch sử phát triển</a>
                    </li>
                    <li>
                        <a href="#">Tầm nhìn 2030</a>
                    </li>
                </ul>
            </li>
            <li class="arrow ">
                <a href="#">Xe máy</a>
                <ul>                   
                    <li>
                    <a href="{{route('banxe.all_product')}}"> Sản Phẩm </a>
                    </li>
                    <li><a href="{{route('banxe.phukien')}}">Phụ tùng</a></li>
                    <li class="arrow">
                        <a href="#">Phụ kiện</a>
                        <ul>
                            <li><a href="#">Giới thiệu chung</a></li>
                            <li><a href="#">Danh sách phụ kiện</a></li>
                        </ul>
                    </li>
                    <li class="arrow">
                        <a href="#">Dịch vụ sau bán hàng</a>
                        <ul>
                            <li><a href="#">Chính sách bảo hành</a></li>
                            <li><a href="#">Bảo hành điện tử</a></li>
                            <li><a href="#">Bảo dưỡng định kỳ</a></li>
                            <li><a href="#">Hướng dẫn sử dụng xe</a></li>
                            <li><a href="#">Thông báo triệu hồi</a></li>
                        </ul>
                    </li>
                    <li class="arrow">
                        <a href="#">Đại lý</a>
                        <ul>
                            <li><a href="#">Danh sách Đại lý</a></li>
                            <li><a href="#">Thông báo mở Đại lý</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="arrow ">
                <a href="#">Ô Tô</a>
                <ul>
                    <li>
                        <a href="#">Chiến dịch "Feel The Performance"</a>
                    </li>
                    <li>
                        <a href="#">Sản phẩm</a>
                    </li>
                    <li><a href="#">Phụ tùng</a></li>
                    <li class="arrow">
                        <a href="#">Phụ kiện</a>
                        <ul>
                            <li><a href="#">Giới thiệu chung</a></li>
                            <li><a href="#">Danh sách phụ kiện</a></li>
                        </ul>
                    </li>
                    <li class="arrow">
                        <a href="#">Dịch vụ sau bán hàng</a>
                        <ul>
                            <li><a href="#">Chính sách bảo hành</a></li>
                            <li><a href="#">Bảo hành điện tử</a></li>
                            <li><a href="#">Bảo dưỡng định kỳ</a></li>
                            <li><a href="#">Hướng dẫn sử dụng xe</a></li>
                            <li><a href="#">Thông báo triệu hồi</a></li>
                        </ul>
                    </li>
                    <li class="arrow">
                        <a href="#">Đại lý</a>
                        <ul>
                            <li><a href="#">Danh sách Đại lý</a></li>
                            <li><a href="#">Thông báo mở Đại lý</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Bán hàng Doanh nghiệp</a>
                    </li>
                    <li>
                        <a href="#">Tin tức</a>
                    </li>
                </ul>
            </li>
            <li class="arrow ">
                <a href="#">My Car+</a>
                <ul>
                    <!--  -->
                </ul>
            </li>
            <li class="">
                <a href="#">Đóng góp xã hội</a>  
            </li>
            <li class="arrow ">
                <a href="#">Lái xe an toàn</a>
                <ul>
                    <li>
                        <a href="#">Trung tâm Đào tạo lái xe an toàn</a>
                    </li>
                    <li>
                        <a href="#">Hoạt động đào tạo</a>
                    </li>
                    <li>
                        <a href="#">Tin tức</a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="#">MotorSports</a>
            </li>
            <li class="arrow ">
                <a href="#">Tin tức</a>
                <ul>
                    <li><a href="#">Tin tức chung</a></li>
                    <li><a href="#">Tin tức xe máy</a></li>
                    <li><a href="#">Tin tức ô tô</a></li>
                    <li><a href="#">Doanh số bán hàng</a></li>
                    <li><a href="#">Khuyến mãi</a></li>
                    <li><a href="#">Đóng góp Xã hội</a></li>
                    <li>
                        <a href="#">Lái xe an toàn</a>
                    </li>
                    <li><a href="#">MotorSports</a></li>
                    <li><a href="#">Các tin khác</a></li>
                </ul>
            </li>
            <li class="arrow">
                <a href="#">Thăm dò ý kiến Khách hàng</a>
                <ul>
					<li><a href="#">Ô tô</a></li>
					<li><a href="#">Xe máy</a></li>
                </ul>
            </li>
            
			<li><a href="#">Câu hỏi thường gặp</a></li>
            <li>
                <a href="#">Liên hệ</a>
            </li>
            <li class="arrow">
                <a href="#">Tuyển dụng</a>
                <ul>
                    <li><a href="#">Môi trường làm việc</a></li>
                    <li><a href="#">Tin tức sự kiện</a></li>
                    <li><a href="#">Cơ hội việc làm</a></li>
                    <li><a href="#">Quy trình ứng tuyển</a></li>
                    <li><a href="#">Câu hỏi thường gặp</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Mời thầu</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-ellipsis-h"></i></a>
                <ul>
                    <li>
                        <a href="#i">Đóng góp xã hội</a>
                    </li>
                    <li class="arrow ">
                        <a href="#">Lái xe an toàn</a>
                        <ul>
                            <li>
                                <a href="#">Trung tâm Đào tạo lái xe an toàn</a>
                            </li>
                            <li>
                                <a href="#">Hoạt động đào tạo</a>
                            </li>
                            <li>
                                <a href="#">Tin tức</a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="#">MotorSports</a>
                    </li>
                    <li class="arrow ">
                        <a href="#">Tin tứcc</a>
                        <ul>
                            <li><a href="#">Tin tức chung</a></li>
                            <li><a href="#">Tin tức xe máy</a></li>
                            <li><a href="#">Tin tức ô tô</a></li>
                            <li><a href="#">Doanh số bán hàng</a></li>
                            <li><a href="#">Khuyến mãi</a></li>
                            <li><a href="#">Đóng góp Xã hội</a></li>
                            <li><a href="#">Lái xe an toàn</a></li>
                            <li><a href="#">MotorSports</a></li>
                            <li><a href="#">Các tin khác</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
<script>
    var selectField = document.getElementById("btn-social-pc");
    var list = document.getElementById("drop_list");
    selectField.onclick = function(){
        list.classList.toggle("drop_hide");
    }

</script>
</header>