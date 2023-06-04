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
<!--Headings-->
<div class="row">
     <div class="col-sm-1"></div>
     <div class="col-sm-10">
         <h2>Taxi Bookings</h2>
     </div>
     <div class="col-sm-1"></div>
</div>
<!--Body-->
<div class="row">
     <div class="col-sm-12">
         <form>
             <input type="text" id="token_taxibooking" value="<?php echo csrf_token();?>">
         </form>
         <table class="table font font18">
             <thead>
                <tr>
                     <th scope="col" class="text-center">PROCESS</th>                     
                     <th scope="col" class="text-center">TRIP TYPE</th>
                     <th scope="col" class="text-center">PICK-UP DATE</th>
                     <th scope="col" class="text-center">RETURN DATE</th>
                     <th scope="col" class="text-center">PICK-UP TIME</th>
                     <th scope="col" class="text-center">CLIENT NAME</th>
                     <th scope="col" class="text-center">CLIENT PHONE</th>
                     <th scope="col" class="text-center">PICK-UP ADDRESS</th>
                     <th scope="col" class="text-center">DROP ADDRESS</th>
                     <th scope="col" class="text-center">UPDATE</th>
                     <th scope="col" class="text-center">DELETE</th>
                </tr>
             </thead>
             <tbody>
                 @foreach($taxi_requests as $row)
                         
                     <tr>
                         <td class="text-center"><a href="process_taxiBooking/{{$row->id}}" class="action">&sharp;</a></td>
                         <td class="text-center">{{$row->trip_type}}</td>
                         <td class="text-center">{{$row->pickup_date}}</td>
                         <td class="text-center">{{$row->return_date}}</td>
                         <td class="text-center">{{$row->pickup_time}}</td>
                         <td class="text-center">{{$row->prospect_name}}</td>
                         <td class="text-center">{{$row->prospect_phone}}</td>
                         <td class="text-center">{{$row->pickup_address}}</td>
                         <td class="text-center">{{$row->drop_address}}</td>
                         <td class="text-center"><a href="javascript:void(0);" class="getid action" name={{$row->id}}>&#128393;</a></td>
                         <td class="text-center"><a href="javascript:void(0);" class="getid1 action" name={{$row->id}}>&#10060;</a></td>                        

                    </tr>                 
                 @endforeach
             </tbody>
         </table>    


         
     </div>
