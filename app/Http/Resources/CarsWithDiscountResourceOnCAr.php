<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CarsWithDiscountResourceOnCAr extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[
            'id'=>$this->id,
            'discount_name'=>$this->name,
        'discount_value'=>$this->discount_value,
            'discount_type'=>$this->discount_type,
            'discount_start'=>$this->discount_start,
            'discount_end'=>$this->discount_end,
            'discount_number'=>$this->discount_number,
            'discount_days'=>$this->discount_days,

            'car_id'=>$this->car_id,
            'car_name'=>$this->car->name,
             'car_description'=>$this->car->desc,
             'car_color'=>$this->car->color,
             'car_type'=>$this->car->type,
             'car_seats'=>$this->car->seats,

             'car_img'=>asset('uploads').'/' . $this->car->img,


             'car_category_id'=>$this->car->cat_id,
             'car_brand_id'=>$this->car->brand_id,
             'car_model_id'=>$this->car->model_car_id,
             'images' => ImageResource::collection($this->car->images),

        ];
    }
}
