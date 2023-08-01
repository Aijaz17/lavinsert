<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\controller1;

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

Route::get('/', function () {

    return view('welcome');

});



Route::get('/' , [controller1::class , 'home']);

Route::get('/c' , [controller1::class , 'contact']);

 Route::post('storec' , [controller1::class , 'storecontact']);

// Route::get('/about' , [controller1::class , 'about']);


