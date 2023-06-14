<!DOCTYPE html>
<html lang="en">
<html>
     <head>
         <title>Aeiety Trips:Affordable Taxi|Cab Services in Guwahati.....</title>
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
<!--Banner-->
<div class="row">
     <div class="col-sm-12 padding0">
           <img src="../public/images/banners/Homepage.png" class="img-responsive w-100">
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
                     <br/>
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
         <p>&nbsp;</p>
         
     </div>
     <div class="col-sm-1">&nbsp;</div>
</div>
<!--About Us-->
<div class="row padding10 background-lightgoldenrodyellow">
      
      <div class="col-sm-8">
           <section class="background-lightgoldenrodyellow padding10" style="border-radius:12px 12px 12px 12px;">
                <span class="font fone24 lead"><b>What We Do</b></span>
                <br/><br/>
                <h3>We Provide Top-Quality Taxi Rental Services At Affordable Fares</h3>
                <br/>
                <span class="font font22 lead">
                     <p>At Aeiety Trips, we provide the most affordable taxi services, which are best-in-class in terms of quality.</p>
                 
                     <p>Get efficient,trusted and timely taxi rentals for your trip. We provide small, medium and luxury cars to rent at affordable prices.</p>
                 
                     <p>We prioritise safety and punctuality in our services above everything else to give you a trusted and best experience.</p>
                 
                     <p>We strive to serve our clients with excellent cab services, giving them the value of their money and time.</p>
                     <p><a href="aboutus" class="action">&#129034;</a></p>
                </span>
           </section>
          
      </div>
      <div class="col-sm-4 bg-warning">
          <section class="bg-warning padding10 font font18" style="border-radius:12px 12px 12px 12px;">
                <span class="font font24">FAQs</span>
                <div class="collapse_text1">How to Book a Taxi at Aeiety Trips? <span style="float:right;">&plus;</span></div>
                <div class="collapse_text2">You can either submit the request form,call us, or even drop an email.</div>
                <div class="collapse_text1">What to Do if I Need to Cancel My Booking?<span style="float:right;">&plus;</span></div>
                <div class="collapse_text2">You can call us to cancel your taxi booking.</div>
                <div class="collapse_text1">Is There Any Charges for Cancelling Booking?<span style="float:right;">&plus;</span></div>
                <div class="collapse_text2">You need not pay any charges of you cancel your booking up to one day prior to the journey date. If you do so on the scheduled trip date,you need to pay 50% of the fare.</div>
                <div class="collapse_text1">What Types of Cars Do You Provide?<span style="float:right;">&plus;</span></div>
                <div class="collapse_text2">We provide small, medium and luxury cars. And, the fares varies accordingly.</div>
          </section>
           <br/>
           <section class="bg-warning padding10 font font18" style="border-radius:12px 12px 12px 12px;">
            <h3>Need Help?</h3>
            <span class="font font18 lead">We are ready to assist you in every step of your taxi booking journey.<br/> Call/Whatapp us at 8888</span>
           </section>

      </div>
      
</div>
<!--Services-->
<div class="row background-powderblue">
      <div class="col-sm-2"></div>
      <div class="col-sm-8">
           <p>&nbsp;</p>
           <h1>Service Offerings</h1>
           <p>&nbsp;</p>
      </div>
      <div class="col-sm-2"></div>
