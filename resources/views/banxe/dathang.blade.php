@extends('banxe.layout.master')

@section('container')
<div class="container">
    <div class="row py-5">
        <div class="col-md-4 order-md-2 mb-4">
            <h2 class="d-flex justify-content-between list-group-item align-items-center mb-3" style="height: 55px;">
                <b class="text-muted"> Đơn hàng của bạn</b>
            </h2>
            <ul class="list-group mb-3  mt-5">
               <div class="your-order-item">
									<div>
										@if(Session::has('cart'))
									    @foreach($productCarts as $cart)
									<!--  one item	 -->
										<div class="media py-5">
											<img width="200" src="/image/{{ $cart['item']['image'] }}" alt="img" class="pull-left mx-5 ">
											<div class="media-body">
												<p class="font-large">{{ $cart['item']['name'] }}</p>
                                                <hr>
												<span class="color-gray your-order-info">SL: {{ $cart['qty'] }}</span>
                                                <a class="cart-item-delete col-1 pe-5" href="{{ route('banxe.xoagiohang',$cart['item']['id']) }}"><button class="btn btn-danger fa fa-trash "></button></a>
                                                <br>
                                                <span><b> Price:</b>&nbsp
                                                
												 @if($cart['item']['promotion_price']==0)
                                                    {{ number_format($cart['item']['unit_price']) }}
                                                    @else 
                                                    {{ number_format($cart['item']['promotion_price']) }}
                                                    @endif
                                                
												</span>
											</div>
										</div>
									<!-- end one item -->
									@endforeach
									</div>

									@endif
									<div class="clearfix"></div>
								</div>
       
                <li class="list-group-item align-items-center mt-3 fs-3 d-flex justify-content-between" style="height: 55px;">
                    <span>Tổng tiền (VND):</span>
                    <strong>{{$totalPrice}}</strong>
                </li>
            </ul>
           
        </div>
        <div class="col-md-8 order-md-1">
            <h1 class="mb-5"><b> Thông tin đơn hàng</b> </h1>
            <form class="needs-validation" method="post" novalidate="">
                @csrf
            
                <div class="row mb-5" >
                    
                    <div class="col col-md-9">
                        <label for="username">Họ Tên</label>
                        <div class="input-group" style="height: 40px;">
                            <!-- <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                            </div> -->
                     <input type="text" class="form-control fs-4" autocomplete="off" style="height: 40px;" name="name" placeholder="Họ tên của bạn" required="">
                            <div class="invalid-feedback" style="width: 100%;"> Chưa nhập họ tên </div>
                        </div>
                    </div>
                    <div class="col col-md-3">
                        <label for="lastName">Giới Tính</label>
                            <select type="text" class="form-control  fs-4" name="gender" style="height: 40px;" placeholder="" value="" >
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                                <option value="Khác">Khác</option>
                            </select>                          
                    </div>
                </div>
                <div class="mb-4 " > 
                    <label for="email">Email </label>
                    <input type="email" class="form-control  fs-4"  name="email" style="height: 40px;" placeholder="Email của bạn" required>
                    <div class="invalid-feedback"> Chưa nhập email </div>
                </div>

                <div class="row">
                <div class="mb-4 col-md-6" >
                    <label for="phone">Số điện thoại</label>
                    <input type="number" class="form-control  fs-4" style="height: 40px;" name="phone" placeholder="Số điện thoại của bạn" required="">
                    <div class="invalid-feedback"> Chưa nhập số điện thoại </div>
                </div>

                <div class="mb-4 col-md-6" >
                    <label>Ngày nhận xe</label>
                    <input type="date" class="form-control  fs-4" style="height: 40px;" name="ngaynhanxe" required="">
                    <div class="invalid-feedback"> Chưa nhập ngày nhận xe</div>
                </div>
                </div>

                <div class="mb-4" >
                    <label for="address">Địa chỉ</label>
                    <input type="text" class="form-control  fs-4" style="height: 40px;" name="address" placeholder="Địa chỉ của bạn" required="">
                    <div class="invalid-feedback"> Chưa nhập địa chỉ</div>
                </div>

                <div class="mb-4" >

                    <label for="address">Ghi chú</label>
                    <textarea name="note" class="form-control  fs-4" rows="4" cols="50">
                    </textarea>
                    
                </div>
                                 
                <hr class="mb-4">
                <h4 class="mb-3">Thanh toán</h4>
                <div class="d-block my-3">
             <select type="text" class="form-control  fs-4" name="payment" style="height: 40px;" placeholder="" value="" >
                                <option value="Tiền mặt">Tiền mặt</option>
                                <option value="Ngân hàng">Ngân hàng</option>
                                
                            </select>            
                </div>
                <!-- <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="cc-name">Name on card</label>
                        <input type="text" class="form-control  fs-4" style="height: 40px;" id="cc-name" placeholder="" required="">
                        <small class="text-muted">Full name as displayed on card</small>
                        <div class="invalid-feedback"> Name on card is required </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="cc-number">Credit card number</label>
                        <input type="text" class="form-control  fs-4" style="height: 40px;" id="cc-number" placeholder="" required="">
                        <div class="invalid-feedback"> Credit card number is required </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="cc-expiration">Expiration</label>
                        <input type="date" value="mm/yy" class="form-control  fs-4" id="cc-expiration" style="height: 40px;" placeholder="" required="">
                        <div class="invalid-feedback"> Expiration date required </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="cc-cvv">CVV</label>
                        <input type="text" class="form-control  fs-4" id="cc-cvv" style="height: 40px;" placeholder="" required="">
                        <div class="invalid-feedback"> Security code required </div>
                    </div>
                </div> -->
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block btn btn-danger fs-2" style="height: 50px;" type="submit">Continue to checkout</button>
            </form>
        </div>
    </div>
    
</div>
<script>
    (function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>
@endsection