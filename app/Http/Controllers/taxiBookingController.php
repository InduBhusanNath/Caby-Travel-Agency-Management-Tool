<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class taxiBookingController extends Controller
{   
    public function showRequestData(){
        $taxi_requests=DB::table('table_taxi_bookings')->get();
         
                

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
         $prospect_email='';
         $prospectfrom=$request->input('n_prospectfrom');
         $prospectto=$request->input('n_prospectto');
         $vehicle_number=''; 
         $vehicle_type='';
         $vehicle_model='';
         $driver_name='';
         $driver_phone='';
         $driver_idendity='';
         $fare='';
         $advance_fare='';
         $pending_fare='';
         $final_fare_payment='';
         $fare_status='';
         $booking_status='';




        $insert_data=DB::table('table_taxi_bookings')->insert([
             'trip_type'=>$tripType,
             'pickup_date'=>$pickupdate,
             'return_date'=>$returndate,
             'pickup_time'=>$pickuptime,
             'prospect_name'=>$prospectName,
             'prospect_phone'=>$prospectPhone,
             'prospect_email'=>$prospect_email,
             'pickup_address'=>$prospectfrom,
             'drop_address'=>$prospectto,
             'vehicle_number'=>$vehicle_number,
             'vehicle_type'=>$vehicle_type,
             'vehicle_model'=>$vehicle_model,
             'driver_name'=>$driver_name,
             'driver_phone'=>$driver_phone,
             'driver_idendity'=>$driver_idendity,
             'fare'=>$fare,
             'advance_fare'=>$advance_fare,
             'pending_fare'=>$pending_fare,
             'final_fare_payment'=>$final_fare_payment,
             'fare_status'=>$fare_status,
             'booking_status'=>$booking_status,
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
   //Set Edit Details
     public function setTaxiBookingEditData(Request $request){
         $editId=$request->input('n_editId');
         $seteditdata=DB::table('table_taxi_bookings')->where('id','=',$editId)->get();
         foreach($seteditdata as $row){
             $eid=$row->id;
             $trip_type=$row->trip_type;
             $pickup_date=$row->pickup_date;
             $return_date=$row->return_date;
             $pickup_time=$row->pickup_time;
             $prospect_name=$row->prospect_name;
             $prospect_phone=$row->prospect_phone;
             $prospect_email=$row->prospect_email;
             $pickup_address=$row->pickup_address;
             $drop_address=$row->drop_address;
             $vehicle_number=$row->vehicle_number;
             $vehicle_type=$row->vehicle_type;
             $vehicle_model=$row->vehicle_model;
             $driver_name=$row->driver_name;
             $driver_phone=$row->driver_phone;
             $driver_idendity=$row->driver_idendity;
             $fare=$row->fare;
             $advance_fare=$row->advance_fare; 
             $pending_fare=$row->pending_fare;
             $final_fare_payment=$row->final_fare_payment;
             $fare_status=$row->fare_status;
             $booking_status=$row->booking_status;
             $trip_status=$row->trip_status;

         }
         return response()->json([
             'eid'=>$eid,
             'trip_type'=>$trip_type,
             'pickup_date'=>$pickup_date,
             'return_date'=>$return_date,
             'pickup_time'=>$pickup_time,
             'prospect_name'=>$prospect_name,
             'prospect_phone'=>$prospect_phone,
             'prospect_email'=>$prospect_email, 
             'pickup_address'=>$pickup_address,
             'drop_address'=>$drop_address, 
             'vehicle_number'=>$vehicle_number,
             'vehicle_type'=>$vehicle_type,  
             'vehicle_model'=>$vehicle_model,
             'driver_name'=>$driver_name,
             'driver_phone'=>$driver_phone,
             'driver_idendity'=>$driver_idendity,
             'fare'=>$fare,
             'advance_fare'=>$advance_fare,
             'pending_fare'=>$pending_fare,
             'final_fare_payment'=>$final_fare_payment,
             'fare_status'=>$fare_status,
             'booking_status'=>$booking_status,
             'trip_status'=>$trip_status

         ]);

    }
    //Edit Taxi Booking Data
     public function editTaxiBookingData(Request $request){
             $id=$request->input('n_edit_id');
             $editQuery=DB::table('table_taxi_bookings')->where('id','=',$id)
             ->update([
                 'trip_type'=>$request->input('n_edit_trip_type'),
                 'pickup_date'=>$request->input('n_edit_pickup_date'),
                 'return_date'=>$request->input('n_edit_return_date'),
                 'pickup_time'=>$request->input('n_edit_pickup_time'),
                 'prospect_name'=>$request->input('n_edit_prospect_name'),
                 'prospect_phone'=>$request->input('n_edit_prospect_phone'),
                 'prospect_email'=>$request->input('n_edit_prospect_email'),
                 'pickup_address'=>$request->input('n_edit_pickup_address'),
                 'drop_address'=>$request->input('n_edit_drop_address'),
                 'vehicle_number'=>$request->input('n_edit_vehicle_number'),
                 'vehicle_type'=>$request->input('n_edit_vehicle_type'),
                 'vehicle_model'=>$request->input('n_edit_vehicle_model'),
                 'driver_name'=>$request->input('n_edit_driver_name'),
                 'driver_phone'=>$request->input('n_edit_driver_phone'),
                 'driver_idendity'=>$request->input('n_edit_driver_idendity'),
                 'fare'=>$request->input('n_edit_advance_fare'),
                 'advance_fare'=>$request->input('n_edit_advance_fare'),
                 'pending_fare'=>$request->input('n_edit_pending_fare'),
                 'final_fare_payment'=>$request->input('n_edit_final_fare_payment'),
                 'fare_status'=>$request->input('n_edit_fare_status'),
                 'booking_status'=>$request->input('n_edit_booking_status'),
                 'trip_status'=>$request->input('n_trip_status')
             ]);
             if($editQuery){
                return response()->json([
                     'flag_edit'=>'Taxi Booking Data Updated Successfully'
                ]);
             }else{
                 return response()->json([
                     'flag_edit'=>'Could Not Update Taxi Booking Data, Try Again.....'

                 ]);
             }

     }
     //Process Taxi Booking Data
     public function processTaxiBookingData(){
        return view('/admin/processTaxiBooking');
     }
     //Set Delete Details
     public function setTaxiBookingDeleteData(Request $request){
         $delid=$request->input('n_delid');
         $setdeletedata=DB::table('table_taxi_bookings')->where('id','=',$delid)->get();
         foreach($setdeletedata as $row){
             $id=$row->id;
             $prospect_name=$row->prospect_name;
         }
         if($setdeletedata){
            return response()->json([
                 'flag'=>'1',
                 'id'=>$id,
                 'prospect_name'=>$prospect_name

            ]);
         }else{
             return response()->json([
                'flag'=>'0'
             ]);
         }        

     }
     //Delete Taxi Booking Data
     public function deleteTaxiBookingData(Request $request){
         $delete_id=$request->input('n_delete_id');
         $deleteQuery=DB::table('table_taxi_bookings')->where('id','=',$delete_id)->delete();
         if($deleteQuery){
            return response()->json([
                 'flag'=>'Taxi Booking Data Deleted Successfully.....'
            ]);
         }else{
             return response()->json([
                 'flag'=>'Could Not Delete TaxiBooking Data,Try Again.....'
            ]);
         }
         
     }
     //Display Request Status
     public function showTaxiBookingRequestStatus(string $id){
         //ID
         $booking_id=$id;
         $taxirequests=DB::table('table_taxi_bookings')->where('id','=',$booking_id)->get();
         foreach($taxirequests as $row){
             $trip_type=$row->trip_type;
             $pickup_date=$row->pickup_date;
             $return_date=$row->return_date;
             $pickup_time=$row->pickup_time;
             $prospect_name=$row->prospect_name;
             $prospect_phone=$row->prospect_phone;
             $prospect_email=$row->prospect_email;
             $pickup_address=$row->pickup_address;
             $drop_address=$row->drop_address;
             $vehicle_number=$row->vehicle_number;
             $vehicle_type=$row->vehicle_type;
             $vehicle_model=$row->vehicle_model;
             $driver_name=$row->driver_name;
             $driver_phone=$row->driver_phone;
             $driver_idendity=$row->driver_idendity;
             $fare=$row->fare;
             $advance_fare=$row->advance_fare; 
             $pending_fare=$row->pending_fare;
             $final_fare_payment=$row->final_fare_payment;
             $fare_status=$row->fare_status;
             $booking_status=$row->booking_status;
             $booking_status_reasons=$row->booking_status_reasons;
             $trip_status=$row->trip_status;
             $trip_status_reasons=$row->trip_status_reasons;

         }
         return view('/admin/processTaxiBooking',
         [ 
          'id'=>$booking_id,
          'trip_type'=>$trip_type,
          'pickup_date'=>$pickup_date,
          'return_date'=>$return_date,
          'pickup_time'=>$pickup_time,
          'prospect_name'=>$prospect_name,
          'prospect_phone'=>$prospect_phone,
          'prospect_email'=>$prospect_email,
          'pickup_address'=>$pickup_address,
          'drop_address'=>$drop_address,
          'vehicle_number'=>$vehicle_number,
          'vehicle_type'=>$vehicle_type,
          'vehicle_model'=>$vehicle_model,
          'driver_name'=>$driver_name,
          'driver_phone'=>$driver_phone,
          'driver_idendity'=>$driver_idendity,
          'fare'=>$fare,
          'advance_fare'=>$advance_fare,
          'pending_fare'=>$pending_fare,
          'final_fare_payment'=>$final_fare_payment,
          'fare_status'=>$fare_status,
          'booking_status'=>$booking_status,
          'booking_status_reasons'=>$booking_status_reasons,
          'trip_status'=>$trip_status,
          'trip_status_reasons'=>$trip_status_reasons                   
        ]);
     }
     //Update Trip Details
     public function updateTaxiTripDetails(Request $request){
         $id=$request->input('n_id');
         $trip_type=$request->input('n_edit_trip_type');
         $pickup_date=$request->input('n_edit_pickup_date');
         $return_date=$request->input('n_edit_return_date');
         $pickup_time=$request->input('n_edit_pickup_time');

         $updateTrip=DB::table('table_taxi_bookings')->where('id','=',$id)
         ->update([
             'trip_type'=>$trip_type,
             'pickup_date'=>$pickup_date,
             'return_date'=>$return_date,
             'pickup_time'=>$pickup_time
         ]);
         if($updateTrip){
            return response()->json([
                 'trip_update'=>'1'
            ]);
         }else{
            return response()->json([
                 'trip_update'=>'0'
            ]);
         }
     }
     //Update Client Details
     public function updateClientDetails(Request $request){
         $id=$request->input('n_id');
         $edit_prospect_name=$request->input('n_edit_prospect_name');
         $edit_prospect_phone=$request->input('n_edit_prospect_phone');
         $edit_prospect_email=$request->input('n_edit_prospect_email');

         $updateClient=DB::table('table_taxi_bookings')->where('id','=',$id)
         ->update([
             'prospect_name'=>$edit_prospect_name,
             'prospect_phone'=>$edit_prospect_phone,
             'prospect_email'=>$edit_prospect_email
         ]);
         if($updateClient){
            return response()->json([
                'flag_client'=>'1'
            ]);

         }else{
            return response()->json([
                'flag_client'=>'0'
            ]);
         }
     }

     //Update Address
     public function updateClientAddresses(Request $request){
          $id=$request->input('n_id');
          $edit_pickup_address=$request->input('n_edit_pickup_address');
          $edit_drop_address=$request->input('n_edit_drop_address');

          $updateAddress=DB::table('table_taxi_bookings')->where('id','=',$id)
          ->update([
                 'pickup_address'=>$edit_pickup_address,
                 'drop_address'=>$edit_drop_address
          ]);
          if($updateAddress){
                 return response()->json([
                     'flag_address'=>'1'
                ]);
          }else{
                 return response()->json([
                     'flag_address'=>'1'
                 ]);

          }
          
          
          

     }
     //Update Taxi
     public function updateTaxiDetails(Request $request){
         $id=$request->input('n_id');
         $edit_vehicle_number=$request->input('n_edit_vehicle_number');
         $edit_vehicle_type=$request->input('n_edit_vehicle_type');
         $edit_vehicle_model=$request->input('n_edit_vehicle_model');

         $updateTaxi=DB::table('table_taxi_bookings')->where('id','=',$id)
         ->update([
                 'vehicle_number'=>$edit_vehicle_number,
                 'vehicle_type'=>$edit_vehicle_type,
                 'vehicle_model'=>$edit_vehicle_model
            ]);

            if($updateTaxi){
                 return response()->json([
                     'flag_taxi'=>'1'
                 ]);
            }else{
                 return response()->json([
                     'flag_taxi'=>'0'
                 ]);

            }

     }
     //Update Driver Details
     public function updateDriverDetails(Request $request){
         $n_id=$request->input('n_id');
         $edit_driver_name=$request->input('n_edit_driver_name');
         $edit_driver_phone=$request->input('n_edit_driver_phone');
         $edit_driver_idendity=$request->input('n_edit_driver_idendity');

         $updateDriver=DB::table('table_taxi_bookings')->where('id','=',$n_id)
         ->update([
             'driver_name'=>$edit_driver_name,
             'driver_phone'=>$edit_driver_phone,
             'driver_idendity'=>$edit_driver_idendity
         ]);
         if($updateDriver){
             return response()->json([
                'flag_driver'=>'1'
             ]);
         }else{
            return response()->json([
                'flag_driver'=>'0'
             ]);
         }
     }
     // Update Fare1 Details
     public function updateFare1Details(Request $request){
         $id=$request->input('n_id');
         $edit_fare=$request->input('n_edit_fare');
         $edit_advance_fare=$request->input('n_edit_advance_fare');
         $balance_fare=$edit_fare-$edit_advance_fare;

         $updateFare1=DB::table('table_taxi_bookings')->where('id','=',$id)
         ->update([
             'fare'=>$edit_fare,
             'advance_fare'=>$edit_advance_fare,
             'pending_fare'=>$balance_fare,
             'fare_status'=>'Unpaid'
         ]);
         if($updateFare1){
             return response()->json([
                 'flag_fare1'=>'1',
             ]);   
         }else{
            return response()->json([
                 'flag_fare1'=>'0',
                             
            ]);
         }

     }
     //Update Fare2 Details
     public function updateFare2Details(Request $request){
         $id=$request->input('n_id');
         $edit_pending_fare=$request->input('n_edit_pending_fare');
         $edit_final_fare_payment=$request->input('n_edit_final_fare_payment');
         $edit_fare_status=$request->input('n_edit_fare_status');
         $updateFare2=DB::table('table_taxi_bookings')->where('id','=',$id)
         ->update([
             'pending_fare'=>$edit_pending_fare,
             'final_fare_payment'=>$edit_final_fare_payment,
             'fare_status'=>$edit_fare_status
         ]);
         if($updateFare2){
            return response()->json([
                 'flag_fare2'=>'1'
            ]);
         }else{
            return response()->json([
                'flag_fare2'=>'0'
            ]);
                           
         }

     }

     //Update BookingStatus
     public function updateBookingStatus(Request $request){
         $id=$request->input('n_id');
         $edit_booking_status=$request->input('n_edit_booking_status');
         $edit_booking_reason=$request->input('n_edit_booking_reason');

         $updateBooking=DB::table('table_taxi_bookings')->where('id','=',$id)
         ->update([
             'booking_status'=>$edit_booking_status,
             'booking_status_reasons'=>$edit_booking_reason
         ]);
         if($updateBooking){
             return response()->json([
                'flag_booking'=>'1'
             ]);
         }else{
            return response()->json([
                'flag_booking'=>'0'
             ]);

         }


     }

     //Update Trip Status
     public function updateTripStatus(Request $request){
         $id=$request->input('n_id');
         $trip_status=$request->input('n_trip_status');
         $n_edit_trip_reason=$request->input('n_edit_trip_reason');

         $updateBooking=DB::table('table_taxi_bookings')->where('id','=',$id)
         ->update([
             'trip_status'=>$trip_status,
             'trip_status_reasons'=>$n_edit_trip_reason
         ]);
         if($updateBooking){
             return response()->json([
                'flag_trip'=>'1'
             ]);
         }else{
            return response()->json([
                'flag_trip'=>'0'
             ]);

         }

     }
     
}

?>