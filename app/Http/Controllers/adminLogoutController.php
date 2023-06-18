<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class adminLogoutController extends Controller
{
    public function adminLogout(Request $request){
         $request->session()->forget('adminuser');
         return redirect()->route('adminlogin');
    }
}
