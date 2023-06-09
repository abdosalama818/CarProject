<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\Car;
use App\Models\User;
use App\Models\Order;
use Livewire\Component;
use App\Models\Discount;
use App\Models\Bigdiscount;
use App\Events\SendEmailEvents;
use App\Models\Branche;
use App\Models\Personalinformation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Notifications\OrderNotification;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Session;


class Reserve extends Component
{
    public $currentStep = 1;
    public $ID_Number,$ID_Name,$Birthday,$Expiry_Date,$Job,$start_date,
    $Work_Address,$Home_Address;


    public  $branch,$place,$Address;

    public  $card_name,$card_number,$exp,$cvcpwd;


    public $car;


    public function mount()

    {

        $car = Route::current()->parameter('id');
        $this->car = $car;
    }








   public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [

             'ID_Number' => 'required',
            'Birthday' => 'required',
            'ID_Name' => 'required',
            'Job' => 'required',
            'Expiry_Date' => 'required',
            'Home_Address' => 'required',
            'Work_Address' => 'required',

            'card_name' => 'required',
            'card_number' => 'required',
            'exp' => 'required',
            'cvcpwd' => 'required',

            'branch' => 'required',
        /*     'place' => 'required', */
            'Address' => 'required',

             'card_name' => 'required',
            'card_number' => 'required',
            'exp' => 'required',
            'cvcpwd' => 'required',




        ]);
    }


    public function firstSubmit(){
     /*    $validatedData = $this->validate([
            'ID_Number' => 'required',
            'Birthday' => 'required',
            'ID_Name' => 'required',
            'Job' => 'required',
            'Home_Address' => 'required',
            'Work_Address' => 'required',
        ]);
 */

        $this->currentStep=2;


    }

    public function secondSubmit(){
     /*   $validatedData = $this->validate([
            'branch' => 'required',
           'start_date' => 'required',
            'Expiry_Date' => 'required',

           'place' => 'required',
            'Address' => 'required',
        ]); */




$car = Car::with('discount')->where('id',intval($this->car))->whereNotNull('discount_id')->first();
$discount = Discount::where('id',$car->discount_id)->first();



$price =$car->price;
$name = $car->name ;
if($car){
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
}









      $expire_date = $this->Expiry_Date;
      $current_date =$this->start_date;
      $time1=strtotime($expire_date);
      $time2=strtotime($current_date);
      $time=$time1 - $time2;
     $days= date('d', $time);




      $order =  Order::create([
            'user_id'=>Auth::id(),
            'name'=>$car->name,
            'price'=>$price,
            'start_date'=>$this->start_date,
            'exp_date'=>$this->Expiry_Date,
            'total_price'=>$price * $days,
            'number_days'=>$days,
        ]);

        $order->cars()->attach($car->id);
        //$user = User::findOrFail(Auth::id());
        //event(new SendEmailEvents($user));
        //Notification::send($user,new OrderNotification($order));
        //Session::forget('Subtotal1');
       // Session::forget('total1');
        Session::put('Subtotal1', $price);
        Session::put('total1', $price * $days);


        $this->currentStep=3;

    }
    public function thirdSubmit(){
       $validatedData = $this->validate([
            'card_name' => 'required',
            'card_number' => 'required',
            'exp' => 'required',
            'cvcpwd' => 'required',
        ]);

       $this->currentStep=4;

    }


    public function submitForm(){

        $personal = Personalinformation::where('user_id',Auth::id())->first();
        if($personal){
            $personal->update([
                'ID_Number' => $this->ID_Number,

                'ID_Name' => $this->ID_Name,
                'Job' => $this->Job,
                'Expiry_Date' => $this->Expiry_Date,
                'Birthday' => $this->Birthday,
                'Home_Address' => $this->Home_Address,
                'Work_Address' => $this->Work_Address,



                'branch' => $this->branch,
                'place' => $this->place,
                'Address' => $this->Address,

                 'card_name' => $this->card_name,
                'card_number' => $this->card_number,
                'exp' => $this->exp,
                'cvcpwd' => $this->cvcpwd,
                'user_id' => Auth::id(),
            ]);
        }
        Personalinformation::create([
            'ID_Number' => $this->ID_Number,

            'ID_Name' => $this->ID_Name,
            'Job' => $this->Job,
            'Expiry_Date' => $this->Expiry_Date,
            'Home_Address' => $this->Home_Address,
            'Work_Address' => $this->Work_Address,



            'branch' => $this->branch,
            'place' => $this->place,
            'Address' => $this->Address,

             'card_name' => $this->card_name,
            'card_number' => $this->card_number,
            'exp' => $this->exp,
            'cvcpwd' => $this->cvcpwd,
            'user_id' => Auth::id(),
        ]);
        Session::forget('Subtotal1');
        Session::forget('total1');
       $this->currentStep=5;



    }


    public function render()
    { $car = Car::where('id',intval($this->car))->first();
        $branches = Branche::all();
        $branches = Branche::all();

        return view('livewire.reserve',[
            'car'=> $car,
            'branches'=> $branches,
        ]);
    }
}
