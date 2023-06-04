function refreshPage(){
    location.reload(true);
}

//Universal
var token_processTaxiBooking=document.getElementById("token_processTaxiBooking").value;
var id=document.getElementById("id").value;


var trip_details=document.getElementById("trip_details");
var show_update_trip_details=document.getElementById("show_update_trip_details");
var update_trip_details=document.getElementById("update_trip_details");
var hide_trip_details=document.getElementById("hide_trip_details");
var res1=document.getElementById("res1");

var trip_details_form=document.getElementById("trip_details_form");
var edit_trip_type=document.getElementById("edit_trip_type");
var edit_pickup_date=document.getElementById("edit_pickup_date");
var edit_return_date=document.getElementById("edit_return_date");
var edit_pickup_time=document.getElementById("edit_pickup_time");

//Show Update Trip Details
function showTripDetails(){
      setTimeout(function(){
           trip_details.style.display="none";
           update_trip_details.style.display="block";
      },100);      
}

show_update_trip_details.onclick=showTripDetails;
function hideTripDetails(){
      setTimeout(function(){
           refreshPage();
           update_trip_details.style.display="none";
           trip_details.style.display="block";
      },100);
}

hide_trip_details.onclick=hideTripDetails;

function submit_trip_details_form(e){
      e.preventDefault();
      var fd1=new FormData();
      fd1.append('n_id',id);
      fd1.append('n_edit_trip_type',edit_trip_type.value);
      fd1.append('n_edit_pickup_date',edit_pickup_date.value);
      fd1.append('n_edit_return_date',edit_return_date.value);
      fd1.append('n_edit_pickup_time',edit_pickup_time.value);

      
      let xhr1=new XMLHttpRequest();
      xhr1.open('POST','/Aeiety/public/update_taxitrip',true);
      xhr1.setRequestHeader('X-CSRF-TOKEN',token_processTaxiBooking);
      xhr1.send(fd1);
      xhr1.onload=function(){
           var tripupdate=JSON.parse(xhr1.responseText);
           var flag_update=tripupdate.trip_update;
           if(flag_update=='1'){
                res1.innerHTML="Trip Details Successfully Updated.....";
           }else if(flag_update=='0'){
                res1.innerHTML="Could Not Update Trip Details, Try Again.....";

           }
      }

}
trip_details_form.addEventListener('submit',submit_trip_details_form);

//Client Details
var client_details=document.getElementById("client_details");
var show_update_client_details=document.getElementById("show_update_client_details");
var update_client_details=document.getElementById("update_client_details");
var hide_client_details=document.getElementById("hide_client_details");
var res2=document.getElementById("res2");
var client_details_form=document.getElementById("client_details_form");
var edit_prospect_name=document.getElementById("edit_prospect_name");
var edit_prospect_phone=document.getElementById("edit_prospect_phone");
var edit_prospect_email=document.getElementById("edit_prospect_email");

//Show Client Details
function showClientDetails(){
      setTimeout(function(){
           client_details.style.display="none";
           update_client_details.style.display="block";           
      },100);
}
show_update_client_details.onclick=showClientDetails;

//Update Client Details
function hideClientDetails(){
      setTimeout(function(){
           refreshPage();
           client_details.style.display="block";
           update_client_details.style.display="none";   
      },100);
}
hide_client_details.onclick=hideClientDetails;
//Submit Update Client Form
function submit_client_details_form(e){
      e.preventDefault();
      var fd2=new FormData();
      fd2.append('n_id',id);
      fd2.append('n_edit_prospect_name',edit_prospect_name.value);
      fd2.append('n_edit_prospect_phone',edit_prospect_phone.value);
      fd2.append('n_edit_prospect_email',edit_prospect_email.value);
      

      let xhr2=new XMLHttpRequest();
      xhr2.open('POST','/Aeiety/public/update_client',true);
      xhr2.setRequestHeader('X-CSRF-TOKEN',token_processTaxiBooking);
      xhr2.send(fd2);
      xhr2.onload=function(){
           var responseClient=JSON.parse(xhr2.responseText);
           var flag_client=responseClient.flag_client;
           if(flag_client=='1'){
                res2.innerHTML='Client Details Updated Successfully.....';
           }else if(flag_client=='0'){
                res2.innerHTML='Could Not Update Client Details, Try Again.....';
           }
      }

}
client_details_form.addEventListener('submit',submit_client_details_form);

