<?php

namespace App\Http\Controllers\Api;

use Carbon\Carbon;
use App\Models\Car;
use App\Models\Order;
use App\Models\Discount;
use App\Trait\QueryTrait;
use App\Models\Bigdiscount;

use Illuminate\Http\Request;
use App\Models\Personalinformation;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\OrderApiRequest;
use App\Http\Resources\OrdersResource;

class OrderApiController extends Controller
{


            use QueryTrait;
    /*
  'user_id'=>Auth::id(),
            'name'=>$car->name,
            'price'=>$price,
            'start_date'=>$this->Birthday,
            'exp_date'=>$this->Expiry_Date,
            'total_price'=>$price * $days,
            'number_days'=>$days,
 */
   public function store(OrderApiRequest $request,$id){



    try{

        $personal = Personalinformation::where('user_id',Auth::id())->first();
        if($personal){
            $personal->update([
                'ID_Number' => $request->ID_Number,

                'ID_Name' => $request->ID_Name,
                'Job' => $request->Job,
                'Expiry_Date' => $request->Expiry_Date,
                'Home_Address' => $request->Home_Address,
                'Work_Address' => $request->Work_Address,



                'branch' => $request->branch,
                'place' => $request->place,
                'Address' => $request->Address,

                 'card_name' => $request->card_name,
                'card_number' => $request->card_number,
                'exp' => $request->exp,
                'cvcpwd' => $request->cvcpwd,
                'user_id' => Auth::id(),
            ]);
        }
        Personalinformation::create([
            'ID_Number' => $request->ID_Number,

            'ID_Name' => $request->ID_Name,
            'Job' => $request->Job,
            'Expiry_Date' => $request->Expiry_Date,
            'Home_Address' => $request->Home_Address,
            'Work_Address' => $request->Work_Address,



            'branch' => $request->branch,
            'place' => $request->place,
            'Address' => $request->Address,

             'card_name' => $request->card_name,
            'card_number' => $request->card_number,
            'exp' => $request->exp,
            'cvcpwd' => $request->cvcpwd,
            'user_id' => Auth::id(),
        ]);



        $big_discount = Bigdiscount::all();
        $car = Car::where('id',$id)->first();

        $discount = Discount::where('car_id',$id)->first();
        $price =$car->price;
        $name = $car->name ;
        if($discount ){
            $discount_number = $discount->discount_number;
//////////////////////////////////////////////////

$date = Carbon::now();
$current_tiem= $date->format('Y-m-d H:i:s');
$current_date_time = Carbon::now()->toDateTimeString();
// return   $current_date_time;


//////////////////////
 if( $current_date_time >=  $discount->discount_start  ){
    if($current_date_time <=  $discount->discount_end ){
        if($discount->discount_number !=0  && $discount->discount_type == 'precent' ){

            $price = $discount->car->price - ($discount->discount_value / 100) * $discount->car->price ;
            $discount->update([
                'discount_number'=>  --$discount_number ,
            ]);

        }else{

          // $price = $discount->car->price - $discount->discount_value ;
         //  return 'lllll' . $price = $discount->car->price - $discount->discount_value ;
            if($discount->discount_number !=0  ){
            $price = $discount->car->price - $discount->discount_value ;
            $discount->update([
                'discount_number'=>  --$discount_number ,
            ]);
            $expire_date = $request->Expiry_Date;
            $current_date =$request->start_date;
            $time1=strtotime($expire_date);
            $time2=strtotime($current_date);
            $time=$time1 - $time2;
           $days= date('d', $time);




            $order =  Order::create([
                  'user_id'=>Auth::id(),
                  'name'=>$car->name,
                  'price'=>$discount->car->price - $discount->discount_value,
                  'start_date'=>$request->start_date,
                  'exp_date'=>$request->Expiry_Date,
                  'total_price'=>$price * $days,
                  'number_days'=>$days,
              ]);

              $order->cars()->attach($car->id);
            return response()->json([
                'message'=>__('auth.success'),
                'status' => 1,
                'code' => 200,

            ]);
        }
        }
    }else{
        return response()->json([
            'message'=>'discount is expired  ',
            'status' => 0,
            'code' => 400,

        ]);
    }

}else{
    return response()->json([
        'message'=>'not start else',
        'status' => 0,
        'code' => 400,

    ]);

}

//////////////////////////////////////////////////////////////////////
        }



        foreach($big_discount as $dis){
            $car = Car::where('id',$id)->first();


            $price = $car->price;
            $discount_number = $dis->discount_number;



            if(($car->cat_id == $dis->cat_id || $car->model_car_id == $dis->model_car_id ||$car->brand_id == $dis->brand_id ) ){
                $date = Carbon::now();
$current_tiem= $date->format('Y-m-d H:i:s');
$current_date_time = Carbon::now()->toDateTimeString();

                if( $current_date_time >=  $dis->discount_start  ){
                    if($current_date_time <=  $dis->discount_end ){
                        if($dis->discount_number !=0  && $dis->discount_type == 'precent' ){

                              $price = $car->price - ($dis->discount_value / 100) * $car->price  ;
                            $dis->update([
                                'discount_number'=>  --$discount_number ,
                            ]);

                        }else{

                          // $price = $discount->car->price - $discount->discount_value ;
                         //  return 'lllll' . $price = $discount->car->price - $discount->discount_value ;
                            if($dis->discount_number !=0  ){
                                  $price = $car->price - $dis->discount_value  ;
                            $dis->update([
                                'discount_number'=>  --$discount_number ,
                            ]);
                            $expire_date = $request->Expiry_Date;
                            $current_date =$request->start_date;
                            $time1=strtotime($expire_date);
                            $time2=strtotime($current_date);
                            $time=$time1 - $time2;
                           $days= date('d', $time);




                            $order =  Order::create([
                                  'user_id'=>Auth::id(),
                                  'name'=>$car->name,
                                  'price'=>$car->price - $dis->discount_value ,
                                  'start_date'=>$request->start_date,
                                  'exp_date'=>$request->Expiry_Date,
                                  'total_price'=>$price * $days,
                                  'number_days'=>$days,
                              ]);

                              $order->cars()->attach($car->id);
                            return response()->json([
                                'message'=>__('auth.success'),
                                'status' => 1,
                                'code' => 200,

                            ]);
                        }
                        }
                    }else{
                        return response()->json([
                            'message'=>'discount is expired  ',
                            'status' => 0,
                            'code' => 400,

                        ]);
                    }

                }else{
                    return response()->json([
                        'message'=>'not start else',
                        'status' => 0,
                        'code' => 400,

                    ]);

                }
            }



        }





              $expire_date = $request->Expiry_Date;
              $current_date =$request->start_date;
              $time1=strtotime($expire_date);
              $time2=strtotime($current_date);
              $time=$time1 - $time2;
             $days= date('d', $time);




              $order =  Order::create([
                    'user_id'=>Auth::id(),
                    'name'=>$car->name,
                    'price'=>$price,
                    'start_date'=>$request->start_date,
                    'exp_date'=>$request->Expiry_Date,
                    'total_price'=>$price * $days,
                    'number_days'=>$days,
                ]);

                $order->cars()->attach($car->id);



  }catch (\Throwable $td) {

          return response()->json([

          'message' =>$td->getMessage(),
              'status' => 0,
              'code' => 400,

          ]);

    }




   }
}
