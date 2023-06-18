<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\userModel;

class userController extends Controller
{    
    //Display Users
     public function displayUsers(){
        if(!session('adminuser')){
            return redirect()->route('adminlogin');
        }
         $users=userModel::orderByDesc('entry_date')->get();
         $users=userModel::paginate(20);
         return view('/admin/users',['users'=>$users]);
     }
    
    //Insert User
    public function insertUser(Request $request){
         $username=$request->input('n_username');
         $userCount=DB::table('table_users')->where('username','=',$username)->count();
         if($userCount==1){
                  
                 return response()->json([
                     'flag'=>'User Already Exists.....'
                 ]);
                 exit();
         }else if($userCount>1){
                 
                 return response()->json([
                     'flag'=>'Duplicate User.....'
                 ]);
                 exit();

         }
         $user=new userModel;
         $user->entry_date=$request->input('n_entry_date');
         $user->name=$request->input('n_name');
         $user->username=$username;
         $user->phone=$request->input('n_phone');
         $user->password=md5($request->input('n_password'));
         $user->designation=$request->input('n_admin_status');
         $user->address=$request->input('n_designation');
         $user->admin_status=$request->input('n_admin_status');

        $user->save();
        return response()->json([
            'flag'=>$username.'.....User Submitted Successfully'
        ]);


    }
    //Priviledge Data
    public function send_user_priviledge_data(Request $request){
         $pid=$request->input('n_pid1');
         $role=DB::table('table_users')
         ->where('id','=',$pid)
         ->get();
         foreach($role as $row){
                 $prvid=$row->id;
                 $status=$row->admin_status;
                 $usrname=$row->username;
         }
         return response()->json([
                 'id'=>$prvid,
                 'status'=>$status,
                 'usrname'=>$usrname            
         ]);     

    }

    //Set Priviledge Data
     public function set_userPriviledge(Request $request){
         $priviledgeId=$request->input('n_prvid');
         $admin_role=$request->input('n_user_priviledge');
         $setRole=userModel::where('id',$priviledgeId)->update(['admin_status'=>$admin_role]);
         if($setRole){
             return response()->json([
                 'flag'=>'Admin Status Changed Successfully.....'
             ]);
         }else{
            return response()->json([
                'flag'=>'Could Change Admin Status,Try Again.....'
            ]);
         }


     }

     //Set Edit Values
     public function set_editData(Request $request){
          $eid=$request->input('n_eid');
          $editData=DB::table('table_users')->where('id','=',$eid)->get();          
          foreach($editData as $row){
                 $id=$row->id;
                 $name=$row->name;
                 $username=$row->username;
                 $phone=$row->phone;
                 $designation=$row->designation;
                 $address=$row->address;
         }
         return response()->json([
             'id'=>$id,
             'name'=>$name,
             'username'=>$username,
             'phone'=>$phone,
             'designation'=>$designation,
             'address'=>$address
         ]);
     }
     //Edit User Details
     public function edit_userDetails(Request $request){
             $edit_id=$request->input('n_edit_id');
             $edit_name=$request->input('edit_n_name');
             $edit_username=$request->input('edit_n_username');
             $edit_phone=$request->input('edit_n_phone');
             $edit_designation=$request->input('edit_n_designation');
             $edit_address=$request->input('edit_n_address');

             $updateUser=userModel::where('id',$edit_id)->update([
                 'name'=>$edit_name,
                 'username'=>$edit_username,
                 'phone'=>$edit_phone,
                 'designation'=>$edit_designation,
                 'address'=>$edit_address
             ]);
             if($updateUser){
                 return response()->json([
                     'flag'=>$edit_username.'&nbsp; User Details Updated Successfully.....'
                 ]);
             }else{
                 return response()->json([
                      'flag'=>'Failed to Update User Details, Try Again.....'
                 ]);
             }            

     }
     //Send Username
     public function set_delData(Request $request){
             $did=$request->input('n_did');
             $getDelUser=DB::table('table_users')->where('id','=',$did)->get();
             foreach($getDelUser as $row){
                 $user=$row->username;
             }
             if($getDelUser){
                return response()->json([
                    'flag'=>$user
                ]);
             } else{
                 return response()->json([
                    'flag'=>'Something Went Wrong, Try Again.....'
                 ]);
             }           

     }

     //Delete User
     public function delete_userData(Request $request){
         $usernameDelete=$request->input('delete_n_username');
         $deleteUser=userModel::where('username',$usernameDelete)->delete();
         if($deleteUser){
             return response()->json([
                'flag'=>$usernameDelete.'&nbsp;User is Deleted Successfully.....'
             ]);
         }else{
             return response()->json([
                'flag'=>'Could Not Delete User, Try Again.....'
             ]);

         }

     }

}
