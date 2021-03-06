<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post('/search', [HomeController::class,'postSearch'])->name('search');
Route::get('/search', [HomeController::class,'getSearch'])->name('search');



Route::get('/index', [PageController::class,'getIndex'])->name('banxe.index');

Route::get('/chitietsanpham/{id}', [PageController::class,'show'])->name('product_detail');

Route::get('/add-to-cart/{id}',[PageController::class,'addToCart'])->name('banxe.addtocart');

Route::get('/add-to-cartpk/{id}',[PageController::class,'addToCartpk'])->name('banxe.addtocartpk');

Route::get('/del-cart/{id}',[PageController::class,'delCartItem'])->name('banxe.xoagiohang');

Route::get('/dathang',[PageController::class,'getDathang'])->name('banxe.dathang');

Route::post('/dathang',[PageController::class,'postDathang'])->name('banxe.dathang');

Route::get('/type_product/{type}',[PageController::class,'getType_product'])->name('banxe.type_product');

Route::get('/all_product',[PageController::class,'getAll_product'])->name('banxe.all_product');

Route::group(['prefix'=>'admin'],function(){  
    Route::group(['prefix'=>'category'],function(){
            // admin/category/danhsach
            Route::get('danhsach',[CategoryController::class,'getCateList'])->name('admin.getCateList');
            Route::get('them',[CategoryController::class,'getCateAdd'])->name('admin.getCateAdd');
            Route::post('them',[CategoryController::class,'postCateAdd'])->name('admin.postCateAdd');
            Route::get('sua/{id}',[CategoryController::class,'getCateEdit'])->name('admin.getCateEdit');
            Route::post('sua/{id}',[CategoryController::class,'postCateEdit'])->name('admin.postCateEdit');
        });
 });
// ----------------------------Admin---------------------------------------------
Route::get('/product-add', [LoginController::class,'getProductadd'])->name('banxe.proadd');

Route::post('/product-add', [LoginController::class,'postProductadd'])->name('banxe.proaddpost');

Route::get('/product-edit/{id}', [LoginController::class,'getProductedit'])->name('banxe.proedit');

Route::post('/product-edit/{id}', [LoginController::class,'postProductedit'])->name('banxe.proeditpost');  



Route::get('/product-list', [LoginController::class,'getProductlist'])->name('banxe.prolist');

// -----------------------------------------------------------------------------------
Route::get('/phukien', [PageController::class,'getPhukien'])->name('banxe.phukien');

Route::get('/chitietphukien/{id}', [PageController::class,'getChitietphukien'])->name('banxe.chitietphukien');

Route::get('/customer', [PageController::class,'getCustomer'])->name('banxe.customer');

Route::get('/delete/{id}', [PageController::class,'getDelete'])->name('delete');

Route::get('/deleteb/{id}', [LoginController::class,'getDeletebill'])->name('deleteb');

Route::get('/bill', [LoginController::class,'getBill'])->name('banxe.bill');

Route::get('/billdetail/{id}', [LoginController::class,'getBilldetail'])->name('banxe.billdetail');

Route::post('/billdetail/{id}', [LoginController::class,'postBilldetail'])->name('banxe.billdetailpost');  


Route::get('/done', [PageController::class,'getDone'])->name('banxe.done');

Route::get('/login', [LoginController::class,'getLogin']);
Route::post('/login', [LoginController::class,'postLogin']);

Route::get('/logout', [LoginController::class,'getLogout'])->name('logout');

// ------------------------

// --------------------



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
