<!DOCTYPE html>
<html lang="en">
<html>
     <head>
         <title>Taxi Bookings.....</title>
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
     <div class="col-sm-2">
        <a href="{{URL::asset('taxiBooking')}}" class="action">&#11013;</a>
     </div>
     <div class="col-sm-8">
        <h1>Process Taxi Booking Details</h1>
     </div>
     <div class="col-sm-2"></div>
</div>
<div class="row">
     <div class="col-sm-12">
           <form>
               <input type="text" id="token_processTaxiBooking" value="<?php echo csrf_token();?>">
               <input type="text" id="id" value="{{$id}}">
           </form>
          
     </div>
</div>
<div class="row padding10">
      
      <div class="col-sm-4">
           
           <section id="trip_details"  class="background-ghostwhite padding10">
           <button type="button" id="show_update_trip_details" class="btn btn-primary">Update</button>
            <h2>TRIP DETAILS</h2>
           <span class="font font22">TRIP TYPE</span><br/>           
           <span class="font font18">{{$trip_type}}</span><br/>
           <span class="font font22">TRIP DATE</span><br/>
           <span class="font font18">{{$pickup_date}}</span><br/>
           <span class="font font22">RETURN DATE</span><br/>
           <span class="font font18">{{$return_date}}</span><br/>
           <span class="font font22">PICK UP TIME</span><br/>
           <span class="font font18">{{$pickup_time}}</span><br/>           
           </section>
           <section id="update_trip_details" class="background-ghostwhite hidden">
                <button id="hide_trip_details" class="hide_btn">&#10060;</button>
                <span id="res1" class="res"></span>

                <form id="trip_details_form">             
                    
                     <div class="form-group">                 
                          <label for="edit_trip_type">Trip Type</label>
                          <input type="text" class="form-control" id="edit_trip_type" name="n_edit_trip_type" value="{{$trip_type}}"/>
                    </div>
                    <div class="form-group">                 
                          <label for="edit_pickup_date">Pick Up Date</label>
                          <input type="date" class="form-control" id="edit_pickup_date" name="n_edit_pickup_date" value="{{$pickup_date}}"/>       
                     </div>
                    
                     <div class="form-group">                 
                          <label for="edit_return_date">Return Date</label>
                          <input type="date" class="form-control" id="edit_return_date" name="n_edit_return_date" value="{{$return_date}}"/>       
                     </div>
         
                     <div class="form-group">                 
                          <label for="edit_pickup_time">Pick Up Time</label>
                          <input type="text" class="form-control" id="edit_pickup_time" name="n_edit_pickup_time" value="{{$pickup_time}}"/>       
                     </div>
                     <div class="form-group">
                          <button type="submit" class="submit">UPDATE TRIP DETAILS</button>
                     </div>       
         

                </form>
           </section>      
      </div>
      <div class="col-sm-4">
          <section id="client_details" class="background-ghostwhite padding10">
                <button type="button" id="show_update_client_details" class="btn btn-primary">Update</button>
                <h2>CLIENT DETAILS</h2>
                <span class="font font22">NAME</span><br/>
                <span class="font font18">{{$prospect_name}}</span><br/>
                <span class="font font22">PHONE</span><br/>
                <span class="font font18">{{$prospect_phone}}</span><br/>
                <span class="font font22">EMAIL</span><br/>
                <span class="font font18">{{$prospect_email}}</span><br/>       
         
          </section>
      <section id="update_client_details" class="background-ghostwhite hidden">
          <button id="hide_client_details" class="hide_btn">&#10060;</button>
          <span id="res2" class="res"></span>

          <form id="client_details_form">             
                    
                <div class="form-group">                 
                     <label for="edit_prospect_name">Client Name</label>
                     <input type="text" class="form-control" id="edit_prospect_name" name="n_edit_prospect_name" value="{{$prospect_name}}"/>       
                </div>
                <div class="form-group">                 
                     <label for="edit_prospect_phone">Client Phone</label>
                     <input type="text" class="form-control" id="edit_prospect_phone" name="n_edit_prospect_phone" value="{{$prospect_phone}}"/>       
               </div>
                <div class="form-group">                 
                     <label for="edit_prospect_email">Client Email</label>
                     <input type="text" class="form-control" id="edit_prospect_email" name="n_edit_prospect_email" value="{{$prospect_email}}"/>       
                </div>         
         
                <div class="form-group">
                     <button type="submit" class="submit">UPDATE CLIENT DETAILS</button>
                </div>       
         

                </form>
           </section>    
      </div>
      <div class="col-sm-4">
           <section id="address_details" class="background-ghostwhite padding10">
                <button type="button" id="show_update_address_details" class="btn btn-primary">Update</button>
                     <h2>ADDRESS DETAILS</h2>
                     <span class="font font22">PICK UP ADDRESS</span><br/>
                     <span class="font font18">{{$pickup_address}}</span><br/>
                     <span class="font font22">DROP ADDRESS</span><br/>
                     <span class="font font18">{{$drop_address}}</span><br/>
           </section>
           <section id="update_address_details" class="background-ghostwhite padding10 hidden">
                <button id="hide_update_address_details" class="hide_btn">&#10060;</button>
                <span id="res3" class="res"></span>

                <form id="address_details_form">           
                    
                     <div class="form-group">                 
                          <label for="edit_pickup_address">Pick Up Address</label>
                          <input type="text" class="form-control" id="edit_pickup_address" name="n_edit_pickup_address" value="{{$pickup_address}}"/>       
                     </div>
                     <div class="form-group">                 
                          <label for="edit_drop_address">Drop Address</label>
                          <input type="text" class="form-control" id="edit_drop_address" name="n_edit_drop_address" value="{{$drop_address}}"/>       
                     </div>  
         
                     <div class="form-group">
                          <button type="submit" class="submit">UPDATE CLIENT ADDRESS</button>
                     </div>               

                </form>
           </section>   

      </div>        
     
