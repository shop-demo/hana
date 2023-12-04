<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\productModel;
use App\Models\Admin\categoryModel;
use App\Http\Requests\products\requestAdd_product;
use App\Http\Requests\products\requestEdit_product;

use Illuminate\Http\Request;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //productList
        $title ="Danh sách sản phẩm Products-list";
        $productList = productModel::all();
        $dataProduct = productModel::orderBy('id','DESC')->paginate(10);
        
        return view('admin.pages.products.listProduct',compact('title','dataProduct'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
       return view('admin.pages.products.addProduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(request $request,requestAdd_product $requestAdd_product)
    {
       
        $insetProducts = new productModel;
        $insetProducts->name = $request->name;
        $insetProducts->code = Tieu_de($request->name);
        $insetProducts->avatar = str_replace("http://localhost:8088/web/hanaShop/public/uploads/Products", '',$request->avatar);
        $insetProducts->album_image = str_replace("http://localhost:8088/web/hanaShop/public/uploads/Products", '',$request->album_image);  
       
        $insetProducts->description = $request->description;
        $insetProducts->product_details = $request->product_details;
        $insetProducts->price = $request->price;
        $insetProducts->sale = $request->sale;
        $insetProducts->sale = $request->sale;
        $insetProducts->category_id = $request->category_id;
        $insetProducts->status = $request->status;
        $insetProducts->save();

        return redirect()->route('admin.productList')->with('success','Thêm dữ liệu thành công');  
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\productModel  $productModel
     * @return \Illuminate\Http\Response
     */
    public function show(productModel $productModel,$id)
    {
       
        $title="Cập nhật Sản phẩm";
       
        $productEdit = productModel::find($id);
     
        return view('admin.pages.products.editProduct',compact('productEdit','title'));
        //dd($productEdit);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\productModel  $productModel
     * @return \Illuminate\Http\Response
     */
    public function update(requestEdit_product $request,productModel $productModel,$id)
    {
       
        $productEdit = productModel::find($id);
        $productEdit->name = $request->name;
        $productEdit->code = Tieu_de($request->name);
        $productEdit->avatar = str_replace("http://localhost:8088/web/hanaShop/public/uploads/Products", '',$request->avatar);
        $productEdit->album_image = str_replace("http://localhost:8088/web/hanaShop/public/uploads/Products", '',$request->album_image);  
       
        $productEdit->description = $request->description;
        $productEdit->product_details = $request->product_details;
        $productEdit->price = $request->price;
        $productEdit->sale = $request->sale;
        $productEdit->sale = $request->sale;
        $productEdit->category_id = $request->category_id;
        $productEdit->status = $request->status;
        $productEdit->update();

        return redirect()->route('admin.productList')->with('success','update dữ liệu thành công');  

        
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\productModel  $productModel
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, productModel $productModel,$id)
    {
        
        $deleteId = productModel::find($id);
        $deleteId->delete();
        return redirect()->route('admin.productList')->with('success','Dữ liệu xóa thành công');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\productModel  $productModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,productModel $productModel)
    {
        $post = $request->checkName;
        if($post){
           foreach($post as $key=>$items){
            $deleteId = productModel::where('id',$items);
            $deleteId->delete();

           }
        return redirect()->route('admin.productList')->with('success','Dữ liệu xóa thành công');
       
        }
       
        
    }


}
