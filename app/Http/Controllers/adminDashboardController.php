<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class adminDashboardController extends Controller
{
     public function showAdminDashboard(){
        if(!session('adminuser')){
            return redirect()->route('adminlogin');
        }
        $session=session('adminuser');
        $adminuser=DB::table('table_users')->where('username','=',$session)->get();
        foreach($adminuser as $row){
             $id=$row->id;
             $name=$row->name;
             $phone=$row->phone;
             $designation=$row->designation;
             $address=$row->address;           

        }
        
        return view('/admin/adminDashboard',
           [  'id'=>$id,
             'name'=>$name,
             'phone'=>$phone,
             'designation'=>$designation,
             'address'=>$address
           ]
         );
     }  

     //Change Password
     public function change_adminPassword(Request $request){           
           $admid=$request->input('n_admin_id');
           $old_admpwd=md5($request->input('n_admin_old_password'));
           $new_admpwd=md5($request->input('n_admin_new_password'));

           $chk_rows=DB::table('table_users')
           ->where('id','=',$admid)
           ->where('password','=',$old_admpwd)
           ->count();
           if($chk_rows==1){
                $chg_admPwd=DB::table('table_users')
                ->where('id','=',$admid)                
                ->update(['password'=>$new_admpwd]);                
                if($chg_admPwd){
                    return response()->json([
                         'flag'=>'1'
                    ]);
               
                }
           }else {
                return response()->json([
                    'flag'=>'0'
                ]);

           }
           
           
                
         
     }
     
    
}
