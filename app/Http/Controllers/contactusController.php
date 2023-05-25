<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class contactusController extends Controller
{    
    //Show Contact Us Messages
     public function showContactusMessages(){
         $contactusmessages=DB::table('table_contactus')->get();
         $contactusmessages=DB::table('table_contactus')->simplePaginate(20);

         return view('/admin/contactusMessages',['contactusmessages'=>$contactusmessages]);       

     }
    
    
    
     //Insert Contact Us Message
     public function insertContactusData(Request $request){
         $message_date=$request->input('n_message_date');
         $prospect_name=$request->input('n_prospectName');
         $prospect_phone=$request->input('n_prospectPhone');
         $prospect_message=$request->input('n_prospectMessage');
         
         $insert_data=DB::table('table_contactus')->insert([
             'message_date'=>$message_date,
             'prospect_name'=>$prospect_name,
             'prospect_phone'=>$prospect_phone,
             'prospect_message'=>$prospect_message
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
     //Get Delete Data
     public function userDeleteData(Request $request){
         $contactusid=$request->input('n_contactusid');
         $delid=DB::table('table_contactus')->where('id','=',$contactusid)->get();
         foreach($delid as $row){
             $del_id=$row->id;
             $del_name=$row->prospect_name;
         }
         
         return response()->json([
            'id'=>$del_id,
             'name'=>$del_name
         ]);

     }
    
     //Delete Contact Us Message
     public function deleteContactUsMessage(Request $request){
         $delId=$request->input('n_delmessageId');
         $delmessage=DB::table('table_contactus')->where('id','=',$delId)->delete();
         if($delmessage){
            return response()->json([
                 'del_status'=>'Message Deleted Successfully.....'
            ]);
         }else{
             return response()->json([
                 'del_status'=>'Could Not Delete Message, Try Again.....'
             ]);
         }
     }
}

?>
