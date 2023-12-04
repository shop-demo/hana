<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productModel extends Model
{
    use HasFactory;
    protected $table ='products';
    protected $fillable =['name','code','avatar','album_image','price','sale','description','product_details','category_id','created_at','updated_at','status'];
    
    protected $primariKey ='id';
    
    public $timestamps = true;

//1 sản phẩm thuoc 1 category
	function cat(){
       return $this->belongsTo (categoryModel::class, 'category_id','id');
   }
 
 //1 sản phẩm thuoc 1 category
   public function category(){
   	return $this->hasOne(categoryModel::class,'id','category_id');
   }

  

}
