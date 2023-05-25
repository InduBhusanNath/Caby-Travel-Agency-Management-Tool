<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\taxiBookingController;
use App\Http\Controllers\contactusController;
use App\Http\Controllers\userController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\adminLogoutController;
use App\Http\Controllers\adminDashboardController;
use App\Http\Controllers\adminDashboardViewController;





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
Route::get('/adminLogin', function () {
     return view('adminlogin');
})->name('admLogin');

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
Route::get('/dbtest',function(){
    return view('dbtest');
});

Route::get('/adminDashboard',function(){
    return view('/admin/adminDashboard');
})->name('admin_db');


Route::get('/users',[userController::class,'displayUsers']);
Route::get('/adminLogout',[adminLogoutController::class,'adminLogout']);
Route::get('/adminDashboardPage',[adminDashboardViewController::class,'adminDashboardView']);
Route::get('/show_contactusMessages',[contactusController::class,'showContactusMessages']);
Route::get('/taxiBooking',[taxiBookingController::class,'showRequestData']);
//POST Routes
Route::post('/insert_enquiryData',[taxiBookingController::class,'insertRequestData']);
Route::post('/insert_contactusData',[contactusController::class,'insertContactusData']);
Route::post('/insert_userData',[userController::class,'insertUser']);
Route::post('/send_pid',[userController::class,'send_user_priviledge_data']);
Route::post('/set_user_priviledge',[userController::class,'set_userPriviledge']);
Route::post('/send_eid',[userController::class,'set_editData']);
Route::post('/edit_user_details',[userController::class,'edit_userDetails']);
Route::post('/send_did',[userController::class,'set_delData']);
Route::post('/delete_user',[userController::class,'delete_userData']);
Route::post('/admin_rights',[loginController::class,'grant_adminRights']);
//Route::post('/adminDashboard',[adminDashboardController::class,'showAdminDashboardPage']);
Route::post('/user_delete_data',[contactusController::class,'userDeleteData']);    
Route::post('/delete_contactus_message',[contactusController::class,'deleteContactUsMessage']);



