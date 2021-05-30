<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\MenuController;
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
Route::resource('Restaurant', RestaurantController::class);
Route::resource('Menu', MenuController::class);


Route::get('/', function () {
    return view(
        'welcome');
});

//Route::get('/data', function () {
//    return view('data');
//});

//Route::get('/data','RestaurantController@data');
Route::get('/restaurant/{id}/menu', [RestaurantController::class, 'restaurant']);
Route::post('/restaurant/{id}/menu',[RestaurantController::class, 'addFood']);
