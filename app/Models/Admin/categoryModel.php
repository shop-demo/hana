<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoryModel extends Model
{
    use HasFactory;
    protected $table ='category';
    protected $fillable =['name','code','id_cha','created_at','updated_at','status'];
    protected $primariKey ='id';
    public $timestamps = true;
   
    
    //1 category có nhiều product :1-n query trong cùng 1 bảng
    function pro(){
       return $this->hasMany(productModel::class, 'category_id','id');
   }

}