</div>
<div class="row">
      <div class="col-sm-4">
           <section id="taxi_details" class="background-ghostwhite padding10">
           <button type="button" id="show_update_taxi_details" class="btn btn-primary">Update</button>
                <h2>ASSIGN/UPDATE TAXI</h2>
                <span class="font font22">TAXI NUMBER</span><br/>
                <span class="font font18">{{$vehicle_number}}</span><br/>
                <span class="font font22">TAXI TYPE</span><br/>
                <span class="font font18">{{$vehicle_type}}</span><br/>
                <span class="font font22">TAXI MODEL</span><br/>
                <span class="font font18">{{$vehicle_model}}</span><br/>
           </section>
           <section id="update_taxi_details" class="background-ghostwhite padding10 hidden">
                <button id="hide_update_taxi_details" class="hide_btn">&#10060;</button>
                <span id="res4" class="res"></span>

                <form id="taxi_details_form">           
                    
                     <div class="form-group">                 
                          <label for="edit_vehicle_number">Vehicle Number</label>
                          <input type="text" class="form-control" id="edit_vehicle_number" name="n_edit_vehicle_number" value="{{$vehicle_number}}"/>       
                     </div>
                     <div class="form-group">                 
                           <label for="edit_vehicle_type">Vehicle Type</label>
                           <input type="text" class="form-control" id="edit_vehicle_type" name="n_edit_vehicle_type" value="{{$vehicle_type}}"/>       
                     </div>
                     <div class="form-group">                 
                          <label for="edit_vehicle_model">Vehicle Model</label>
                          <input type="text" class="form-control" id="edit_vehicle_model" name="n_edit_vehicle_model" value="{{$vehicle_model}}"/>       
                     </div> 
         
                     <div class="form-group">
                          <button type="submit" class="submit">UPDATE TAXI DETAILS</button>
                     </div>               

                </form>
           </section> 

      </div>
      <div class="col-sm-4">
           <section id="driver_details" class="background-ghostwhite padding10">
                <button type="button" id="show_update_driver_details" class="btn btn-primary">Update</button>
                <h2>DRIVER DETAILS</h2>
                <span class="font font22">DRIVER NAME</span><br/>
                <span class="font font18">{{$driver_name}}</span><br/>
                <span class="font font22">DRIVER PHONE</span><br/>
                <span class="font font18">{{$driver_phone}}</span><br/>
                <span class="font font22">DRIVER IDENDITY</span><br/>
                <span class="font font18">{{$driver_idendity}}</span><br/>
           </section>
           <section id="update_driver_details" class="background-ghostwhite padding10 hidden">
                <button id="hide_update_driver_details" class="hide_btn">&#10060;</button>
                <span id="res5" class="res"></span>

                <form id="driver_details_form">           
                    
                     <div class="form-group">                 
                          <label for="edit_driver_name">Driver Name</label>
                          <input type="text" class="form-control" id="edit_driver_name" name="n_edit_driver_name" value="{{$driver_name}}"/>       
                     </div>
                     <div class="form-group">                 
                          <label for="edit_driver_phone">Driver Phone</label>
                          <input type="text" class="form-control" id="edit_driver_phone" name="n_edit_driver_phone" value="{{$driver_phone}}"/>       
                     </div>
                     <div class="form-group">                 
                          <label for="edit_driver_idendity">Driver Idendity</label>
                          <input type="text" class="form-control" id="edit_driver_idendity" name="n_edit_driver_idendity" value="{{$driver_idendity}}"/>       
                     </div>
         
                     <div class="form-group">
                          <button type="submit" class="submit">UPDATE DRIVER DETAILS</button>
                     </div>               

                </form>
           </section> 
      </div>
      <div class="col-sm-4">
          <section id="fare_details1" class="background-ghostwhite padding10">
          <button type="button" id="show_update_fare_details1" class="btn btn-primary">Update</button>
                <h2>FARE DETAILS-1</h2>
                <span class="font font22">FARE</span><br/>
                <span class="font font18">{{$fare}}</span><br/>
                <span class="font font22">ADVANCE FARE</span><br/>
                <span class="font font18">{{$advance_fare}}</span><br/>
                
           </section>
           <section id="update_fare_details1" class="background-ghostwhite padding10 hidden">
                <button id="hide_update_fare_details1" class="hide_btn">&#10060;</button>
                <span id="res6" class="res"></span>

                <form id="fare_details_form1">           
                    
                     <div class="form-group">                 
                          <label for="edit_fare">Trip Fare(INR)</label>
                          <input type="text" class="form-control" id="edit_fare" name="n_edit_fare" value="{{$fare}}"/>       
                     </div>
                     <div class="form-group">                 
                          <label for="edit_advance_fare">Advance Fare(INR)</label>
                          <input type="text" class="form-control" id="edit_advance_fare" name="n_edit_advance_fare" value="{{$advance_fare}}"/>       
                     </div>         
         
                     <div class="form-group">
                          <button type="submit" class="submit">UPDATE FARE-1 DETAILS</button>
                     </div>               

                </form>
           </section> 
      </div>

