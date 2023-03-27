<?php

namespace App\Http\Controllers\Site;

use Carbon\Carbon;
use App\Models\Car;
use App\Models\Cat;
use App\Models\User;
use App\Models\Brand;
use Faker\Core\Number;
use App\Models\Contact;
use App\Models\Discount;
use App\Models\ModelCar;
use App\Trait\QueryTrait;
use App\Models\Discountcat;
use Illuminate\Http\Request;
use App\Models\Discountbrand;
use App\Models\Discountmodel;
use Illuminate\Bus\Queueable;
use PhpParser\Node\Stmt\Return_;
use App\Http\Controllers\Controller;

class MianController extends Controller
{
    use QueryTrait;

    public function index()
    {

   

        $cats = $this->getAllData(new Cat());
        $models = $this->getAllData(new ModelCar());
      //  $brands = $this->getAllData(new Brand());
        $cars = $this->getAllData(new Car());
       $brands = Brand::with('discount')->get();
      $brands = Brand::all();
       return view('pages.index')->with(compact('cats','models','brands','cars'));
    }

 
   
    public function findCar(Request $request)
    {
        $car = Car::where('name','LIKE','%'.$request->name.'%')
        ->orWhere('model_car_id',$request->model)
        ->Where('cat_id',$request->cat)
        ->Where('brand_id',$request->brand)->first();
        //return $car->img ;
        if($car){
            return view('pages.car-details')->with(compact('car')) ;

        }
        return back();

    }

    public function reserve()
    {
       //$car = $this->getDataById(new Car(),$id);
       return view('livewire.resevecar')/* ->with(compact('car') ) */;
    }








    ///deals function  pages 

    public function deals()
    {
      /*   $cats = $this->getAllData(new Cat());
        $models = $this->getAllData(new ModelCar());
        $cars = $this->getAllData(new Car());
        $brands = $this->getAllData(new Brand()); */
       // $cars = $this->getAllData(new Car());
       $cars = $this->getAllData(new Car());
        $cars_p = Discount::with('car')->orderBy('id')->paginate(6);
    $cats = Cat::with('discount')->get();
    $models = ModelCar::with('discount')->get();
    $brands = Brand::with('discount')->get();

              foreach($cars_p as $car_p){

               

                    if($car_p->discount_type == 'precent'){

                    
                        $discount_price = $car_p->car->price - ($car_p->discount_value / 100)*$car_p->car->price ;
                    }elseif($car_p->discount_type == 'flat'){
                     
                        $discount_price = $car_p->car->price - $car_p->discount_value  ;
                    }
            //to count discount day start 
               $discount_end=strtotime($car_p->discount_end);
               $discount_start=strtotime($car_p->discount_start);
               $time=$discount_end - $discount_start;
               $discount_days= date('d', $time); 
            //to count discount day end 

      
         

           }



       return view('pages.deals')->with(compact('cars_p','cats','models','brands','cars','discount_price','discount_days'));
    }



    public function fleats(){
        $cats = $this->getAllData(new Cat());
        $models = $this->getAllData(new ModelCar());
       // $cars = $this->getAllData(new Car());

        $cars = Car::paginate(6);

        $brands = $this->getAllData(new Brand());





        return view('pages.cars')->with(compact('cats','models','brands','cars'));
    }

    public function car_datails($id)
    {
        $car =Car::findOrFail($id);
       /*  return $car; */
        if($car){
            return view('pages.car-details')->with(compact('car')) ;

        }
        return back();

    }







    public function contact(){
        return view('pages.contact');
    }

    public function contactStore(Request $request){
      

        try{

          Contact::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'sybject'=>$request->sybject,
            'phone'=>$request->phone,
            'msg'=>$request->msg,
          ]);

          return back();


      } catch (\Exception $e){
          

        return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
      } 

}

    public function about(){
        return view('pages.about');
    }

}
