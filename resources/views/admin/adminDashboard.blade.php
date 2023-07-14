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
        <!--CSRF-->
        <form>
            <input type="hidden" id="csrf_token" value="<?php echo csrf_token(); ?>"/>
        </form>
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
     <div class="col-sm-3 background-whitesmoke padding10">
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
                     <tr><td><a href="javascript:void(0);" class="action" id="adm_db" onclick="loadPage('adminDashboardPage')"><span><i class="fa-solid fa-house"></i>&nbsp;Dashboard</span></a></td></tr>
                     <tr><td><a href="taxiBooking" class="action"><i class="fas fa-clipboard-list"></i></i>&nbsp;Taxi Bookings</span></a></td></tr>
                     <tr><td><a href="show_contactusMessages" class="action"><i class="fas fa-inbox"></i>&nbsp;Contact Us Messages</span></a></td></tr>
                        
                     
                     
                     
                 </tbody>
             </table>

        </section>
         <section class="padding10 font font24">
             <span class="collapsible">TASKS</span>
             <span class="collapsible_content">
                 <table class="table">
                     <tbody>
                         <tr>
                             <td><i class="fa-solid fa-user-plus"></i>&nbsp;<a href="users" class="action">Admin Users</a></td>
                         </tr>
                         <tr>
                             <td><i class="fa-solid fa-blog"></i>&nbsp;<a href="blogPosts" class="action">Blogs</a></td>
                         </tr>
                     </tbody>
                 </table>

             </span>
         </section>
             
             
         


     </div>
     <!--Admin Dashboard-->
     <div class="col-sm-9">
         <section id="content_space"></section>        
     </div>
</div>
<!--Left Popup-->
<div id="adminProfile" class="left_popup">
     <section>
        <button id="hideButton" class="hide_btn">&#10060;</button>
             <h4>USER PROFILE</h4>
             <table class="table font font20">
                 <tbody>
                     <tr>
                         <td>NAME</td>
                         <td>{{$name}}</td>
                     </tr>
                     <tr>
                         <td>PHONE</td>
                         <td>{{$phone}}</td>
                     </tr>
                     <tr>
                        <td>DESIGNATION</td>
                        <td>{{$designation}}</td>
                     </tr>
                     <tr>
                         <td>ADDRESS</td>
                         <td>{{$address}}</td>
                     </tr>
                 </tbody>
             </table>

     </section>
     <section>
        <h4>CHANGE PASSWORD</h4>
        <section id="change_admin_password" class="padding10">
                
                <span id="res1" class="res"></span>

                <form id="change_admin_password_form">
                     <div class="form-group">
                          <input type="hidden" class="form-control" id="admin_id" name="n_admin_id" value="{{$id}}"/>                           
                     </div>   
                     
                     <div class="form-group">
                          <label for="admin_old_password">Old Password</label>
                          <input type="password" class="form-control" id="admin_old_password" name="n_admin_old_password"/>                           
                     </div>
                     <div class="form-group">
                          <label for="admin_new_password">New Password</label>
                          <input type="password" class="form-control" id="admin_new_password" name="n_admin_new_password"/>                        
                     </div>
                     <div class="form-group">
                          <button type="submit" class="submit">CHANGE PASSWORD</button>
                     </div>               

                </form>
           </section>
     </section>
</div>


     </body><!--JavaScript Files-->
     <script src="../resources/js/admindashboard.js"></script>   
     </html>




