<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];


//many to many relation between car & order
    public function cars(){
        return $this->belongsToMany(Car::class,'order_details');
    }
//user has many order
    public function user(){
        return $this->belongsTo(User::class);
    }

}
