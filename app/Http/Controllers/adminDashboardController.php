<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminDashboardController extends Controller
{
     public function showAdminDashboard(){
        if(!session('adminuser')){
            return redirect()->route('adminlogin');
        }
        
        return view('/admin/adminDashboard');
     }  
     
    
}
