<?php

namespace App\Http\Controllers;

use App\Models\prCar;
use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\Customer;
use App\Models\Cart;
use App\Models\User;
use App\Models\Bill;
use App\Models\BillDetail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;


class CategoryController extends Controller
{
    public function getCateList()
    {
        // $cates=ProductType::all();
        // return view('banxe.admin.cate-list', compact('cates'));
        $cates = ProductType::all();
        return view('banxe.admin.cate-list', compact('cates'));
    }
    //Them
    public function getCateAdd()
    {
        $cateadd = ProductType::all();
        return view('banxe.admin.cate-add',compact('cateadd'));
    }
    
    public function postCateAdd(Request $product_request)
    {
        if($product_request->has ('file')){
            $file = $product_request->file; 
            // lấy tên file
             $file_name = $file->getclientoriginalName (); 
             // upload
             $file->move(base_path('public\imagetype'),$file_name);              
            }

       
         $product = new ProductType();
         $product->name = $product_request->name;   
         $product->description = $product_request->mota;    
         $product->image = $file_name;      
         $product->save();

         return redirect()->route('admin.postCateAdd')->withSuccess('Thêm mới thành công');

    }



}