</div>
<!--Edit Taxi Booking Form-->
<div id="edit_taxibooking_form" class="popup">
     <section>
         <button id="hideEditTaxiBookingForm" class="hide_btn">&#10060;</button>
         <h3>Update Taxi Booking Details</h3>
         <span id="res1" class="res"></span>
         <form id="editTaxiBookingForm">
         <input type="hidden" id="token_editTaxiBookingForm" value="<?php echo csrf_token();?>">
         <input type="text" id="edit_id" name="n_edit_id">
         <div class="form-group">                 
             <label for="edit_trip_type">Trip Type</label>
             <input type="text" class="form-control" id="edit_trip_type" name="n_edit_trip_type"/>       
         </div>
         <div class="form-group">                 
             <label for="edit_pickup_date">Pick Up Date</label>
             <input type="date" class="form-control" id="edit_pickup_date" name="n_edit_pickup_date"/>       
         </div>
         <div class="form-group">                 
             <label for="edit_return_date">Return Date</label>
             <input type="date" class="form-control" id="edit_return_date" name="n_edit_return_date"/>       
         </div>
         <div class="form-group">                 
             <label for="edit_pickup_time">Pick Up Time</label>
             <input type="text" class="form-control" id="edit_pickup_time" name="n_edit_pickup_time"/>       
         </div>
         <div class="form-group">                 
             <label for="edit_prospect_name">Prospect Name</label>
             <input type="text" class="form-control" id="edit_prospect_name" name="n_edit_prospect_name"/>       
         </div>
         <div class="form-group">                 
             <label for="edit_prospect_phone">Prospect Phone</label>
             <input type="text" class="form-control" id="edit_prospect_phone" name="n_edit_prospect_phone"/>       
         </div>
         <div class="form-group">                 
             <label for="edit_prospect_email">Prospect Email</label>
             <input type="text" class="form-control" id="edit_prospect_email" name="n_edit_prospect_email"/>       
         </div>
         <div class="form-group">                 
             <label for="edit_pickup_address">Pick Up Address</label>
             <input type="text" class="form-control" id="edit_pickup_address" name="n_edit_pickup_address"/>       
         </div>
         <div class="form-group">                 
             <label for="edit_drop_address">Drop Address</label>
             <input type="text" class="form-control" id="edit_drop_address" name="n_edit_drop_address"/>       
         </div>
         <div class="form-group">                 
             <label for="edit_vehicle_number">Vehicle Number</label>
             <input type="text" class="form-control" id="edit_vehicle_number" name="n_edit_vehicle_number"/>       
         </div>
         <div class="form-group">                 
             <label for="edit_vehicle_type">Vehicle Type</label>
             <input type="text" class="form-control" id="edit_vehicle_type" name="n_edit_vehicle_type"/>       
         </div>
         <div class="form-group">                 
             <label for="edit_vehicle_model">Vehicle Model</label>
             <input type="text" class="form-control" id="edit_vehicle_model" name="n_edit_vehicle_model"/>       
         </div>
         <div class="form-group">                 
             <label for="edit_driver_name">Driver Name</label>
             <input type="text" class="form-control" id="edit_driver_name" name="n_edit_driver_name"/>       
         </div>
         <div class="form-group">                 
             <label for="edit_driver_phone">Driver Phone</label>
             <input type="text" class="form-control" id="edit_driver_phone" name="n_edit_driver_phone"/>       
         </div>
         <div class="form-group">                 
             <label for="edit_driver_idendity">Driver Idendity</label>
             <input type="text" class="form-control" id="edit_driver_idendity" name="n_edit_driver_idendity"/>       
         </div>
         <div class="form-group">                 
             <label for="edit_fare">Fare(INR)</label>
             <input type="text" class="form-control" id="edit_fare" name="n_edit_fare"/>       
         </div>
         <div class="form-group">                 
             <label for="edit_advance_fare">Advance Fare(INR)</label>
             <input type="text" class="form-control" id="edit_advance_fare" name="n_edit_advance_fare"/>       
         </div>
         <div class="form-group">                 
             <label for="edit_pending_fare">Pending Fare(INR)</label>
             <input type="text" class="form-control" id="edit_pending_fare" name="n_edit_pending_fare"/>       
         </div>
         <div class="form-group">                 
             <label for="edit_final_fare_payment">Final Fare Payment(INR)</label>
             <input type="text" class="form-control" id="edit_final_fare_payment" name="n_edit_final_fare_payment"/>       
         </div>
         <div class="form-group">                 
             <label for="edit_fare_status">Fare Status</label>
             <input type="text" class="form-control" id="edit_fare_status" name="n_edit_fare_status"/>       
         </div>
         <div class="form-group">       
             <label for="edit_booking_status">Booking Status</label>
             <select class="form-select" id="edit_booking_status" name="n_edit_booking_status">
                 <option value="Unprocessed">Unprocessed</option>
                 <option value="Confirmed">Confirmed</option>                 
                 <option value="Cancelled">Cancelled</option>
             </select>     
            
         </div>
         <div class="form-group">
             <label for="edit_trip_status">Trip Status</label>
             <select class="form-select" id="edit_trip_status" name="n_trip_status">
                 <option value="Unprocessed">Unprocessed</option>
                 <option value="Ongoing">Ongoing</option>
                 <option value="Done">Done</option>
                 <option value="Cancelled">Cancelled</option>

             </select>

         </div>
             <div class="form-group">
                 <button type="submit" class="submit">UPDATE BOOKING DETAILS</button>
             </div>

         </form>
     </section>
</div>
<div id="delete_taxibooking_form" class="popup">
     <section>
         <button id="hideDeleteTaxiBookingForm" class="hide_btn">&#10060;</button>
         <h3>Delete Taxi Booking Details</h3>
         <span id="res2" class="res"></span>
         <form id="deleteTaxiBookingForm">
             <input type="hidden" id="token_deleteTaxiBookingForm" value="<?php echo csrf_token();?>">
             <input type="hidden" id="delete_id" name="n_delete_id">
             <span id="del_message" class="res"></span>
             <p>&nbsp;</p>
              <div class="form-group">
                 <button type="submit" class="submit">DELETE BOOKING DETAILS</button>
              </div>

         </form>
     </section>
</div>
     



     </div></body>
     <!--JavaScript Files-->
     <script src="../resources/js/taxibooking.js"></script>
     </html>