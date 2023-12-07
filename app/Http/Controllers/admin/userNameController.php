<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\cusModel;
use Illuminate\Http\Request;

class userNameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.user.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Admin\cusModel  $cusModel
     * @return \Illuminate\Http\Response
     */
    public function show(cusModel $cusModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\cusModel  $cusModel
     * @return \Illuminate\Http\Response
     */
    public function edit(cusModel $cusModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\cusModel  $cusModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cusModel $cusModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\cusModel  $cusModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(cusModel $cusModel)
    {
        //
    }
}
