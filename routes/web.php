<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Site\MianController;
use App\Http\Controllers\Admin\BrandController;

use App\Http\Controllers\Admin\BranchesController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ModelCarController;

use App\Http\Controllers\Admin\AdminCrudController;
use App\Http\Controllers\Admin\AdminSettingController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    //ui auth start
    Auth::routes();
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 //ui auth end

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ],
    function()
    {
      //ui auth start
      Auth::routes();
      Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
   //ui auth end

      //admin route start
           //cat start
          Route::resource('Cats',CategoryController::class)->middleware(['auth','IsAdmin']);
          Route::get('delete/{id}',[CategoryController::class,'delete'])->name('Cats.delete')->middleware(['auth','IsAdmin']);
        //cat end

         //Brand start
         Route::resource('Brands',BrandController::class)->middleware(['auth','IsAdmin']);
         Route::get('brand_delete/{id}',[BrandController::class,'delete'])->name('Brands.delete')->middleware(['auth','IsAdmin']);
         //Brand start

         //model start
         Route::resource('Models',ModelCarController::class)->middleware(['auth','IsAdmin']);
         Route::get('model_delete/{id}',[ModelCarController::class,'delete'])->name('Model.delete')->middleware(['auth','IsAdmin']);

        //model route end

         Route::resource('Cars',CarController::class)->middleware(['auth','IsAdmin']);
         Route::get('cars_delete/{id}',[CarController::class,'delete'])->name('Car.delete')->middleware(['auth','IsAdmin']);


         ////// branches start
         Route::resource('Branches',BranchesController::class)->middleware(['auth','IsAdmin']);
         Route::get('branche_delete/{id}',[BranchesController::class,'delete'])->name('Branche.delete')->middleware(['auth','IsAdmin']);
         ////// branches end


         // admin crud controler 
         Route::resource('Admins',AdminCrudController::class)->middleware(['auth','IsAdmin']);
         Route::get('admin_delete/{id}',[AdminCrudController::class,'delete'])->name('Admin.delete')->middleware(['auth','IsAdmin']);


         //admin crud end


          // admin Adminsetting controler 
          Route::resource('Adminsetting',AdminSettingController::class)->middleware(['auth','IsAdmin']);
         // Route::get('admin_delete/{id}',[AdminCrudController::class,'delete'])->name('Admin.delete');
 
 
          //admin Adminsetting end

      //admin route end
    /* ////////////////////////MAin site Route////////////////////////////////////////////////////  */
    /* ////////////////////////MAin site Route////////////////////////////////////////////////////  */
    /* ////////////////////////MAin site Route////////////////////////////////////////////////////  */
    /* ////////////////////////MAin site Route////////////////////////////////////////////////////  */

      Route::get('/',[MianController::class,'index']);
      Route::get('/deals',[MianController::class,'deals']);
      Route::get('/car/search',[MianController::class,'findCar'])->name('car.search');
      Route::get('/resevecar/{id}',[MianController::class,'reserve'])->name('car.reserve');
     // Route::get('/store/reserve/{id}',[MianController::class,'storeReserveCar'])->name('car.reserve_store');
      
      


     
    });



    /* ////////////////////////MAin site Route  */

    