//Address Details
var address_details=document.getElementById("address_details");
var show_update_address_details=document.getElementById("show_update_address_details");
var update_address_details=document.getElementById("update_address_details");
var hide_update_address_details=document.getElementById("hide_update_address_details");
var res3=document.getElementById("res3");
var address_details_form=document.getElementById("address_details_form");
var edit_pickup_address=document.getElementById("edit_pickup_address");
var edit_drop_address=document.getElementById("edit_drop_address");

//Show Address Update Form
show_update_address_details.onclick=function(){
      setTimeout(function(){
           address_details.style.display="none";
           update_address_details.style.display="block";
      },100);
          
            
}
//Hide Address Form
hide_update_address_details.onclick=function(){
      setTimeout(function(){
           refreshPage();            
           update_address_details.style.display="none";
           address_details.style.display="block";
      },100);
      
}
 
 //Submit Address Update Form
 function submit_address_update_form(e){
      e.preventDefault();
      var fd3=new FormData();
      fd3.append('n_id',id);
      fd3.append('n_edit_pickup_address',edit_pickup_address.value);
      fd3.append('n_edit_drop_address',edit_drop_address.value);

      let xhr3=new XMLHttpRequest();
      xhr3.open('POST','/Aeiety/public/update_address',true);
      xhr3.setRequestHeader('X-CSRF-TOKEN',token_processTaxiBooking);
      xhr3.send(fd3);
      xhr3.onload=function(){
           
           var responseAddress=JSON.parse(xhr3.responseText);
           var flag_address=responseAddress.flag_address;
           if(flag_address=='1'){
                res3.innerHTML="Address Updated Successfully.....";
           }else if(flag_address=='0'){
                res3.innerHTML="Could Not Update Address,Try Again.....";
           }
      }
 }
address_details_form.addEventListener('submit',submit_address_update_form);

//Taxi Details
var taxi_details=document.getElementById("taxi_details");
var show_update_taxi_details=document.getElementById("show_update_taxi_details");
var update_taxi_details=document.getElementById("update_taxi_details");
var hide_update_taxi_details=document.getElementById("hide_update_taxi_details");
var res4=document.getElementById("res4");
var taxi_details_form=document.getElementById("taxi_details_form");
var edit_vehicle_number=document.getElementById("edit_vehicle_number");
var edit_vehicle_type=document.getElementById("edit_vehicle_type");
var edit_vehicle_model=document.getElementById("edit_vehicle_model");

//Show Taxi Form
show_update_taxi_details.onclick=function(){
      setTimeout(function(){
           taxi_details.style.display="none";
           update_taxi_details.style.display="block";
      },100);
      
}
//Hide Taxi Form
hide_update_taxi_details.onclick=function(){
      setTimeout(function(){
           refreshPage();
           update_taxi_details.style.display="none";
           taxi_details.style.display="block";
      },100);
}
//Submit Taxi Form
function submit_taxi_details_form(e){
      e.preventDefault();
      var fd4=new FormData();
      fd4.append('n_id',id);
      fd4.append('n_edit_vehicle_number',edit_vehicle_number.value);
      fd4.append('n_edit_vehicle_type',edit_vehicle_type.value);
      fd4.append('n_edit_vehicle_model',edit_vehicle_model.value);

      let xhr4=new XMLHttpRequest();
      xhr4.open('POST','/Aeiety/public/update_taxi',true);
      xhr4.setRequestHeader('X-CSRF-TOKEN',token_processTaxiBooking);
      xhr4.send(fd4);
      xhr4.onload=function(){
           var responseTaxi=JSON.parse(xhr4.responseText);
           var flag_taxi=responseTaxi.flag_taxi;
           if(flag_taxi=='1'){
                res4.innerHTML="Taxi Details Updated Successfully.....";
           }else if(flag_taxi=='0'){
                res4.innerHTML="Could Not Update Taxi Details, Try Again.....";
           }
      }

}
taxi_details_form.addEventListener('submit',submit_taxi_details_form);

