<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;


class loginController extends Controller
{
     public function grant_adminRights(Request $request){
         $userName=$request->input('n_userName');
         $pWord=$request->input('n_password');
         $passWord=md5($pWord);
         $checkUser=DB::table('table_users')
         ->where('username','=',$userName)
         ->where('password','=',$passWord)
         ->where('admin_status','=','Admin')
         ->count();
         if($checkUser=='0'){
             return response()->json([
                'flag'=>'0'
             ]);
         }else if($checkUser>1){
             return response()->json([
                'flag'=>'>1'
             ]);
         }else if($checkUser=='1'){
             session(['adminuser'=>$userName]);
            return response()->json([
                'flag'=>'1'
             ]);
            
         }
     }
}

?>
