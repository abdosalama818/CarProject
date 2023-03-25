<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Discountbrand extends Model
{
    use HasFactory,HasTranslations;

    public $translatable = ['name'];
    protected $guarded = [];


    public function brand(){
        return $this->belongsTo(Brand::class,'brand_id');
    }
}
