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
     <body><div class="container-fuid">
<!--Start-->
     @include('partials.header')
<!--Banner-->
<div class="row">
     <div class="col-sm-12 padding0">
        <img src="../public/images/banners/HpTaxi.png" class="img-responsive w-100">
     </div>
</div>
<!--Enquiry Form-->
<div class="row bg-light">
     <div class="col-sm-1">&nbsp;</div>
     <div class="col-sm-10">
         <p>&nbsp;</p>
         <section class="padding10 bg-info" style="border-radius:12px 12px 12px 12px;">
             
             <h2>Are You Looking For A Taxi?</h2>
             <p><span id="res" class="res"></span></p>
             <form id="prospect_request_form">
                     <input type="hidden" id="token" value="<?php echo csrf_token();?>">
                     <!--First Row-->
                     <div class="row">
                          <!--First Radio-->
                          <div class="col-sm-3">
                               <div class="form-check">
                                    <input class="form-check-input" type="radio" id="oneway" name="n_trip_type" value="One-Way"/>
                                    <label for="oneway">One-Way</label> 
                               </div>
                          </div>
                           <!--Second Radio-->
                          <div class="col-sm-3">
                               <div class="form-check">
                                    <input class="form-check-input" type="radio" id="roundtrip" name="n_trip_type" value="Round-Trip"/>
                                    <label for="roundtrip">Round Trip</label>                   
                               </div>
                           </div>
                          <!--First Date-->
                          <div class="col-sm-2">
                               <div class="form-group">
                                    <label for="pickupdate">Pick-Up Date</label>
                                    <input type="date" class="form-control" id="pickupdate" name="n_pickupdate"/>
                              </div>
                          </div>
                          <!--Second Date-->
                          <div class="col-sm-2">
                               <div class="form-group">
                                    <label for="returndate">Return Date</label>
                                    <input type="date" class="form-control" id="returndate" name="n_returndate"/>
                                    
                               </div>
                          </div>
                          <!--Pick Up Time-->
                          <div class="col-sm-2">
                               <label for="pickuptime">Pick Up Time</label>
                               <input type="text" class="form-control" id="pickuptime" name="n_pickuptime"/>                                   
                          </div>

                     </div>
                     <!--Second Row-->
                     <div class="row">
                          <!--Prospect Name-->
                          <div class="col-sm-3">
                               <div class="form-group">
                                    <label for="prospectName">Name</label>
                                    <input type="text" class="form-control" id="prospectName" name="n_prospectName"/>       
                               </div>
                          </div>
                          <!--Contact No-->
                          <div class="col-sm-3">
                               <div class="form-group">
                                    <label for="prospectPhone">Phone</label>
                                    <input type="text" class="form-control" id="prospectPhone" name="n_prospectPhone"/>
                               </div>
                          </div>
                          <!--Pick Up Address-->
                          <div class="col-sm-3">
                               <div class="form-group">
                                    <label for="prospectfrom">Pick Up Address</label>
                                    <textarea  class="form-control" id="prospectfrom" name="n_prospectfrom"></textarea>
                               </div>
                          </div>
                          <!--Drop Address-->
                          <div class="col-sm-3">
                               <div class="form-group">
                                    <label for="prospectto">Drop Address</label>
                                    <textarea  class="form-control" id="prospectto" name="n_prospectto"></textarea>
                               </div>
                          </div>
                     </div>
                     <!--Submit-->
                     <div class="row">
                          <div class="col-sm-12">
                               <div class="form-group">
                                    <button type="submit" class="submit">SEND REQUEST</button>
                               </div>
                          </div>
                     </div>


             </form>


         </section>
     </div>
     <div class="col-sm-1">&nbsp;</div>
</div>






     @include('partials.footer')
<!--End-->
</div></body>
<script src="../resources/js/hp.js"></script>     
</html>