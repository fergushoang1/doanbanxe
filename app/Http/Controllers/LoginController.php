<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


use App\Models\Bill;
use App\Models\BillDetail;
use App\Models\ProductType;
use App\Models\prCar;


use App\Models\Slide;
use App\Models\Product;

use App\Models\Customer;
use App\Models\Phukien;
use App\Models\Cart;
use App\Models\User;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;



class LoginController extends Controller
{
   public function postLogin(Request $request) {
    // Kiểm tra dữ liệu nhập vào
    $rules = [
        'email' =>'required|email',
        'password' => 'required|min:6'
    ];
    $messages = [
        'email.required' => 'Email là trường bắt buộc',
        'email.email' => 'Email không đúng định dạng',
        'password.required' => 'Mật khẩu là trường bắt buộc',
        'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',
    ];
    $validator = Validator::make($request->all(), $rules, $messages);
    
    
    if ($validator->fails()) {
        // Điều kiện dữ liệu không hợp lệ sẽ chuyển về trang đăng nhập và thông báo lỗi
        return redirect('login')->withErrors($validator)->withInput();
    } else {
        // Nếu dữ liệu hợp lệ sẽ kiểm tra trong csdl
        $email = $request->input('email');
        $password = $request->input('password');
 
        if( Auth::attempt(['email' => $email, 'password' =>$password])) {
            // Kiểm tra đúng email và mật khẩu sẽ chuyển trang
            // return redirect('hocsinh');
            return view('banxe.admin.product-list');
        } else {
            // Kiểm tra không đúng sẽ hiển thị thông báo lỗi
            Session::flash('error', 'Email hoặc mật khẩu không đúng!');
            return redirect('login');
        }
    }
}
public function __construct() {
    $this->middleware('auth');
}
    
public function getLogout() {
    Auth::logout();
    return redirect('login');
}
// Tesssssssssssssssssss-------
public function getBill(){
    $bill = Bill::all();
   return view('banxe.admin.bill',compact('bill'));
}

public function getBilldetail($id){
   $billd = Bill::where('id',$id)->first();
   $bills = BillDetail::where('id_bill',$id)->get();
   return view('banxe.admin.billdetail',compact('billd','bills'));
}

public function postBilldetail(Request $product_request,$id){
  
    
     $product = Bill::find($product_request->id);
     
     $product->xacnhan= $product_request->option;
             
     $product->save();

     return redirect()->route('banxe.bill')->withSuccess('Thành công');
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
  $product->khoiluongbanthan = $product_request->khoiluongbanthan;
  $product->dairongcao = $product_request->dairongcao;
  $product->dungtichbinhxang = $product_request->dungtichbinhxang;
  $product->loaidongco = $product_request->loaidongco;
  $product->congsuattoida = $product_request->congsuattoida;
  $product->muctieuthunhienlieu = $product_request->muctieuthunhienlieu;
  $product->hethongkhoidong = $product_request->hethongkhoidong;
  $product->image = $file_name;      
  $product->save();

  return redirect()->route('banxe.proadd')->withSuccess('Thêm mới thành công');

}
public function getProductedit($id){
    $loaisp = ProductType::all();
    $edit = prCar::find($id);
     return view('banxe.admin.product-edit',compact('edit','loaisp'));
 }
 public function postProductedit(Request $product_request,$id){
          
    $product=prCar::find($id);
       if($product_request->has ('file')){
        $file = $product_request->file; 
        // lấy tên file
         $file_name = $file->getclientoriginalName (); 
         // upload
         $file->move(base_path('public\image'),$file_name);              
        }
        else{
            $file_name = $product->image;
        }



   
     $product = prCar::find($product_request->id);
     $product->name = $product_request->txtName;
     $product->id_type = $product_request->option;
     $product->description = $product_request->description;
     $product->unit_price = $product_request->txtPrice;
     $product->new = $product_request->txtnew;
     $product->khoiluongbanthan = $product_request->khoiluongbanthan;
     $product->dairongcao = $product_request->dairongcao;
     $product->dungtichbinhxang = $product_request->dungtichbinhxang;
     $product->loaidongco = $product_request->loaidongco;
     $product->congsuattoida = $product_request->congsuattoida;
     $product->muctieuthunhienlieu = $product_request->muctieuthunhienlieu;
     $product->hethongkhoidong = $product_request->hethongkhoidong;
     $product->image = $file_name;
        
     $product->save();

     return redirect()->route('banxe.prolist')->withSuccess('Sửa thành công');
}







public function getProductlist(){
    $prlist = prCar::all();
   return view('banxe.admin.product-list',compact('prlist'));
}

public function getDeletebill($id){
     $dlt = Bill::find($id);
         $dlt->delete();
        return redirect()->route('banxe.bill')->withSuccess('Xoá thành công');
}
}
