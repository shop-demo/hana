<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\categoryModel;
use Illuminate\Http\Request;

class adminController extends Controller
{
  
   public function index(){
   
   	
   	return view('admin.pages.dashboard');
   
   }




}
