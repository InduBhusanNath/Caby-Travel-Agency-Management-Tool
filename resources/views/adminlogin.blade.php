<!DOCTYPE html>
<html lang="en">
<html>
     <head>
         <title>Aeiety Trips:Affordable Taxi|Taxi Services in Guwahati.....</title>
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
<div class="row"> 
      <div class="col-sm-4">
           <section class="text-center">
                <img src="../public/images/logo/logo.png" class="img-fluid w-80">
           </section>
      </div>
      <div class="col-sm-4"></div>
      <div class="col-sm-4">
           <section>
                <i><?php echo "Today is:&nbsp;".date('d-m-Y'); ?></i>          
           </section>
      </div>
</div>

<div class="row">
     <div class="col-sm-4">
         
     </div>
     <div class="col-sm-4 padding10">
         
         <p>&nbsp;</p>
         <section class="padding10 bg-light" style="border-radius:12px 12px 12px 12px;">
                <h2>ADMIN LOGIN</h2>
                <p><span id="res1" class="res"></span></p>
                <form id="adminlogin_form">
                     <input type="hidden" id="token_adminlogin_form" value="<?php echo csrf_token();?>">
                     <div class="form-group">
                          <label for="userName">UserName</label>
                          <input type="text" class="form-control" id="userName" name="n_userName"/>       
                     </div>
                     <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" class="form-control" id="password" name="n_password"/>
                     </div>
                     <div class="form-group">
                          <input type="checkbox" id="sw_pwd"/>
                          <label for="sw_pwd">Show Password</label> 
                     </div>
                     
                     <div class="form-group">
                          <button type="submit" class="submit">LOGIN</button>
                     </div>
                </form> 
                <p>&nbsp;</p>
                <p class="font font14"><a href="forgot_password" class="action">Forgot Password</a></p>    
          </section>

     </div>
     <div class="col-sm-4"></div>
</div>



     </div></body><script src="../resources/js/adminlogin.js"></script></html>