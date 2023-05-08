<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class enquiryController extends Controller
{
    public function insertEnquiryData(Request $request)
    {
         $tripType=$request->input('n_trip');
         $pickupdate=$request->input('n_pickupdate');
         $returndate=$request->input('n_returndate');
         $pickuptime=$request->input('n_pickuptime');
         $prospectName=$request->input('n_prospectName');


        return response()->json([
            'res'=>$pickuptime
        ]);
    }
    
}