//Driver Details

var driver_details=document.getElementById("driver_details");
var show_update_driver_details=document.getElementById("show_update_driver_details");
var update_driver_details=document.getElementById("update_driver_details");
var hide_update_driver_details=document.getElementById("hide_update_driver_details");
var res5=document.getElementById("res5");
var driver_details_form=document.getElementById("driver_details_form");
var edit_driver_name=document.getElementById("edit_driver_name");
var edit_driver_phone=document.getElementById("edit_driver_phone");
var edit_driver_idendity=document.getElementById("edit_driver_idendity");

//Show Driver Form
show_update_driver_details.onclick=function(){
      setTimeout(function(){
           driver_details.style.display="none";
           update_driver_details.style.display="block";
      }, 100);
      
}

//Hide Driver Form
hide_update_driver_details.onclick=function(){
      setTimeout(function(){
           refreshPage();
           update_driver_details.style.display="none";
           driver_details.style.display="block";
      },100);
}

//Submit Driver Form
function submit_driver_details_form(e){
      e.preventDefault();
       var fd5=new FormData();
       fd5.append('n_id',id);
       fd5.append('n_edit_driver_name',edit_driver_name.value);
       fd5.append('n_edit_driver_phone',edit_driver_phone.value);
       fd5.append('n_edit_driver_idendity',edit_driver_idendity.value);
       
       let xhr5=new XMLHttpRequest();
       xhr5.open('POST','/Aeiety/public/update_driver',true);
       xhr5.setRequestHeader('X-CSRF-TOKEN',token_processTaxiBooking);
       xhr5.send(fd5);
       xhr5.onload=function(){
           var responseDriver=JSON.parse(xhr5.response);
           var flag_driver=responseDriver.flag_driver;
           if(flag_driver=='1'){
                res5.innerHTML="Driver Details Updated Successfully.....";
           }else if(flag_driver=='0'){
                res5.innerHTML="Could Not Update Driver Details, Try Again.....";
           }
       }
}
driver_details_form.addEventListener('submit',submit_driver_details_form);

