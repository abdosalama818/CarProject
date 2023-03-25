<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded = [];


//many to many relation between car & order
    public function cars(){
        return $this->belongsToMany(Car::class,'order_details');
    }
//user has many order
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

}
