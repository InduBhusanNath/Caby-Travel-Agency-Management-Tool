<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminDashboardViewController extends Controller
{
    public function adminDashboardView(){
        return view('/admin/adminDashboardView',['content'=>'hi']);
    }
}
?>