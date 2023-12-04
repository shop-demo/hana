<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\bannerModel;
use App\Http\Requests\banner\bannerShow;
use App\Http\Requests\banner\bannerEdit;
use Illuminate\Http\Request;

class bannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Danh sách Slider";
        $bannerList = bannerModel::orderBy('id','DESC')->paginate(10);

        return view('admin.pages.banner.bannerList',compact('bannerList','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Danh sách Slider";
        return view('admin.pages.banner.bannerAdd',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(bannerShow $request)
    {
        $insetBanner = new bannerModel;
        $insetBanner->name = $request->name;
        $insetBanner->code = Tieu_de($request->name);
       
        $insetBanner->image = str_replace("http://localhost:8088/web/hanaShop/public/uploads/slides/", '',$request->image);  
       
        $insetBanner->description = $request->description;
        $insetBanner->link = $request->link;
        $insetBanner->status = $request->status;
       
        $insetBanner->save();

        return redirect()->route('admin.bannerList')->with('success','Thêm dữ liệu thành công'); 
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin\bannerModel  $bannerModel
     * @return \Illuminate\Http\Response
     */
    public function show(bannerModel $bannerModel,$id)
    {
         $title = "Update slider";
        $bannerDetail = bannerModel::find($id);

        return view('admin.pages.banner.bannerEdit',compact('bannerDetail','title'));
        //dd($BannerDetail);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin\bannerModel  $bannerModel
     * @return \Illuminate\Http\Response
     */
    public function edit(bannerEdit $request,bannerModel $bannerModel,$id)
    {

        $bannerUpdate = bannerModel::find($id);
        $bannerUpdate->name = $request->name;
        $bannerUpdate->code = Tieu_de($request->name);
       
        $bannerUpdate->image = str_replace("http://localhost:8088/web/hanaShop/public/uploads/slides/", '',$request->image);  
       
        $bannerUpdate->description = $request->description;
        $bannerUpdate->link = $request->link;
        $bannerUpdate->status = $request->status;
        $bannerUpdate->save();

        return redirect()->route('admin.bannerList')->with('success','Uplate dữ liệu thành công'); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admin\bannerModel  $bannerModel
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, bannerModel $bannerModel,$id)
    {
       
       $bannerDelete = bannerModel::find($id);
       $bannerDelete->delete();
       return redirect()->route('admin.bannerList')->with('success',' Dữ liệu đã xóa thành công'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin\bannerModel  $bannerModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,bannerModel $bannerModel)
    {
       
        $post = $request->checkName;
        if(is_array($post)){
            foreach($post as $key=>$id_post){
               
               $deleteBanner = bannerModel::where('id',$id_post);
                
                $deleteBanner->delete();
  
            }
            return redirect()->route('admin.bannerList')->with('success',' Dữ liệu đã xóa thành công'); 
        }
    }
}
