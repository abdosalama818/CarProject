<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interface\DiscountInterface;
use App\Models\Bigdiscount;
use App\Models\Brand;
use App\Models\Car;
use App\Models\Cat;
use App\Models\Discount;
use App\Models\Discountbrand;
use App\Models\Discountcat;
use App\Models\Discountmodel;
use App\Models\ModelCar;
use App\Trait\QueryTrait;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
 use QueryTrait;


 public  $discountInterface ;
 public function __construct(DiscountInterface $discountInterface)
 {
     return $this->discountInterface =$discountInterface ;

 }


    public function index()
    {

        $cars_discount = Discount::with('cars')->get();

        $discounts = $this->getAllData(new Discount());



        $cars = $this->getAllData(new Car());

        $cats = $this->getAllData(new Cat());

        $models = $this->getAllData(new ModelCar());
        $brands = $this->getAllData(new Brand());

        $big_discount = Bigdiscount::all();



   return view('admin.offers')->with(compact('cars_discount','discounts','cars','cats','models','brands','big_discount'));





    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {





        try{

           // $validated = $request->validated();

        $this->discountInterface->store($request);
            return redirect()->back();
        }catch(\Exception $e){
            return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
        }
    }




    public function update(Request $request, $id)
    {




        try{
           // $validated = $request->validated();
            $discount = $this->getDataById(new Discount(),$id);

           $this->discountInterface->update($request,$discount);
            return back();
           } catch (\Exception $e){

            return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
           }


         return back() ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
