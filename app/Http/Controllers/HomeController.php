<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\prCar;
use App\Models\ProductType;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // phải Đăng nhập mới cho Action
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
    public function postSearch(Request $request){
        $keywords = $request->keywords_submit;
        $search= prCar::where('name','like','%'.$keywords.'%')->get();
        $loai = ProductType::all();

        return view('banxe.search',compact('search','loai'));
    }

}
