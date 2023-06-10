<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\taxiBookingController;
use App\Http\Controllers\contactusController;
use App\Http\Controllers\userController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\adminLogoutController;
use App\Http\Controllers\adminDashboardController;
use App\Http\Controllers\adminDashboardViewController;
use App\Http\Controllers\processTaxiBookingController;
use App\Http\Controllers\blogsController;





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
Route::get('/process_taxiBooking/{id}',[taxiBookingController::class,'showTaxiBookingRequestStatus']);
Route::get('/blogPosts',[blogsController::class,'blogPostPage']);





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
Route::post('/set_taxibooking_edit_data',[taxiBookingController::class,'setTaxiBookingEditData']);
Route::post('/edit_taxibooking_data',[taxiBookingController::class,'editTaxiBookingData']);
Route::post('/set_taxibooking_delete_data',[taxiBookingController::class,'setTaxiBookingDeleteData']);
Route::post('/delete_taxibooking_data',[taxiBookingController::class,'deleteTaxiBookingData']);
Route::post('/update_taxitrip',[taxiBookingController::class,'updateTaxiTripDetails']);
Route::post('/update_client',[taxiBookingController::class,'updateClientDetails']);
Route::post('/update_address',[taxiBookingController::class,'updateClientAddresses']);
Route::post('/update_taxi',[taxiBookingController::class,'updateTaxiDetails']);
Route::post('/update_driver',[taxiBookingController::class,'updateDriverDetails']);
Route::post('/update_fare1',[taxiBookingController::class,'updateFare1Details']);
Route::post('/update_fare2',[taxiBookingController::class,'updateFare2Details']);
Route::post('/update_booking_status',[taxiBookingController::class,'updateBookingStatus']);
Route::post('/update_trip_status',[taxiBookingController::class,'updateTripStatus']);
Route::post('/post_blog',[blogsController::class,'insertBlog']);
Route::post('/set_blog_edit_data',[blogsController::class,'setBlogEditData']);
Route::post('/edit_image1',[blogsController::class,'editImage1']);
Route::post('/edit_blog',[blogsController::class,'editBlog']);
Route::post('/set_blog_delete_data',[blogsController::class,'setBlogDeleteData']);
Route::post('/delete_blog',[blogsController::class,'deleteBlog']);





