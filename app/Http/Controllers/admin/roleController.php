<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\roleModel;
use Illuminate\Http\Request;
use Route;

class roleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title="Danh sách Role";
        $dataRole = roleModel::all();
        return view('admin.pages.roles.roleList',compact('title','dataRole'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title="Thêm Vai trò";
        $list_r = Route::getRoutes();
        $rou= [];
       
        foreach($list_r as $key=>$r){
           
            $rou_name = $r->getName();//lấy tất cả route

             $pos = strpos($rou_name,'admin');//kt str có 'admin k '
           
           if($pos !== false){ //nếu có thì pust vảo mảng rou 
           
            array_push($rou, $r->getName());
            }
        }
        
        return view('admin.pages.roles.roleAdd',compact('title','rou'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\roleModel  $roleModel
     * @return \Illuminate\Http\Response
     */
    public function show(roleModel $roleModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\roleModel  $roleModel
     * @return \Illuminate\Http\Response
     */
    public function edit(roleModel $roleModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\roleModel  $roleModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, roleModel $roleModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\roleModel  $roleModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(roleModel $roleModel)
    {
        //
    }
}
