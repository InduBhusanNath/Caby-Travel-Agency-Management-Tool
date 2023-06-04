<!DOCTYPE html>
<html lang="en">
<html>
     <head>
         <title>Admin Dashboard.....</title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <meta name="description" content="Know Us"/>
         <link rel="stylesheet" href="{{URL::asset('../resources/css/app.css')}}"/>
         <link rel="stylesheet" href="{{URL::asset('../resources/css/font.css')}}"/>
         <link rel="stylesheet" href="{{URL::asset('../resources/css/form.css')}}"/>
         <link rel="stylesheet" href="{{URL::asset('../resources/fontawesome/css/all.min.css')}}"/>
         <link rel="stylesheet" href="{{URL::asset('../resources/bootstrap/css/bootstrap.min.css')}}"/>
         <script src="../resources/bootstrap/js/bootstrap.min.js"></script>

     </head>
     <body class="bg-light"><div class="container-fuid">
<!--Upper Section-->
<div class="row">
     <div class="col-sm-4"></div>
     <div class="col-sm-4"></div>
     <div class="col-sm-4">
         <section class="font font18">
             <i class="fa-solid fa-user"></i>
             <?php 
                 echo "<span id='adminShowProfile'>[ADMIN]&nbsp;".$adminuser=session('adminuser')."</span>";
             ?>
         
             <i class="fa-solid fa-right-from-bracket"></i>
             <a href='adminLogout' class="font font18">LogOut</a>
         </section>      

     </div>
</div>
<!--Body Section-->
<div class="row">
     <!--Admin Side Panel-->
     <div class="col-sm-3 padding10">
         <section class="text-center">
            <img src="../public/images/logo/logo.png" class="img-fluid w-80">
         </section>
         <section>
            <p class="font font20 text-center">
                ADMIN PANEL
            </p>
         </section>
         <section class="sidepanel font font24">
             <table class="table">
                 <tbody>
                     <tr><td><span id="adm_db"><i class="fa-solid fa-house"></i>&nbsp;Dashboard</span></td></tr>
                     <tr><td><span id="requests_db" onclick="alert('hi);"><i class="fa-solid fa-code-pull-request"></i>&nbsp;Requests</span></td></tr>
                     <tr><td><a href="javascript:void(0);" onclick="loadPage('users')">Test</a></td></tr>
                 </tbody>
             </table>
             
         


     </div>
     <!--Admin Dashboard-->
     <div class="col-sm-9">
         <section id="content_space"></section>
        
     </div>
</div>
<!--Left Popuo-->
<div id="adminProfile" class="left_popup">
     <section>
        <button id="hideButton" class="hide_btn">&#10060;</button>

     </section>
</div>


     </body><!--JavaScript Files-->
     <script src="../resources/js/admindashboard.js"></script>   
     </html>




