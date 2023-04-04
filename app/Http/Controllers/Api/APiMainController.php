<?php

namespace App\Http\Controllers\Api;

use App\Models\Car;
use App\Models\Cat;
use App\Models\Brand;
use App\Models\Discount;
use App\Models\ModelCar;
use App\Trait\QueryTrait;
use App\Models\Bigdiscount;
use Illuminate\Http\Request;
use App\Http\Resources\CatResource;
use App\Http\Controllers\Controller;
use App\Http\Resources\CarsResource;
use App\Http\Resources\CarsWithDiscountResource;
use App\Http\Resources\CarsWithDiscountResourceOnCAr;

class APiMainController extends Controller
{
    use QueryTrait;
    public function cats(){

        try{

            $cats = $this->getAllData(new Cat());
            return response()->json([
                'message' => __('auth.success'),
                'status' => 1,
                'code' => 200,
                'data'=> CatResource::collection($cats)



            ]);



      }catch (\Throwable $td) {

              return response()->json([

              'message' =>$td->getMessage(),
                  'status' => 0,
                  'code' => 400,

              ]);

        }


    }

    public function cat($id){

        try{

            $cat = $this->getDataByIdApi(new Cat(),$id);
            return response()->json([
                'message' => __('auth.success'),
                'status' => 1,
                'code' => 200,
                'data'=> new CatResource($cat)



            ]);



      }catch (\Throwable $td) {

              return response()->json([

              'message' =>$td->getMessage(),
                  'status' => 0,
                  'code' => 400,

              ]);

        }


    }


    /* ************************************************************************** */
    public function brands(){

        try{

            $brands = $this->getAllData(new Brand());
            return response()->json([
                'message' => __('auth.success'),
                'status' => 1,
                'code' => 200,
                'data'=> CatResource::collection($brands)



            ]);



      }catch (\Throwable $td) {

              return response()->json([

              'message' =>$td->getMessage(),
                  'status' => 0,
                  'code' => 400,

              ]);

        }


    }

    public function brand($id){

        try{

            $brand = $this->getDataByIdApi(new Brand(),$id);
            return response()->json([
                'message' => __('auth.success'),
                'status' => 1,
                'code' => 200,
                'data'=> new CatResource($brand)



            ]);



      }catch (\Throwable $td) {

              return response()->json([

              'message' =>$td->getMessage(),
                  'status' => 0,
                  'code' => 400,

              ]);

        }


    }

    /* **************************************************************************** */




    /* ************************************************************************** */
    public function ModelCars(){

        try{

            $models = $this->getAllData(new ModelCar());
            return response()->json([
                'message' => __('auth.success'),
                'status' => 1,
                'code' => 200,
                'data'=> CatResource::collection($models)



            ]);



      }catch (\Throwable $td) {

              return response()->json([

              'message' =>$td->getMessage(),
                  'status' => 0,
                  'code' => 400,

              ]);

        }


    }

    public function modelcar($id){

        try{

            $model = $this->getDataByIdApi(new ModelCar(),$id);
            return response()->json([
                'message' => __('auth.success'),
                'status' => 1,
                'code' => 200,
                'data'=> new CatResource($model)



            ]);



      }catch (\Throwable $td) {

              return response()->json([

              'message' =>$td->getMessage(),
                  'status' => 0,
                  'code' => 400,

              ]);

        }


    }

    /* **************************************************************************** */


     /* ************************************************************************** */
     public function cars(){

        try{

            $cars = $this->getAllData(new Car());
            return response()->json([
                'message' => __('auth.success'),
                'status' => 1,
                'code' => 200,
                'data'=> CarsResource::collection($cars)



            ]);



      }catch (\Throwable $td) {

              return response()->json([

              'message' =>$td->getMessage(),
                  'status' => 0,
                  'code' => 400,

              ]);

        }


    }

    public function car($id){

        try{

            $car = $this->getDataByIdApi(new Car(),$id);
            return response()->json([
                'message' => __('auth.success'),
                'status' => 1,
                'code' => 200,
                'data'=> new CarsResource($car)



            ]);



      }catch (\Throwable $td) {

              return response()->json([

              'message' =>$td->getMessage(),
                  'status' => 0,
                  'code' => 400,

              ]);

        }


    }







    public function carsWithDiscount(){

        try{

            $cars = Discount::with('car')->get();




            return response()->json([
                'message' => __('auth.success'),
                'status' => 1,
                'code' => 200,
                'data'=> CarsWithDiscountResourceOnCAr::collection($cars)



            ]);



      }catch (\Throwable $td) {

              return response()->json([

              'message' =>$td->getMessage(),
                  'status' => 0,
                  'code' => 400,

              ]);

        }


    }


    public function carsWithDiscountInCatBrandModel(){

        try{


             $cars = Bigdiscount::with(['cat','model','brand'])->orderBy('id')->get();

            return response()->json([
                'message' => __('auth.success'),
                'status' => 1,
                'code' => 200,
                'data'=> CarsWithDiscountResource::collection($cars)



            ]);



      }catch (\Throwable $td) {

              return response()->json([

              'message' =>$td->getMessage(),
                  'status' => 0,
                  'code' => 400,

              ]);

        }


    }


    /* **************************************************************************** */
}
