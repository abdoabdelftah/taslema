<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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




///////Log in section///////////
Route::get('/', function () {
    if(Auth::check()) {
        return redirect()->route('orders');
    }

    return view('login');

})->middleware('guest')->name('login');


Route::post('logme', 'App\Http\Controllers\manualController@checkAdminLogin')->name('save.login');






////Start private section////////

Route::group(['middleware' => ['auth']], function() {



    Route::get('/orders','App\Http\Controllers\ordersController@orders')->name('main.orders');


    Route::get('/order/{id}','App\Http\Controllers\ordersController@order');


    Route::get('/order/edit/{id}','App\Http\Controllers\ordersController@showedit');

    Route::post('/order/doedit', 'App\Http\Controllers\orderscontroller@edit')->name('edit.order');


    Route::get('/order/delete/{id}','App\Http\Controllers\ordersController@delete');


});





