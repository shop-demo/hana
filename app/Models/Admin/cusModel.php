<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class cusModel extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    
    protected $table ='customes'; //, `name`, `email`, `password`, `created_at`, `updated_at`
    protected $fillable =['name','email','password','created_at','updated_at','status'];
    
    protected $primariKey ='id';
    
    public $timestamps = true;
}