</div>
<div class="row background-powderblue">
      <div class="col-sm-3">
           <div class="card border-0 bg-transparent">
                <div class="card-body">                     
                     <span class="font font18 lead text-center">
                          Regardless of where you want to go, we have the coresponding taxi service for you.
                          <br/>Want to Know More? <br/>Call at 8978789
                          <p>&nbsp;</p>
                     </span>
                </div>
           </div>              
      </div>
      <div class="col-sm-3 background-mintcream">
           <div class="card border-0 bg-transparent">
                <div class="card-body">
                     <h2><i class="fa-solid fa-map"></i></h2>
                     <h4>Local Trips</h4>
                     <p class="font font18 lead text-center">
                          Taxis for intra-city places, such as airport, hospital, market, office or instititions. 

                     </p>
                     
                </div>
           </div>
           
      </div>
      <div class="col-sm-3 background-mintcream">      
           <div class="card border-0 bg-transparent">
                <div class="card-body">
                     <h2><i class="fa-solid fa-location-crosshairs"></i></h2>
                     <h4>Outstation Tours</h4>
                     <p class="font font18 lead text-center">
                         Cabs for destinations outside the city for one-way or two-way travels. 
                     </p>
                     <p>&nbsp;</p>
                </div>
           </div>
      </div>
      <div class="col-sm-3 background-mintcream">
           <div class="card bg-transparent border-0">
                <div class="card-body">
                <h2><i class="fa-solid fa-umbrella-beach"></i></h2>
                     <h4>Sight Seeing Trips</h4>
                     <p class="font font18 lead text-center">
                         Taxis for pleasure trips or sight seeing places within or outside the city.
                     </p>
                     <p>&nbsp;</p>
                </div>
           </div>      
      </div>
</div>
<div class="row background-aliceblue">
      <div class="col-sm-3"></div>
      <div class="col-sm-6">
           <p>&nbsp;</p>
           <span><h1>Why Choose Us?</h1></span>
           <p>&nbsp;</p>
      </div>      
      <div class="col-sm-3"></div>
</div>
<div class="row background-aliceblue padding10">
      
      <div class="col-sm-3">
           <div class="card bg-transparent border-0">
                <div class="card-body">
                    <h4><i class="fa-solid fa-money-bill"></i>&nbsp;Affordable</h4>
                    <span class="lead font font18">
                          Get the most affordable taxi services, gaining the best value for your money and time. Also, quality is associated with affordability.

                    </span>
                    <p>&nbsp;</p>                   

                </div>
           </div>
      
      </div>
      <div class="col-sm-3">
      <div class="card bg-transparent border-0">
                <div class="card-body">
                    <h4><i class="fa-solid fa-clock"></i>&nbsp;Timely</h4>
                    <span class="lead font font18">
                          Board the cab on time,without any delay in the pick-up time. We ensure reaching your destination as per your schedule.

                    </span> 
                    <p>&nbsp;</p>                  

                </div>
           </div>


      </div>
      <div class="col-sm-3">
      <div class="card bg-transparent border-0">
                <div class="card-body">
                    <h4><i class="fa-solid fa-shield"></i>&nbsp;Safety</h4>
                    <span class="lead font font18">
                          Be assured of a safe journey due to well-trained and expert drivers. And,well-serviced cars minimize the breakdown risks.

                    </span>
                    <p>&nbsp;</p>                   

                </div>
           </div>
      </div>
      <div class="col-sm-3">
      <div class="card bg-transparent border-0">
                <div class="card-body">
                    <h4><i class="fa-solid fa-face-smile"></i>&nbsp;Satisfaction</h4>
                    <span class="lead font font18">
                          Experience high satisfaction during the entire trip. From friendly behaviour to tranparent fares, everything adds to satisfaction.

                    </span>
                    <p>&nbsp;</p>                   

                </div>
           </div>
      </div>
      </div>
</div>
<!--Blogs--> 
<div class="row background-azure padding10">
      <div class="col-sm-4"></div>
      <div class="col-sm-4">
           <p>&nbsp;</p>
                <h1>Blogs</h1>
           <p>&nbsp;</p>
     </div>
      <div class="col-sm-4"></div>
</div>
<div class="row background-azure padding10">
      <?php
          if(isset($_GET['page'])){
               $page_no=$_GET['page'];
          }else{
               $page_no='1';
          }
       ?>
      
      @foreach($hpblogs as $row)
           <div class="col-sm-3 text-center">
                <div class="card w-100">
                      <img src="{{$row->image_path1}}" style="height:10rem;" class="img-fluid card-img-top" alt="blog_image"/>                     
                     <div class="card-footer">
                          <span class="card-text"><a class="font font18 action" href="blog_show/id/{{$row->id}}/page/home/page_no/{{$page_no}}">{{$row->title}}&#129030;</a></span>
                     </div>
                </div>
                

           </div>
      @endforeach
      
      
</div>






     @include('partials.footer')
<!--End-->
</div></body>
<script src="../resources/js/hp.js"></script>     
</html>