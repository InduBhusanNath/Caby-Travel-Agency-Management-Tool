<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminDashboardController extends Controller
{
     public function showAdminDashboard(){
        return view('/admin/adminDashboard');
     }  
     
    
}
