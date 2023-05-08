<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\enquiryController;

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
//GET ROUTES
Route::get('/', function () {
    return view('hp');
});
Route::get('/home', function () {
    return view('hp');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/blogs', function () {
    return view('blogs');
});
Route::get('/contactus', function () {
    return view('contactus');
});

//POST Routes
Route::post('/insert_enquiryData',[enquiryController::class,'insertEnquiryData']);
