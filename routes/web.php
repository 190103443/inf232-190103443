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

Route::get('/name', function () {
    return view('name');
});

Route::get('/example', function () {
    return "Web programming it's cool";
});

Route::get('/example-redirect', function () {
    return redirect("/test");
});

Route::get('/post/{nation}', function ($nation) {
    return "Your name is: ".$nation;
});

Route::get('/post/{fname}/{lname}', function ($fname,$lname) {
    return "My name is: ".$fname." ".$lname;
});
//Root that returnds first name and last name;

Route::get('/country/{country?}', function ($country="Kazakhstan") {
    return "Your country: ".$country;
});

Route::get('/age/{age?}', function ($age=null) {
    return "age is: ".$age;
})->where('age','[0-9]+');





