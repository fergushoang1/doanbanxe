<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Session;


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
}
