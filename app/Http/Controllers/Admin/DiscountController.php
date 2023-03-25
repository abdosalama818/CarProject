<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interface\DiscountInterface;
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
        
        $discounts = $this->getAllData(new Discount());
        $discountcats = $this->getAllData(new Discountcat());
        $discountbrands = $this->getAllData(new Discountbrand());
        $discountmodels = $this->getAllData(new Discountmodel());
        $cars = $this->getAllData(new Car());
        $cats = $this->getAllData(new Cat());
        $models = $this->getAllData(new ModelCar());
        $brands = $this->getAllData(new Brand());

      
        return view('admin.offers')->with(compact('discounts','cars','cats','models','brands','discountcats','discountbrands','discountmodels'));
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
