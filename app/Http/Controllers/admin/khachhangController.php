<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\cusModel;
use Illuminate\Http\Request;
use App\Http\Requests\customers\addCusRequest;
use App\Http\Requests\customers\editCusRequest;

class khachhangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title ="Danh khách khách hàng";
        $dataCus = cusModel::orderBy('id','DESC')->get();
        return view('admin.pages.customers.listCustomers',compact('title','dataCus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $title ="Thêm khách hàng"; 
       return view('admin.pages.customers.addCustomers',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(addCusRequest $request)
    {
       $dataNew = new cusModel;
       $dataNew->name = $request->name;
       $dataNew->email = $request->email;
       $dataNew->password =bcrypt($request->password);
       $dataNew->status = $request->status;
       $dataNew->save();
       return redirect()->route('admin.customeList')->with('success','Thêm Khách hàng thành công');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\cusModel  $cusModel
     * @return \Illuminate\Http\Response
     */
    public function show(cusModel $cusModel,$id)
    {
       $cusData = cusModel::find($id);
       $title ="Sửa khách hàng"; 
       return view('admin.pages.customers.editCustomers',compact('title','cusData'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\cusModel  $cusModel
     * @return \Illuminate\Http\Response
     */
    public function edit(editCusRequest $request,cusModel $cusModel,$id)
    {
      $cusEdit = cusModel::find($id);
      $cusEdit->name = $request->name;
      $cusEdit->email = $request->email;
      $cusEdit->password = $request->password;
      $cusEdit->status = $request->status;
      $cusEdit->save();

      return redirect()->route('admin.customeList')->with('success','Sửa dữ liệu khách hàng thành công'); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\cusModel  $cusModel
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, cusModel $cusModel,$id)
    {
        $cusDelete = cusModel::find($id);
        $delete = $cusDelete->delete();

        return redirect()->route('admin.customeList')->with('success','delete dữ liệu thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\cusModel  $cusModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,cusModel $cusModel)
    {

        $Id_Input = $request->check;
       
        if($Id_Input){
           
           foreach($Id_Input as $key=>$item){
            $deleteCheck = cusModel::where('id',$item);
            $deleteCheck->delete();

           }
        }   
        
        return redirect()->route('admin.customeList')->with('success','Dữ liệu xóa thành công');

   }




}
