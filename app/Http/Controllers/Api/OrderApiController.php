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






        $car = Car::with('discount')->where('id',$id)->first();
        $car_withoutDiscount = Car::with('discount')->where('id',$id)->whereNull('discount_id')->first();
        $discount = Discount::where('id',$car->discount_id)->first();



        $price =$car->price;
        $name = $car->name ;
        if($car->discount_id != null){
            $discount_number = $discount->discount_number;
            if($discount->discount_number !=0 && $discount->discount_type =='precent'){

                $price = $car->price - ($discount->discount_value / 100) * $car->price ;
                $discount->update([
                    'discount_number'=>  --$discount_number ,
                ]);
            }else{

                    if($discount->discount_number !=0 && $discount->discount_type =='flat'){
                    $price = $discount->car->price - $discount->discount_value ;
                    $discount->update([
                        'discount_number'=>  --$discount_number ,
                    ]);
                }
            }
        }elseif($car_withoutDiscount){

       $price = $car_withoutDiscount->price;
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
            return response()->json([
                'message'=>__('auth.success'),
                'status' => 1,
                'code' => 200,

            ]);





  }catch (\Throwable $td) {

          return response()->json([

          'message' =>$td->getMessage(),
              'status' => 0,
              'code' => 400,

          ]);

    }




   }
}
