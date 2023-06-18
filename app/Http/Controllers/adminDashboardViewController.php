<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class adminDashboardViewController extends Controller
{
     //Booking Status
     public function showTaxiBookings(){
           if(!session('adminuser')){
               return redirect()->route('adminlogin');
           }
           $new_requests=DB::table('table_taxi_bookings')->where('trip_status','=','Unprocessed')->count();
           $confirmed_bookings=DB::table('table_taxi_bookings')->where('booking_status','=','Confirmed')->count();
           $ongoing=DB::table('table_taxi_bookings')->where('trip_status','=','Ongoing')->count();
           $unpaid_fare=DB::table('table_taxi_bookings')->where('trip_status','=','Unpaid')->count();

      //Blogs
           $blogs_count=DB::table('table_blogs')->count();
      //Contact Us
           $contactus_messages=DB::table('table_contactus')->count();
      //Users
           $admin_users=DB::table('table_users')->where('admin_status','=','Admin')->count();
           


         return view('/admin/adminDashboardView',[
                'new_requests'=>$new_requests,
                'confirmed_bookings'=>$confirmed_bookings,
                'ongoing'=>$ongoing,
                'unpaid_fare'=>$unpaid_fare,
                'blogs_count'=>$blogs_count,
                'contactus_messages'=>$contactus_messages,
                'admin_users'=>$admin_users
         ]
        );

     }
}
?>