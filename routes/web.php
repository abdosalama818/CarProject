<?php

use App\Events\SendEmailEvents;
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
use App\Http\Controllers\Admin\ContatcRequest;
use App\Http\Controllers\Admin\DiscountController;
use App\Http\Controllers\Admin\RequesrtedCarController;
use App\Http\Controllers\User\DashboarUserController;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;
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


           ////// Discounts start
           Route::resource('Discounts',DiscountController::class)->middleware(['auth','IsAdmin']);
           Route::get('discount_delete/{id}',[DiscountController::class,'delete'])->name('Discount.delete')->middleware(['auth','IsAdmin']);
           ////// Discounts end


           ///requested car

           Route::get('request_car',[RequesrtedCarController::class,'index'])->name('request_car.index')->middleware(['auth','IsAdmin']);
           Route::get('cardetails/{id}',[RequesrtedCarController::class,'carDetails'])->name('cardetails.show')->middleware(['auth','IsAdmin']);
           Route::get('cancelrquest/{id}',[RequesrtedCarController::class,'cancelRequest'])->name('cancelrquest')->middleware(['auth','IsAdmin']);
           Route::get('oldrquest',[RequesrtedCarController::class,'oldRequested'])->name('oldrquest')->middleware(['auth','IsAdmin']);
        
           ///end reqeusted car

         // admin crud controler 
         Route::resource('Admins',AdminCrudController::class)->middleware(['auth','IsAdmin']);
         Route::get('admin_delete/{id}',[AdminCrudController::class,'delete'])->name('Admin.delete')->middleware(['auth','IsAdmin']);


         //admin crud end


          // admin Adminsetting controler 
          Route::resource('Adminsetting',AdminSettingController::class)->middleware(['auth','IsAdmin']);
          Route::get('contact/request',[ContatcRequest::class,'contact'])->name('contact.request')->middleware(['auth','IsAdmin']);
         // Route::get('admin_delete/{id}',[AdminCrudController::class,'delete'])->name('Admin.delete');
 
 
          //admin Adminsetting end

      //admin route end
    /* ////////////////////////MAin site Route////////////////////////////////////////////////////  */
    /* ////////////////////////MAin site Route////////////////////////////////////////////////////  */
    /* ////////////////////////MAin site Route////////////////////////////////////////////////////  */
    /* ////////////////////////MAin site Route////////////////////////////////////////////////////  */

      Route::get('/',[MianController::class,'index'])->name('home');
      Route::get('/deals',[MianController::class,'deals'])->name('deals');
      Route::get('/fleats',[MianController::class,'fleats'])->name('fleats');
      Route::get('/fleats/brand/{id}',[MianController::class,'fleats_brand'])->name('fleats.brand');
      Route::get('/fleats/cat/{id}',[MianController::class,'fleats_cat'])->name('fleats.cat');
      Route::get('/fleats/model/{id}',[MianController::class,'fleats_model'])->name('fleats.model');
      
      Route::get('/car/search',[MianController::class,'findCar'])->name('car.search');
      Route::get('/resevecar/{id}',[MianController::class,'reserve'])->name('car.reserve')->middleware(['auth','IsUser']);;
      Route::get('/car/details/{id}',[MianController::class,'car_datails'])->name('car.details');


      Route::get('/about',[MianController::class,'about'])->name('about');
      Route::get('/contact',[MianController::class,'contact'])->name('contact');
      Route::post('/contact/store',[MianController::class,'contactStore'])->name('contact.store');
      
     //user 
      Route::get('/dashbord/user',[DashboarUserController::class,'index'])->name('dashbord.user')->middleware(['auth','IsUser']);
      Route::get('/dashbord/user/request_car',[DashboarUserController::class,'request_car'])->name('dashbord.request_car')->middleware(['auth','IsUser']);
      
      Route::get('user/oldrquest',[DashboarUserController::class,'oldRequested'])->name('user.oldrquest')->middleware(['auth','IsUser']);
      Route::get('user/setting',[DashboarUserController::class,'userSetting'])->name('user.setting')->middleware(['auth','IsUser']);
      Route::post('user/setting/update',[DashboarUserController::class,'userSettingUpdate'])->name('usersetting.update')->middleware(['auth','IsUser']);
      Route::post('user/generalinfo/update',[DashboarUserController::class,'userGeneralInformationUpdate'])->name('usersettingGeneralInfo.update')->middleware(['auth','IsUser']);

      
    
      //Route::get('/store/reserve/{id}',[MianController::class,'storeReserveCar'])->name('car.reserve_store');
      
    

     
    });



    /* ////////////////////////MAin site Route  */

    


