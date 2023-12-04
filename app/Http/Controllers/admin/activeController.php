<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\bannerModel;
use App\Models\Admin\cusModel;
use Illuminate\Http\Request;

class activeController extends Controller
{
    //slider----------------------
	public function active(Request $request,$id){

		$upload= bannerModel::find($id);
		$upload->update(['status'=>1]); 
		return redirect()->route('admin.bannerList')->with('success','cập nhật trạng thái thành công'); 	

	}

	public function notActive(Request $request,$id){

		$notActive= bannerModel::find($id);
		$notActive->update(['status'=>0]);
		return redirect()->route('admin.bannerList')->with('success','cập nhật trạng thái thành công'); 	

	}
	
	

	/*------------------------
	cus
	---------------------------*/
	public function activeCustomes(Request $request,$id){
		$uploadStatus= cusModel::find($id);
		$uploadStatus->update(['status'=>1]); 
		return redirect()->route('admin.customeList')->with('success','cập nhật trạng thái thành công'); 
		
	}

	public function notActiveCustomes(Request $request,$id){
		$uploadStatus= cusModel::find($id);
		$uploadStatus->update(['status'=>0]); 
		return redirect()->route('admin.customeList')->with('success','cập nhật trạng thái thành công'); 
	}




}
