<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Discountmodel extends Model
{
    use HasFactory,HasTranslations;

    public $translatable = ['name'];
    protected $guarded = [];

    public function model(){
        return $this->belongsTo(ModelCar::class,'model_car_id');
    }

}
