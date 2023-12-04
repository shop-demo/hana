<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\categoryModel;
use App\Http\Requests\category\addRequest;
use App\Http\Requests\category\editRequest;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //list category
        $title ='Danh sách Thể loại';

        $categoryList = categoryModel::all();

       
        return view('admin.pages.category.categoryList',compact('categoryList','title'));
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //addCategory
        $title ='Thêm Danh mục sản phẩm';
        $categoryList = categoryModel::all();

        return view('admin.pages.category.categoryAdd',compact('categoryList','title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(categoryModel $categoryModel,addRequest $request)
    {
        
       
            $newCategory = new categoryModel;
            $newCategory->name = request()->name;
            $newCategory->code = Tieu_de(request()->name);
            $newCategory->id_cha =request()->id_cha;
            $newCategory->status =request()->status;
            $newCategory->save();

            return redirect()->route('admin.categoryList')->with('success','Thêm mới menu thành công');
            
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\categoryModel  $categoryModel
     * @return \Illuminate\Http\Response
     */
    public function show(categoryModel $categoryModel,$id)
    {
       $title ='Sửa danh mục sản phẩm';
       
       $categoryId = categoryModel::find($id);
      
       return view('admin.pages.category.categoryEdit',compact('categoryId','title'));
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\categoryModel  $categoryModel
     * @return \Illuminate\Http\Response
     */
    public function edit(editRequest $request,categoryModel $categoryModel,$id)
    {
        //
           
            $categoryId = categoryModel::find($id);
            $categoryId->name = request()->name;
            $categoryId->code = Tieu_de(request()->name);
            $categoryId->id_cha =request()->id_cha;
            $categoryId->status =request()->status;
            $categoryId->save();

            return redirect()->route('admin.categoryList')->with('success','update dữ liệu thành công');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\categoryModel  $categoryModel
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, categoryModel $categoryModel,$id)
    {
        
        $categoryId = categoryModel::find($id);
       
        $delete = $categoryId->delete();

        return redirect()->route('admin.categoryList')->with('success','delete dữ liệu thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\categoryModel  $categoryModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,categoryModel $categoryModel)
    {   

        $ids = $request->option;
        $categoryModel::destroy($ids);

        return redirect()->route('admin.categoryList')->with('success','delete dữ liệu thành công');
       
      
    }


}
