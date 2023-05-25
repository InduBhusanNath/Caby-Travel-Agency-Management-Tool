<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class taxiBookingController extends Controller
{   
    public function showRequestData(){
        $taxi_requests=DB::table('table_bookings')->get();       

         return view('/admin/taxiBooking',['taxi_requests'=>$taxi_requests]);

    }

   public function insertRequestData(Request $request)
   {
         $tripType=$request->input('n_trip');
         $pickupdate=$request->input('n_pickupdate');
         $returndate=$request->input('n_returndate');
         $pickuptime=$request->input('n_pickuptime');
         $prospectName=$request->input('n_prospectName');
         $prospectPhone=$request->input('n_prospectPhone');
         $prospectfrom=$request->input('n_prospectfrom');
         $prospectto=$request->input('n_prospectto');

        $insert_data=DB::table('table_bookings')->insert([
            'trip_type'=>$tripType,
            'pickup_date'=>$pickupdate,
            'return_date'=>$returndate,
            'pickup_time'=>$pickuptime,
            'prospect_name'=>$prospectName,
            'prospect_phone'=>$prospectPhone,
            'pickup_address'=>$prospectfrom,
            'drop_address'=>$prospectto,
            'trip_status'=>'Unprocessed'
        ]);
        if($insert_data){
               return response()->json([
                   'flag'=>'1'
               ]);         
           }else{
               return response()->json([
                   'flag'=>'0'
               ]);
           }        
       
   }
   
}

?>