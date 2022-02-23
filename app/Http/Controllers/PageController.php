<?php

namespace App\Http\Controllers;

use App\Models\prCar;
use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\Customer;
use App\Models\Phukien;
use App\Models\Cart;
use App\Models\User;
use App\Models\Bill;
use App\Models\BillDetail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Mail;
use App\Mail\OrderMailer;

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

    public function addToCartpk(Request $request,$id){
        $product=Phukien::find($id);
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
            $dataMail = [];

            $customer=new Customer;
                $customer->name=$req->name;
                $customer->gender=$req->gender;
                $customer->email=$req->email;
                $customer->address=$req->address;
                $customer->phone=$req->phone;
                $customer->note=$req->note;
                $customer->save();
                $dataMail['customer'] = $customer->toArray();
            
            $bills=new Bill;
                $bills->id_customer=$customer->id;
                $bills->date_order=date('Y-m-d');
                $bills->name=$req->name;
                $bills->email=$req->email;
                $bills->gender=$req->gender;
                $bills->address=$req->address;
                $bills->phone=$req->phone;

        foreach($cart->items as $key=>$value){
            }

                $bills->quantity=$cart->totalQty;
                $bills->unit_price=$value['item']['unit_price'];       
                $bills->total=$cart->totalPrice;
                $bills->payment=$req->payment;
                $bills->note=$req->note;
                $bills->ngaynhanxe=$req->ngaynhanxe;
                $bills->save();
                $dataMail['bills'] = $bills->toArray();

        foreach($cart->items as $key=>$value){
            $bill_detail=new BillDetail;
                
                $bill_detail->tenxe=$value['item']['name'];
                $bill_detail->id_bill=$bills->id;
                $bill_detail->id_product=$key;
                $bill_detail->quantity=$value['qty'];
                $bill_detail->unit_price=$value['price']/$value['qty'];
                $bill_detail->save();
                $dataMail['donhang']['chitiet'][] = $bill_detail->toArray();
                $dataMail['donhang']['items'][] = $value;
        }
 
    Mail::to($bills->email)
            ->send(new OrderMailer($dataMail));
    
    // -----------DONE-----------------------
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
    

    

    



    



     public function getPhukien(){
         $phukien = Phukien::all();
        return view('banxe.phukien',compact('phukien'));
    }

    public function getChitietphukien($id){
        $chitietpk= Phukien::where('id',$id)->first();
        return view('banxe.chitietphukien',compact('chitietpk'));
       
    }

    public function getCustomer(){
         $cus = Customer::all();
        return view('banxe.admin.customer',compact('cus'));
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

    public function getDone(){
        return view('banxe.done');
    }
}
