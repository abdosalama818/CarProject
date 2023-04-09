<?php

namespace App\Http\Controllers\Site;

use Carbon\Carbon;
use App\Models\Car;
use App\Models\Cat;
use App\Models\User;
use App\Models\Brand;
use App\Models\Order;
use Faker\Core\Number;
use App\Models\Contact;
use App\Models\Discount;
use App\Models\ModelCar;
use App\Trait\QueryTrait;
use App\Models\Bigdiscount;
use App\Models\Discountcat;
use Illuminate\Http\Request;
use App\Models\Discountbrand;
use App\Models\Discountmodel;
use Illuminate\Bus\Queueable;
use PhpParser\Node\Stmt\Return_;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Symfony\Component\CssSelector\Node\ElementNode;

class MianController extends Controller
{
    use QueryTrait;

    public function index()
    {


        //return Session::get('variableName');


        $cats = $this->getAllData(new Cat());
        $models = $this->getAllData(new ModelCar());
        $brands = $this->getAllData(new Brand());
        $cars = $this->getAllData(new Car());
       // $brands = Brand::with('discount')->get();
      //  $brands = Brand::all();
        return view('pages.index')->with(compact('cats', 'models', 'brands', 'cars'));
    }



    public function findCar(Request $request)
    {
        $cars = Car::where('name', 'LIKE', '%' . $request->name . '%')
            ->orWhere('model_car_id', $request->model)
            ->Where('cat_id', $request->cat)
            ->Where('brand_id', $request->brand)->paginate(6);
            $cats = $this->getAllData(new Cat());
            $models = $this->getAllData(new ModelCar());
            // $cars = $this->getAllData(new Car());



            $brands = $this->getAllData(new Brand());
        //return $car->img ;
        if ($cars) {
            return view('pages.cars')->with(compact('cats', 'models', 'brands', 'cars'));

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

      // return $cars = Car::whereNotNull('discount_id')->paginate(6);
        $cars = Car::with('discount')->whereNotNull('discount_id')->get();

        $cats = Cat::with('discount')->get();
        $models = ModelCar::with('discount')->get();
       $brands = Brand::with('discount')->get();



       return view('pages.deals')->with(compact('cats','models','brands','cars'));
    }










    public function fleats()
    {
        $cats = $this->getAllData(new Cat());
        $models = $this->getAllData(new ModelCar());
        // $cars = $this->getAllData(new Car());

        $cars = Car::paginate(6);

        $brands = $this->getAllData(new Brand());





        return view('pages.cars')->with(compact('cats', 'models', 'brands', 'cars'));
    }



    public function fleats_brand($id)
    {

        $cars = Car::where('brand_id', $id)->paginate(6);
        $cats = $this->getAllData(new Cat());
        $models = $this->getAllData(new ModelCar());
        // $cars = $this->getAllData(new Car());

        //$cars = Car::paginate(6);

        $brands = $this->getAllData(new Brand());
        return view('pages.carsBrand')->with(compact('cats', 'models', 'brands', 'cars'));
    }

    public function fleats_cat($id)
    {

        $cars = Car::where('cat_id', $id)->paginate(6);
        $cats = $this->getAllData(new Cat());
        $models = $this->getAllData(new ModelCar());
        // $cars = $this->getAllData(new Car());

        //$cars = Car::paginate(6);

        $brands = $this->getAllData(new Brand());
        return view('pages.carsCat')->with(compact('cats', 'models', 'brands', 'cars'));
    }

    public function fleats_model($id)
    {

        $cars = Car::where('model_car_id', $id)->paginate(6);
        $cats = $this->getAllData(new Cat());
        $models = $this->getAllData(new ModelCar());
        // $cars = $this->getAllData(new Car());

        //$cars = Car::paginate(6);

        $brands = $this->getAllData(new Brand());
        return view('pages.carsModel')->with(compact('cats', 'models', 'brands', 'cars'));
    }






    public function car_datails($id)
    {
        $car = Car::findOrFail($id);
        /*  return $car; */
        if ($car) {
            return view('pages.car-details')->with(compact('car'));
        }
        return back();
    }







    public function contact()
    {
        return view('pages.contact');
    }

    public function contactStore(Request $request)
    {


        try {

            Contact::create([
                'name' => $request->name,
                'email' => $request->email,
                'sybject' => $request->sybject,
                'phone' => $request->phone,
                'msg' => $request->msg,
            ]);

            return back();
        } catch (\Exception $e) {


            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function about()
    {
        return view('pages.about');
    }
}
