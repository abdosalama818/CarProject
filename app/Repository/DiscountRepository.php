<?php

namespace App\Repository ;

use App\Models\Cat;
use App\Models\Brand;
use App\Interface\BrandInterface;
use App\Interface\DiscountInterface;
use App\Models\Bigdiscount;
use App\Models\Discount;


class DiscountRepository implements DiscountInterface{
   
 
    public function store($request){
       

      if(!empty($request->cat_id) ||  !empty($request->brand_id) || !empty($request->model_id)){
  

      Bigdiscount::create([
         
  
        'cat_id'=>$request->cat_id,
        'brand_id'=> $request->brand_id,
        'model_car_id'=>$request->model_id,
        
      

          'name'=>[
            'ar' => $request->name_ar,
            'en' => $request->name_en 
                 ],
           'discount_value'=>$request->discount_value,
           'discount_type'=>$request->discount_type,
           
           'discount_number'=>$request->discount_number,
           'discount_start'=>$request->discount_start,
           'discount_end'=>$request->discount_end,
           
      ]);
    }else{
      Discount::create([
        'car_id'=> $request->car_id,
     

          'name'=>[
            'ar' => $request->name_ar,
            'en' => $request->name_en 
                 ],
           'discount_value'=>$request->discount_value,
           'discount_type'=>$request->discount_type,
           
           'discount_number'=>$request->discount_number,
           'discount_start'=>$request->discount_start,
           'discount_end'=>$request->discount_end,
           
      ]);
    } 
     /*  
      if(!empty($request->cat_id) ){
        Bigdiscount::create([
         
  
          'cat_id'=>$request->cat_id,
        
  
            'name'=>[
              'ar' => $request->name_ar,
              'en' => $request->name_en 
                   ],
             'discount_value'=>$request->discount_value,
             'discount_type'=>$request->discount_type,
             
             'discount_number'=>$request->discount_number,
             'discount_start'=>$request->discount_start,
             'discount_end'=>$request->discount_end,
             
        ]);
    } elseif( !empty($request->brand_id)) {
      Discountbrand::create([
     
        'brand_id'=>$request->brand_id, Discount::create([
        'car_id'=> $request->car_id,

          'name'=>[
            'ar' => $request->name_ar,
            'en' => $request->name_en 
                 ],
           'discount_value'=>$request->discount_value,
           'discount_type'=>$request->discount_type,
           
           'discount_number'=>$request->discount_number,
           'discount_start'=>$request->discount_start,
           'discount_end'=>$request->discount_end,
           
      ]);
       

          'name'=>[
            'ar' => $request->name_ar,
            'en' => $request->name_en 
                 ],
           'discount_value'=>$request->discount_value,
           'discount_type'=>$request->discount_type,
           
           'discount_number'=>$request->discount_number,
           'discount_start'=>$request->discount_start,
           'discount_end'=>$request->discount_end,
           
      ]);
    }elseif(!empty($request->model_id)){
      Discountmodel::create([
       
        'model_car_id'=>$request->model_id,

          'name'=>[
            'ar' => $request->name_ar,
            'en' => $request->name_en 
                 ],
           'discount_value'=>$request->discount_value,
           'discount_type'=>$request->discount_type,
           
           'discount_number'=>$request->discount_number,
           'discount_start'=>$request->discount_start,
           'discount_end'=>$request->discount_end,
           
      ]);
    }elseif(!empty($request->car_id) ){
      Discount::create([
        'car_id'=> $request->car_id,

          'name'=>[
            'ar' => $request->name_ar,
            'en' => $request->name_en 
                 ],
           'discount_value'=>$request->discount_value,
           'discount_type'=>$request->discount_type,
           
           'discount_number'=>$request->discount_number,
           'discount_start'=>$request->discount_start,
           'discount_end'=>$request->discount_end,
           
      ]);
    }
        */
     
      
  }   


        
    



    public function update($request,$brand){
         $brand->update([
            'name'=>[
                'ar' => $request->name_ar,
                'en' => $request->name_en
             ],
        ]); 
        
    }
    public function delete($brand){
        
      $brand->delete(); 
    }
}