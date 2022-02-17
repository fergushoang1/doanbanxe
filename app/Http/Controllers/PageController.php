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

class PageController extends Controller
{
    public function getIndex(){
        $car = prCar::all();
        return view('banxe.index', compact('car'));
    }

     public function show($id){
        $sanpham= prCar::where('id',$id)->first();
        return view('banxe.product_detail',compact('sanpham'));
       
    }

    public function addToCart(Request $request,$id){
        $product=prCar::find($id);
        $oldCart=Session('cart')?Session::get('cart'):null;
        $cart=new Cart($oldCart);
        $cart->add($product,$id);
        $request->session()->put('cart',$cart);
        return redirect()->back();
    }

    public function delCartItem($id){
        $oldCart=Session::has('cart')?Session::get('cart'):null;
        $cart=new Cart($oldCart);
        $cart->removeItem($id);
        if(count($cart->items)>0){
            Session::put('cart',$cart);
        }else Session::forget('cart');
        return redirect()->back();
    }

    public function getDathang(){
       
       
        return view('banxe.dathang');
       
    }

     public function postDathang(Request $req){
        $cart = Session::get('cart');

        $customer=new Customer;
        $customer->name=$req->name;
        $customer->gender=$req->gender;
        $customer->email=$req->email;
        $customer->address=$req->address;
        $customer->phone=$req->phone;
        $customer->note=$req->note;
        $customer->save();
          
        $bills=new Bill;
        $bills->id_customer=$customer->id;
        $bills->date_order=date('Y-m-d');
        $bills->name=$req->name;
        $bills->email=$req->email;
        $bills->gender=$req->gender;
        $bills->address=$req->address;
        $bills->phone=$req->phone;

        foreach($cart->items as $key=>$value){
        $bills->tenxe=$value['item']['name'];}

        $bills->quantity=$cart->totalQty;
        $bills->unit_price=$value['item']['unit_price'];       
        $bills->total=$cart->totalPrice;
        $bills->payment=$req->payment;
        $bills->note=$req->note;
        $bills->ngaynhanxe=$req->ngaynhanxe;
        $bills->save();

        foreach($cart->items as $key=>$value){
            $bill_detail=new BillDetail;
            $bill_detail->id_bill=$bills->id;
            $bill_detail->id_product=$key;
            $bill_detail->quantity=$value['qty'];
            $bill_detail->unit_price=$value['price']/$value['qty'];
            $bill_detail->save();
        }

       Session::forget('cart');
        return view('banxe.done');
    }

     public function getAll_product(){
        $all = prCar::all();
        $loai = ProductType::all();
        return view('banxe.all_product',compact('loai','all'));
    }
    
    public function getType_product($type){
        $type_product = prCar::where('id_type',$type)->get();
        $loai1 = ProductType::all();
        return view('banxe.type_product',compact('type_product','loai1'));
    }
    

    public function getProductadd(){
         $loaisp = ProductType::all();
        return view('banxe.admin.product-add',compact('loaisp'));
    }

    public function postProductadd(Request $product_request){
          
           if($product_request->has ('file')){
            $file = $product_request->file; 
            // lấy tên file
             $file_name = $file->getclientoriginalName (); 
             // upload
             $file->move(base_path('public\image'),$file_name);              
            }

       
         $product = new prCar();
         $product->name = $product_request->txtName;
         $product->id_type = $product_request->option;
         $product->description = $product_request->description;
         $product->unit_price = $product_request->txtPrice;
         $product->new = $product_request->txtnew;

         $product->image = $file_name;      
         $product->save();

         return redirect()->route('banxe.proadd')->withSuccess('Thêm mới thành công');

    }

    public function getProductlist(){
         $prlist = prCar::all();
        return view('banxe.admin.product-list',compact('prlist'));
    }

    public function getDelete($id){
         $dlt = prCar::find($id);

         $destinationPath =  'public\image'. $dlt->image;
        if(file_exists($destinationPath)){
        unlink($destinationPath);
        }
                  

         $dlt->delete();
        return redirect()->route('banxe.prolist')->withSuccess('Xoá thành công');
    }

    public function getBill(){
         $bill = Bill::all();
        return view('banxe.admin.bill',compact('bill'));
    }

     public function getBilldetail($id){
        $billd = Bill::where('id',$id)->first();
        return view('banxe.admin.billdetail',compact('billd'));
       
    }

    public function getDone(){
       
        return view('banxe.done');
    }



}