</div>
<div class="row">
      <div class="col-sm-4">
          <section id="fare_details2" class="background-ghostwhite padding10">
                <button type="button" id="show_update_fare_details2" class="btn btn-primary">Update</button>
                <h2>FARE-2 DETAILS</h2>
                <span class="font font22">PENDING FARE</span><br/>
                <span class="font font18">{{$pending_fare}}</span><br/>
                <span class="font font22">FINAL FARE PAYMENT</span><br/>
                <span class="font font18">{{$final_fare_payment}}</span><br/>
                <span class="font font22">FARE STATUS</span><br/>
                <span class="font font18">{{$fare_status}}</span><br/>
           </section>
           <section id="update_fare_details2" class="background-ghostwhite padding10 hidden">
                <button id="hide_update_fare_details2" class="hide_btn">&#10060;</button>
                <span id="res7" class="res"></span>

                <form id="fare_details_form2">   
                     <div class="form-group">                 
                          <label for="edit_pending_fare">Pending Fare(INR)</label>
                          <input type="text" class="form-control" id="edit_pending_fare" name="n_edit_pending_fare" value="{{$pending_fare}}"/>       
                     </div>
                     <div class="form-group">                 
                          <label for="edit_final_fare_payment">Final Fare Payment(INR)</label>
                          <input type="text" class="form-control" id="edit_final_fare_payment" name="n_edit_final_fare_payment" value="{{$final_fare_payment}}"/>       
                      </div>
                      <div class="form-group">                 
                          <label for="edit_fare_status">Fare Status</label>
                          <input type="text" class="form-control" id="edit_fare_status" name="n_edit_fare_status" value="{{$fare_status}}"/>       
                      </div>
                     <div class="form-group">
                          <button type="submit" class="submit">UPDATE FARE-2 DETAILS</button>
                     </div>               

                </form>
           </section> 

      </div>
      
      <div class="col-sm-4">
           <section id="booking_status" class="background-ghostwhite padding10">
           <button type="button" id="show_update_booking_status" class="btn btn-primary">Update</button>
                <h2>BOOKING STATUS</h2>
                <span class="font font22">BOOKING STATUS</span><br/>
                <span class="font font18">{{$booking_status}}</span><br/>  
                <span class="font font22">CANCELLATION REASONS(if any)</span><br/>
                <span class="font font18">{{$booking_status_reasons}}</span><br/>                
           </section>
           <section id="update_booking_status" class="background-ghostwhite padding10 hidden">
                <button id="hide_booking_status" class="hide_btn">&#10060;</button>
                <span id="res8" class="res"></span>

                <form id="booking_status_form">   
                     <div class="form-group">       
                          <label for="edit_booking_status">Booking Status</label>
                          <select class="form-select" id="edit_booking_status" name="n_edit_booking_status">
                               <option value="{{$booking_status}}" selected>{{$booking_status}}</option>
                               <option value="Unprocessed">Unprocessed</option>
                               <option value="Confirmed">Confirmed</option>                 
                               <option value="Cancelled">Cancelled</option>
                          </select>    
            
                     </div>
                     <div class="form-group">
                          <label for="edit_booking_reason">Reason For Cancellation</label>
                          <input type="text" class="form-control" id="edit_booking_reason" name="n_edit_booking_reason" readonly/> 

                     </div>
                     <div class="form-group">
                          <button type="submit" class="submit">UPDATE BOOKING STATUS</button>
                     </div>               

                </form>
           </section> 

      </div>
      <div class="col-sm-4">
           <section id="trip_status" class="background-ghostwhite padding10">
           <button type="button" id="show_update_trip_status" class="btn btn-primary">Update</button>
                <h2>TRIP STATUS</h2>
                <span class="font font22">TRIP STATUS</span><br/>
                <span class="font font18">{{$trip_status}}</span><br/>
                <span class="font font22">REASONS(if any)</span><br/>
                <span class="font font18">{{$trip_status_reasons}}</span><br/>
           </section>
           <section id="update_trip_status" class="background-ghostwhite padding10 hidden">
                <button id="hide_trip_status" class="hide_btn">&#10060;</button>
                <span id="res9" class="res"></span>

                <form id="trip_status_form">   
                     <div class="form-group">
                          <label for="edit_trip_status">Trip Status</label>
                          <select class="form-select" id="edit_trip_status" name="n_trip_status">
                               <option value="Unprocessed">Unprocessed</option>
                               <option value="Ongoing">Ongoing</option>
                               <option value="Completed">Completed</option>
                               <option value="Cancelled">Cancelled</option>
                          </select>

                     </div>
                     <div class="form-group">
                          <label for="edit_trip_reason">Reason For Cancellation</label>
                          <input type="text" class="form-control" id="edit_trip_reason" name="n_edit_trip_reason" readonly/> 

                     </div>
                     <div class="form-group">
                          <button type="submit" class="submit">UPDATE TRIP STATUS</button>
                     </div>               

                </form>
           </section> 
            

      </div>
</div>

     
     </div></body>
     <!--JavaScript Files-->
     <script src="{{URL::asset('../resources/js/processtaxibooking.js')}}"></script>
     </html>