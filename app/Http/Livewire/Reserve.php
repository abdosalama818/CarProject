<?php

namespace App\Http\Livewire;

use App\Models\Car;
use App\Models\Order;
use App\Models\Personalinformation;
use Livewire\Component;
use Illuminate\Support\Facades\Route;

class Reserve extends Component
{
    public $currentStep = 1;
    public $ID_Number,$ID_Name,$Birthday,$Expiry_Date,$Job,
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
            'place' => 'required',
            'Address' => 'required', 

             'card_name' => 'required',
            'card_number' => 'required',
            'exp' => 'required',
            'cvcpwd' => 'required', 
            
            
           

        ]);
    } 

 
    public function firstSubmit(){
         $validatedData = $this->validate([
            'ID_Number' => 'required',
            'Birthday' => 'required',
            'ID_Name' => 'required',
            'Job' => 'required',
            'Expiry_Date' => 'required',
            'Home_Address' => 'required',
            'Work_Address' => 'required',
        ]);  

     

        $car = Car::where('id',intval($this->car))->first();
       
      $order =  Order::create([
            'user_id'=>1,
            'name'=>$car->name,
            'price'=>$car->price,
            'start_date'=>now(),
            'exp_date'=>1,
        ]);

        $order->cars()->attach($car->id);


        $this->currentStep=2;

       
    }

    public function secondSubmit(){
       $validatedData = $this->validate([
            'branch' => 'required',
            'place' => 'required',
            'Address' => 'required',
        ]); 
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
      
        Personalinformation::create([
            'ID_Number' => $this->ID_Number,
            'Birthday' => $this->Birthday,
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
            'user_id' => 1, 
        ]);
       $this->currentStep=5;
     
    }

    
    public function render()
    { $car = Car::where('id',intval($this->car))->first();
        return view('livewire.reserve',[
            'car'=> $car
        ]);
    }
}
