<?php

namespace App\Providers;
use App\Http\Controllers\PageController;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use App\Models\Cart;
use App\Models\ProductType;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('banxe.layout.header',function($view){
            $loaisp = ProductType::all();
            $view -> with('loaisp', $loaisp);
        });

        //chia sẻ biến Session('cart'),.. cho các view header.blade.php và checkout.php
        View::composer(['banxe.layout.header','banxe.dathang'],function($view){
            if(Session('cart')){
                $oldCart=Session::get('cart'); //session cart được tạo trong method addToCart của PageController
                $cart=new Cart($oldCart);
                $view->with(['cart'=>Session::get('cart'),'productCarts'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);
            }
        });
    }

        
     



}
