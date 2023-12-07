<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\homeController;
use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\admin\categoryController;
use App\Http\Controllers\admin\productController;
use App\Http\Controllers\admin\bannerController;
use App\Http\Controllers\admin\activeController;
use App\Http\Controllers\admin\khachhangController;
use App\Http\Controllers\admin\roleController;
use App\Http\Controllers\admin\userNameController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*Client*/
Route::get('/',[homeController::class,'index'])->name('home.index');
//login
Route::get('/login',[homeController::class,'login'])->name('login');
Route::post('/login',[homeController::class,'loginPost'])->name('loginPost');

//logout
Route::post('/logout',[homeController::class,'logout'])->name('logout');

//đăng ký
Route::post('/register',[homeController::class,'register'])->name('register');


/*Admin*/
Route::group(['prefix'=>'admin','middleware'=>'cus'], function () {

	/*Category*/
	Route::get('/',[adminController::class,'index'])->name('admin.dashboard');
	Route::get('/categoryList',[categoryController::class,'index'])->name('admin.categoryList');
	Route::get('/categoryAdd',[categoryController::class,'create'])->name('admin.categoryAdd');
	Route::post('/categoryAdd',[categoryController::class,'store'])->name('admin.categoryPost');
	Route::get('/categoryEdit/{id}',[categoryController::class,'show'])->name('admin.categoryEdit');
	Route::post('/categoryEdit/{id}',[categoryController::class,'edit'])->name('admin.categoryEdit_post');

	Route::delete('/categoryDelete/{id}',[categoryController::class,'delete'])->name('admin.categoryDelete'); 
	Route::delete('/categoryDeleteAll',[categoryController::class,'destroy'])->name('admin.categoryDeleteAll'); 

	/*Products*/

	Route::get('/productList',[productController::class,'index'])->name('admin.productList');
	Route::get('/productAdd',[productController::class,'create'])->name('admin.productAdd');
	Route::post('/productAdd',[productController::class,'store'])->name('admin.productAdd_Post');
	Route::get('/productEdit/{id}',[productController::class,'show'])->name('admin.productEdit');
	Route::put('/productEdit/{id}',[productController::class,'update'])->name('admin.productUpdate');

	Route::delete('/productDelete/{id}',[productController::class,'delete'])->name('admin.productDelete');
	Route::delete('/productsDelete',[productController::class,'destroy'])->name('admin.productsDelete');

	//banner

	Route::get('/bannerList',[bannerController::class,'index'])->name('admin.bannerList');
	Route::get('/bannerAdd',[bannerController::class,'create'])->name('admin.bannerAdd');
	Route::post('/bannerAdd',[bannerController::class,'store'])->name('admin.bannerAdd_post'); 
	Route::get('/bannerEdit/{id}',[bannerController::class,'show'])->name('admin.bannerEdit');
	Route::post('/bannerEdit/{id}',[bannerController::class,'edit'])->name('admin.bannerEdit_post');

	Route::delete('/bannerDelete/{id}',[bannerController::class,'delete'])->name('admin.bannerDelete');
	Route::delete('/banner_DeleteAll',[bannerController::class,'destroy'])->name('admin.banner_DeleteAll');
   //active banner
	Route::put('/active/{id}',[activeController::class,'active'])->name('admin.active');
	Route::put('/notActive/{id}',[activeController::class,'notActive'])->name('admin.notActive');

	//customes
	Route::get('/customeList',[khachhangController::class,'index'])->name('admin.customeList');
	Route::get('/customeAdd',[khachhangController::class,'create'])->name('admin.customeAdd');
	Route::post('/customeAdd',[khachhangController::class,'store'])->name('admin.customeAdd_Post');
	Route::get('/customeEdit/{id}',[khachhangController::class,'show'])->name('admin.customeEdit');
	Route::put('/customeEdit/{id}',[khachhangController::class,'edit'])->name('admin.customeUpdate');
	Route::delete('/customeDelete/{id}',[khachhangController::class,'delete'])->name('admin.customeDelete');
	Route::delete('/customeDelete',[khachhangController::class,'destroy'])->name('admin.customeDestroy');
	//active
	Route::put('/activeCustomes/{id}',[activeController::class,'activeCustomes'])->name('admin.activeCustomes');
	Route::put('/notActiveCustomes/{id}',[activeController::class,'notActiveCustomes'])->name('admin.notActiveCustomes');
	//active

	/*--roles---------------------
	------------------------------*/
	Route::get('/roleList',[roleController::class,'index'])->name('admin.roleList');
	Route::get('/roleAdd',[roleController::class,'create'])->name('admin.roleAdd');

	/*Login tài khoản admin */
	Route::get('/login',[userNameController::class,'index'])->name('admin.login');


});
//ajax
//Đăng ký
	Route::group(['prefix'=>'customes'], function(){
		
	});

//frontend

Route::get('/{slug}',[homeController::class,'view'])->name('view');
//Route::get('/{slug}',[homeController::class,'login'])->name('login');
Route::get('/{category}/{slug}',[homeController::class,'productDetail'])->name('productDetail');




