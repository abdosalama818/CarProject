<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\APiMainController;
use App\Http\Controllers\Api\OrderApiController;
use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\Auth\ChangePasswordController;
use App\Http\Controllers\Api\Auth\PasswordResetRequestController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::group([
    'middleware' => ['api','Localization'],
    'prefix' => 'auth'
], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);
    Route::post('sendPasswordResetLink', [PasswordResetRequestController::class,'sendEmail']);

    Route::post('resetPassword', [ChangePasswordController::class,'passwordResetProcess'])->name('resetPassword');




});



Route::group([
    'middleware' => ['api','Localization',],

], function ($router) {

    Route::get('/cats', [APiMainController::class, 'cats']);
    Route::get('/cat/{id}', [APiMainController::class, 'cat']);

    Route::get('/brands', [APiMainController::class, 'brands']);
    Route::get('/brand/{id}', [APiMainController::class, 'brand']);


    Route::get('/ModelCars', [APiMainController::class, 'ModelCars']);
    Route::get('/ModelCar/{id}', [APiMainController::class, 'modelcar']);

    Route::get('/cars', [APiMainController::class, 'cars']);
    Route::get('/car/{id}', [APiMainController::class, 'car']);

    Route::get('/cars/discount', [APiMainController::class, 'carsWithDiscount']);
    Route::get('/cars/discountwithBrandCatModel', [APiMainController::class, 'carsWithDiscountInCatBrandModel']);


    Route::post('/order/store/{id}', [OrderApiController::class, 'store'])->middleware('jwt.auth');
});
