<!DOCTYPE html>
<html lang="en">
<html>
     <head>
         <title>About Us.....</title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="icon" href="../public/images/icons/caricon.png" type="image/gif" sizes="16x16">
         <meta name="description" content="Know Us"/>
         <link rel="stylesheet" href="{{URL::asset('../resources/css/app.css')}}"/>
         <link rel="stylesheet" href="{{URL::asset('../resources/css/font.css')}}"/>
         <link rel="stylesheet" href="{{URL::asset('../resources/css/form.css')}}"/>
         <link rel="stylesheet" href="{{URL::asset('../resources/fontawesome/css/all.min.css')}}"/>
         <link rel="stylesheet" href="{{URL::asset('../resources/bootstrap/css/bootstrap.min.css')}}"/>
         <script src="../resources/bootstrap/js/bootstrap.min.js"></script>

     </head>
     <body><div class="container-fuid">
<!--Start-->
     @include('partials.header')
<div class="row">
     <div class="col-sm-12">
         <nav aria-label="breadcrumb">
             <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="home">Home</a></li>
                 <li class="breadcrumb-item active" aria-current="page">About Us</li>
             </ol>
         </nav>
     </div>
</div>

<!--Banner-->
<div class="row">
     
     <div class="col-sm-12 padding0">
           <img src="../public/images/banners/aboutus.png" class="img-fluid w-100">
     </div>
     
</div>
<!--About Us Description-->
<div class="row background-ghostwhite">
     <div class="col-sm-1">&nbsp;</div>
     <div class="col-sm-10">
         <section class="text-center"><h1>A Bit About Us</h1></section>
         <br/>
         <section class="text-center"><h2>Clients Are At The Center Of Everything We Do</h2></section>
         <br/>
         <section class="text-left font font18">
         <p>
         Aeiety Trips is a provider of the most affordable taxi services, which are dicated by the three principles:safety, punctuality, and customer-centricity.
         We provide small, medium, and large cars at reasonable and affordable fares for different types of trips.
         </p>
         <p>
         We are on a mission to ease rental taxi travel for our customers by eliminating hindrances, such as excessive fares,hidden costs,and untimely pick-up.
         </p>        
         
         </section>

     </div>
     <div class="col-sm-1">&nbsp;</div>
</div>
<div class="row background-ghostwhite">
      <div class="col-sm-1">&nbsp;</div>
      <div class="col-sm-5">
           <h3>Vision</h3>
           <section class="font font18">
                <ul>
                     <li>To be the most preffered rental taxi services provider in the North Eastern region of India</li>                     
                </ul>
           </section>
           

      </div>
      <div class="col-sm-5">
           <h3>Mission</h3>
           <section class="font font18">
                <ul>
                     <li>To serve clients with the most satisfyting rental taxi service at affordable fares</li>
                     <li>Create and implement innovative solutions to give customers the best value of their money</li>
                </ul>
           </section>
      </div>
      <div class="col-sm-1">&nbsp;</div>
</div>
<div class="row background-ghostwhite">
      <div class="col-sm-1">&nbsp;</div>
      <div class="col-sm-10">
           <p>&nbsp;</p>
           <h3>We Are Different,We Are The Best</h3>
           <p>&nbsp;</p>
      </div>
      <div class="col-sm-1">&nbsp;</div>
</div>

     

@include('partials.footer')
<!--End-->
     </div></body></html>












