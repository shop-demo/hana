<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\categoryModel;
use App\Models\Admin\productModel;
use App\Models\Admin\bannerModel;
use App\Models\Admin\cusModel;
use App\Http\Requests\cus\cusLogin;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Auth;

class homeController extends Controller
{

  public function index(){

    $data=productModel::all();
    $data_Slides = bannerModel::where(['status'=>1])->orderBy('id','DESC')->take(4)->get();

    return view('welcome',compact('data_Slides'));
  }

    //Show Sản phẩm - products

  public function view($slug){

    $category = categoryModel::where('code',$slug)->first();

     //lấy sản phẩm theo danh mục
    $dataProduct = categoryModel::where('code',$slug)->first()->pro;

    return view('frontend.pages.productList',compact('category','dataProduct'));
  }
  
   //Chi tiết sản phẩm ProductDtail
  public function productDetail($slug,$category){

    $show_ProductDetail = productModel::where('code',$category)->first();

    return view('frontend.pages.productDetail',compact('show_ProductDetail'));
  }
  
  /*----------------Đăng nhập-----------------------*/
  
  public function login(){

    return view('frontend.pages.customers.register');
  }

  
  public function loginPost(Request $request){

    $validator = Validator::make($request->all(), [

          'email'=>'required|email|exists:customes',
          'password' => 'required|min:6'
          ],[
           'email.required'=>'Trường email không được bỏ trống',
           'email.email'=>'Địa chỉ email không đúng định dạng',
           'email.exists'=>'Địa chỉ email không tồn tại trong hệ thống',
          
          'password.required' => 'Trường password không được bỏ trống',
          'password.min' => 'Độ dài password phải gồm 6 ký tự'
         
           ]

          );

       if($validator->fails()) {
   
          return $validator->validate();
          //return response()->json(['error'=>$validator->errors()->all()]); 

        }else{
          

          $login = Auth::guard('cus')->attempt($request->only('email','password'));
          
          if($login){

            return response()->json(['data'=>Auth::guard('cus')->user()->name]);
         
          }else{
             return response()->json(['mgs'=>'Tài khoản đăng nhập không chính xác']);
          }
          
      
       }
  }

  /*Logout-*/
  public function logout(){
    $logoutName = Auth::guard('cus')->logout();
    
    return redirect()->route('login')->with('success','Bạn vừa đăng xuất thành công');
    
  }

 
  /*------------Đăng ký-ajax*--------------*/
  public function register(Request $request){

    $validator = Validator::make($request->all(), [
          'name' => 'required|min:3',
          'email'=>'required|unique:customes|email',
          'password' => 'required|min:6'
          ],[
          'name.required'=>'Trường name không được bỏ trống',
          'name.min'=>'Định đạng dữ liệu không đúng',
          'email.required'=>'Trường email không được bỏ trống',
          'email.unique'=>'Email đã có trong hệ thống',
          'password.required' => 'Trường password không được bỏ trống',
          'password.min' => 'Độ dài password phải gồm 6 ký tự',

           ]

          );

          /*
          $validator->validate();
          return response()->json(['data'=>"thành công"]); 
          */
      
         if ($validator->fails()) {
         return $validator->validate();
         
        }else{
          $register = new cusModel;
          $register->name = $request->name;
          $register->email = $request->email;
          $register->password = bcrypt($request->password);
          $register->save();
         
          return response()->json(['data'=>"success"]); 

       }
    
  }










}