//Fare Details1
var fare_details1=document.getElementById("fare_details1");
var show_update_fare_details1=document.getElementById("show_update_fare_details1");
var update_fare_details1=document.getElementById("update_fare_details1");
var hide_update_fare_details1=document.getElementById('hide_update_fare_details1');
var res6=document.getElementById("res6");
var fare_details_form1=document.getElementById("fare_details_form1");
var edit_fare=document.getElementById("edit_fare");
var edit_advance_fare=document.getElementById("edit_advance_fare");
//Show Fare1 Form
show_update_fare_details1.onclick=function(){
      setTimeout(function(){
           fare_details1.style.display="none";
           update_fare_details1.style.display="block";
      },100);      
}
//Hide Fare1 Form
hide_update_fare_details1.onclick=function(){
      setTimeout(function(){
           refreshPage();
           update_fare_details1.style.display="none";
           fare_details1.style.display="block";
      },100);
}
//Submit Fare1 Form
function submit_fare_details_form1(e){
      e.preventDefault();
      var fd6=new FormData();
      fd6.append('n_id',id);
      fd6.append('n_edit_fare',edit_fare.value);
      fd6.append('n_edit_advance_fare',edit_advance_fare.value);
      
      let xhr6=new XMLHttpRequest();
      xhr6.open('POST','/Aeiety/public/update_fare1',true);
      xhr6.setRequestHeader('X-CSRF-TOKEN',token_processTaxiBooking);
      xhr6.send(fd6)
      xhr6.onload=function(){
           var responseFare1=JSON.parse(xhr6.response);
           var flag_fare1=responseFare1.flag_fare1;    
           if(flag_fare1=='1'){
                res6.innerHTML="Fare1 Details Updated Successfully.....";
           }else if(flag_fare1=='0'){
                res6.innerHTML="Could Not Update Fare1,Try Again.....";
           }
      }
}
fare_details_form1.addEventListener('submit',submit_fare_details_form1);
//Fare details2
var fare_details2=document.getElementById("fare_details2");
var show_update_fare_details2=document.getElementById("show_update_fare_details2");
var update_fare_details2=document.getElementById("update_fare_details2");
var hide_update_fare_details2=document.getElementById("hide_update_fare_details2");
var res7=document.getElementById("res7");
var fare_details_form2=document.getElementById("fare_details_form2");
var edit_pending_fare=document.getElementById("edit_pending_fare");
var edit_final_fare_payment=document.getElementById("edit_final_fare_payment");
var edit_fare_status=document.getElementById("edit_fare_status");
//Show Fare2 Details
show_update_fare_details2.onclick=function(){
      setTimeout(function(){
           fare_details2.style.display="none";
           update_fare_details2.style.display="block";
      },100);
      
}
//Hide Fare2 Details
hide_update_fare_details2.onclick=function(){
      setTimeout(function(){
           refreshPage();
           update_fare_details2.style.display="none";
           fare_details2.style.display="block";
      },100);
}

//Show Payment Values
edit_final_fare_payment.oninput=function(){
     var pf=edit_pending_fare.value;
var ff=edit_final_fare_payment.value;
var diff=Number(ff)-Number(pf);
if(diff>0){
      edit_fare_status.value='Overpaid'+'['+diff+']';
}else if(diff<0){
      edit_fare_status.value='Underpaid'+'['+diff+']';
}else if(diff==0){
      edit_fare_status.value='Paid';
}

}
//Submit Fare2 Form
function submit_fare_details_form2(e){
      e.preventDefault();
      var fd7=new FormData();
      fd7.append('n_id',id);
      fd7.append('n_edit_pending_fare',edit_pending_fare.value);
      fd7.append('n_edit_final_fare_payment',edit_final_fare_payment.value);
      fd7.append('n_edit_fare_status',edit_fare_status.value);

      let xhr7=new XMLHttpRequest();
      xhr7.open('POST','/Aeiety/public/update_fare2',true);
      xhr7.setRequestHeader('X-CSRF-TOKEN',token_processTaxiBooking);
      xhr7.send(fd7);
      xhr7.onload=function(){
           var responseFare2=JSON.parse(xhr7.response);
           var flag_fare2=responseFare2.flag_fare2;
           if(flag_fare2=='1'){
                res7.innerHTML="Fare2 Details Updated Successfully.....";
           }else if(flag_fare2=='0'){
               res7.innerHTML="Could Not Update Fare2 Details,Try Again.....";
           }
      }

}
fare_details_form2.addEventListener('submit',submit_fare_details_form2);

