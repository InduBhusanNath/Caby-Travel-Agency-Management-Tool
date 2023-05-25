<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class enquiryController extends Controller
{   
     public function showEnquiryData(){
         $enquiries=DB::table('table_enquiry')->get();

          return view('/admin/enquiries',);

     }

    public function insertEnquiryData(Request $request)
    {
         $tripType=$request->input('n_trip');
         $pickupdate=$request->input('n_pickupdate');
         $returndate=$request->input('n_returndate');
         $pickuptime=$request->input('n_pickuptime');
         $prospectName=$request->input('n_prospectName');
         $prospectPhone=$request->input('n_prospectPhone');
         $prospectfrom=$request->input('n_prospectfrom');
         $prospectto=$request->input('n_prospectto');

         $insert_data=DB::table('table_enquiry')->insert([
             'trip_type'=>$tripType,
             'pickup_date'=>$pickupdate,
             'return_date'=>$returndate,
             'prospect_name'=>$prospectName,
             'prospect_phone'=>$prospectPhone,
             'pickup_address'=>$prospectfrom,
             'drop_address'=>$prospectto
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