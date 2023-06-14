<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class hpController extends Controller
{
    //Show HomePage
     public function showHomePage(){
         $hpblogs=DB::table('table_blogs')->limit(4)->get();         
         return view('hp',['hpblogs'=>$hpblogs]);
    }
}