//Booking Status
var booking_status=document.getElementById("booking_status");
var show_update_booking_status=document.getElementById("show_update_booking_status");
var update_booking_status=document.getElementById("update_booking_status");
var hide_booking_status=document.getElementById("hide_booking_status");
var res8=document.getElementById("res8");
var booking_status_form=document.getElementById("booking_status_form");
var edit_booking_status=document.getElementById("edit_booking_status");
var edit_booking_reason=document.getElementById("edit_booking_reason");
//Show Booking Status
show_update_booking_status.onclick=function(){
      setTimeout(function(){
           booking_status.style.display="none";
           update_booking_status.style.display="block";
      },100);

}
//Hide Booking Status
hide_booking_status.onclick=function(){
      setTimeout(function(){
           refreshPage();
           update_booking_status.style.display="none";
           booking_status.style.display="block";
      },100);
}
edit_booking_reason.value="NA";
edit_booking_status.onchange=function(){
      if(edit_booking_status.value=='Cancelled'){
           edit_booking_reason.readOnly=false;
           edit_booking_reason.value="Type Cancellation Reason";
      }else{
           edit_booking_reason.readOnly=true;
           edit_booking_reason.value="NA";
      }
}
//Submit Booking Status Form
function submit_booking_status_form(e){
      e.preventDefault();
      var fd8=new FormData();
      fd8.append('n_id',id);
      fd8.append('n_edit_booking_status',edit_booking_status.value);
      fd8.append('n_edit_booking_reason',edit_booking_reason.value);

      let xhr8=new XMLHttpRequest();
      xhr8.open('POST','/Aeiety/public/update_booking_status',true);
      xhr8.setRequestHeader('X-CSRF-TOKEN',token_processTaxiBooking);
      xhr8.send(fd8);
      xhr8.onload=function(){
           var responseBooking=JSON.parse(xhr8.response);
           var flag_booking=responseBooking.flag_booking;
           if(flag_booking=='1'){
                res8.innerHTML="Booking Status Updated Successfully.....";
           }else if(flag_booking=='0'){
               res8.innerHTML="Could Not Update Booking Data, Try Again.....";
           }

          
      }



      
      

}

booking_status_form.addEventListener('submit',submit_booking_status_form);

//Update Trip Status
var trip_status=document.getElementById("trip_status");
var show_update_trip_status=document.getElementById("show_update_trip_status");
var update_trip_status=document.getElementById("update_trip_status");

var hide_trip_status=document.getElementById("hide_trip_status");
var res9=document.getElementById("res9");
var trip_status_form=document.getElementById("trip_status_form");
var edit_trip_status=document.getElementById("edit_trip_status");
var edit_trip_reason=document.getElementById("edit_trip_reason");
//Show Trip Status Form
show_update_trip_status.onclick=function(){
      setTimeout(function(){
           trip_status.style.display="none";
           update_trip_status.style.display="block";
      },100);     
}
//Hide Trip Status Form
hide_trip_status.onclick=function(){
      setTimeout(function(){
           refreshPage();
           update_trip_status.style.display="none";
           trip_status.style.display="block";
      },100);
}
edit_trip_reason.value="NA";
edit_trip_status.onchange=function(){
      if(edit_trip_status.value=='Cancelled'){
           edit_trip_reason.readOnly=false;
           edit_trip_reason.value="Type Cancellation Reason";
      }else{
           edit_trip_reason.readOnly=true;
           edit_trip_reason.value="NA";
      }
}
//Submit Trip Details Form
function submit_trip_status_form(e){
      e.preventDefault();
      var fd9=new FormData();
      fd9.append('n_id',id);
      fd9.append('n_trip_status',edit_trip_status.value);
      fd9.append('n_edit_trip_reason',edit_trip_reason.value);

      let xhr9=new XMLHttpRequest();
      xhr9.open('POST','/Aeiety/public/update_trip_status',true);
      xhr9.setRequestHeader('X-CSRF-TOKEN',token_processTaxiBooking);
      xhr9.send(fd9);
      xhr9.onload=function(){
           var responseTrip=JSON.parse(xhr9.response);
           var flag_trip=responseTrip.flag_trip;
           if(flag_trip=='1'){
                res9.innerHTML='Trip Status Data Updated Successfully.....';
           }else if(flag_trip=='0'){
               res9.innerHTML='Could Not Update Trip Status Data, Try Again.....';
           }
      }
}
trip_status_form.addEventListener('submit',submit_trip_status_form);
















