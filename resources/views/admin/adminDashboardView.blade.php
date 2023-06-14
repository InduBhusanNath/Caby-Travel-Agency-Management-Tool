<!DOCTYPE html>
<html lang="en">
<html>
     <head>
         <title>Contact Us.....</title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <meta name="description" content="Know Us"/>
         <link rel="stylesheet" href="{{URL::asset('../resources/css/app.css')}}"/>
         <link rel="stylesheet" href="{{URL::asset('../resources/css/font.css')}}"/>
         <link rel="stylesheet" href="{{URL::asset('../resources/css/form.css')}}"/>
         <link rel="stylesheet" href="{{URL::asset('../resources/fontawesome/css/all.min.css')}}"/>
         <link rel="stylesheet" href="{{URL::asset('../resources/bootstrap/css/bootstrap.min.css')}}"/>
         <script src="../resources/bootstrap/js/bootstrap.min.js"></script>

     </head>
     <body><div class="container-fuid">
<div class="row">
     <div class="col-sm-4"><h4>Taxi Bookings</h4></div>
     <div class="col-sm-4"></div>
     <div class="col-sm-4"></div>
</div>
<div class="row">
     <div class="col-sm-2">
         <div class="card">
             
             <div class="card-body text-center">
                 <span class="font font24">{{$new_requests}}</span>
             </div>
             <div class="card-footer">
                <a href="taxiBooking" class="action font font14"> New Requests<br/>&#129034;</a>
             </div>
         </div>
     </div>
     <div class="col-sm-2">
         <div class="card">             
             <div class="card-body text-center">
                 <span class="font font24">{{$confirmed_bookings}}</span>
             </div>
             <div class="card-footer">
                <a href="taxiBooking" class="action font font14">Confirmed Bookings<br/>&#129034;</a>
             </div>
         </div>
     </div>
     <div class="col-sm-2">
         <div class="card">             
             <div class="card-body text-center">
                 <span class="font font24">{{$ongoing}}</span>
             </div>
             <div class="card-footer">
                <a href="taxiBooking" class="action font font14">On Going Trips<br/>&#129034;</a>
             </div>
         </div>

     </div>
     <div class="col-sm-2">
         <div class="card">             
             <div class="card-body text-center">
                 <span class="font font24">{{$unpaid_fare}}</span>
             </div>
             <div class="card-footer">
                <a href="taxiBooking" class="action font font14">Unpaid Trip Fare<br/>&#129034;</a>
             </div>
         </div>

     </div>
     <div class="col-sm-2"></div>
     <div class="col-sm-2"></div>

</div>
<div class="row">
     <div class="col-sm-4"><h4>Others</h4></div>
     <div class="col-sm-4"></div>
     <div class="col-sm-4"></div>
</div>
<div class="row">
     <div class="col-sm-2">
         <div class="card">             
             <div class="card-body text-center">
                 <span class="font font24">{{$blogs_count}}</span>
             </div>
             <div class="card-footer">
                <a href="blogPosts" class="action font font14">Blogs Count<br/>&#129034;</a>
             </div>
         </div>

     </div>
     <div class="col-sm-2">
         <div class="card">             
             <div class="card-body text-center">
                 <span class="font font24">{{$contactus_messages}}</span>
             </div>
             <div class="card-footer">
                <a href="show_contactusMessages" class="action font font14">Contact Messages<br/>&#129034;</a>
             </div>
         </div>

     </div>
     <div class="col-sm-2">
         <div class="card">             
             <div class="card-body text-center">
                 <span class="font font24">{{$contactus_messages}}</span>
             </div>
             <div class="card-footer">
                <a href="show_contactusMessages" class="action font font14">Contact Messages<br/>&#129034;</a>
             </div>
         </div>
     </div>
     <div class="col-sm-2"></div>
     <div class="col-sm-2"></div>
     <div class="col-sm-2"></div>
</div>

         
     </div><body></html>