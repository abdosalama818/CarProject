<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Car;
use App\Models\Cat;
use App\Models\ModelCar;
use App\Trait\QueryTrait;
use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;

class MianController extends Controller
{
    use QueryTrait;

    public function index()
    {
        $cats = $this->getAllData(new Cat());
        $models = $this->getAllData(new ModelCar());
        $brands = $this->getAllData(new Brand());
        $cars = $this->getAllData(new Car());
       return view('pages.index')->with(compact('cats','models','brands','cars'));
    }

    public function deals()
    {
        $cats = $this->getAllData(new Cat());
        $models = $this->getAllData(new ModelCar());
        $brands = $this->getAllData(new Brand());
        $cars = $this->getAllData(new Car());
       return view('pages.deals')->with(compact('cats','models','brands','cars'));
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


/*     public function storeReserveCar(Request $request)
    {
        return $request;
    } */

    //
    public function store(Request $request)
    {
        //
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
