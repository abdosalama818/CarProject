<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CarsResource extends JsonResource
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
            'name'=>$this->name,
            'description'=>$this->desc,
            'color'=>$this->color,
            'type'=>$this->type,
            'seats'=>$this->seats,
            'img'=>asset('uploads').'/' . $this->img,

            'category_id'=>$this->cat_id,
            'brand_id'=>$this->brand_id,
            'model_id'=>$this->model_car_id,
            'images' => ImageResource::collection($this->images),

        ];
    }
}


/*
  $table->text('name')->nullable();
            $table->text('desc')->nullable();//description
            $table->text('price')->nullable();
            $table->text('color')->nullable();
            $table->text('seats')->nullable();
            $table->text('type')->nullable();
            $table->text('img')->nullable();//main image */
