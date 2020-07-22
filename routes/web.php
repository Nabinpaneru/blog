<?php

use Illuminate\Support\Facades\Route;

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
route::get('first',function(){
    return view('sample');
});
route::view('login','sample');
route::post('login','logins@index');
route::view('profile','profile');


Route::get('/logout', function () {
    session()->forget('data');
    return redirect('login');
});