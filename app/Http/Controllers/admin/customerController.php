<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Admin\cusModel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
//use App\Http\Requests\customers\addCusRequest;

class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $request->validate([
            'name'=> 'required|min:3',
            'email' => 'required|unique:customes,email',
            'password'=> 'required|min:6'

            ]);
    /* ,[
            'name.required'=>'Trường name không được bỏ trống',
            'name.min'=>'Định đạng dữ liệu không đúng',
            'email.required'=>'Trường email không được bỏ trống',
            'email.unique'=>'Email đã có trong hệ thống',
            'password.required' => 'Trường password không được bỏ trống',
            'password.min' => 'Độ dài password phải gồm 6 ký tự',

            ]);*/
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\customerModel  $customerModel
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\customerModel  $customerModel
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\customerModel  $customerModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\customerModel  $customerModel
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
}
