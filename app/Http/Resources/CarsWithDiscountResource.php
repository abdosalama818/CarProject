<?php

namespace App\Http\Resources;

use App\Models\Car;
use Illuminate\Http\Resources\Json\JsonResource;

class CarsWithDiscountResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'discount_name'=>$this->name,
            'discount_value'=>$this->discount_value,
            'discount_type'=>$this->discount_type,
            'discount_start'=>$this->discount_start,
            'discount_end'=>$this->discount_end,
            'discount_number'=>$this->discount_number,
            'discount_days'=>$this->discount_days,
            'model_car_id'=>$this->model_car_id,
            'cat_id'=>$this->cat_id,
            'brand_id'=>$this->brand_id,
            'cars'=> CarsResource::collection(Car::where('model_car_id',$this->model_car_id)
            ->orWhere('cat_id',$this->cat_id)
            ->orWhere('brand_id',$this->brand_id)->get())


        ];
    }
}

