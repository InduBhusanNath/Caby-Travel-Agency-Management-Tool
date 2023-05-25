<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminDashboardController extends Controller
{
     public function showAdminDashboardPage(){
         return redirect()->route('admin_db',['test'=>'1']);
     }
}
