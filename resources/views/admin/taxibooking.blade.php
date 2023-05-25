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
                         <td class="text-center"><a href="javascript:void(0);" class="action">&sharp;</a></td>
                         <td class="text-center">{{$row->trip_type}}</td>
                         <td class="text-center">{{$row->pickup_date}}</td>
                         <td class="text-center">{{$row->return_date}}</td>
                         <td class="text-center">{{$row->pickup_time}}</td>
                         <td class="text-center">{{$row->prospect_name}}</td>
                         <td class="text-center">{{$row->prospect_phone}}</td>
                         <td class="text-center">{{$row->pickup_address}}</td>
                         <td class="text-center">{{$row->drop_address}}</td>
                         <td class="text-center"><a href="javascript:void(0);" class="action">&#128393;</a></td>
                         <td class="text-center"><a href="javascript:void(0);" class="action">&#10060;</a></td>                        

                    </tr>                 
                 @endforeach
             </tbody>
         </table>    


         
     </div>
</div>
<!--Edit Taxi Booking Form-->
<div id="edit_taxibooking_form">
     <section>
         <button id="hideTaxiBookingForm" class="hide_btn">&#10060;</button>
         <h3>Update Taxi Booking Details</h3>
         <span id="res1" class="res"></span>
         <form id="editTaxiBookingForm">
         <div class="form-group">
                 <input type="text" id="token_editTaxiBookingForm" value="<?php echo csrf_token();?>">
                 <label for="edit_trip_type">Trip Type</label>
                 <input type="text" class="form-control" id="edit_trip_type" name="n_edit_trip_type"/>       
             </div>
             <div class="form-group">
                 <button type="submit" class="submit">DELETE USER DETAILS</button>
             </div>

         </form>
     </section>
</div>
     



     </div></body>
     <!--JavaScript Files-->
     <script src="../resources/js/taxibooking.js"></script>
     </html>