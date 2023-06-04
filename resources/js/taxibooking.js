//Refresh Page
function refreshPage(){
     location.reload(true);
}


var token_taxibooking=document.getElementById("token_taxibooking").value;
//Edit Module
var getId=document.getElementsByClassName("getid");
var i;
for(i=0;i<getId.length;i++){
     getId[i].addEventListener('click',function(){
           var editId=this.getAttribute("name");
           var fd1=new FormData();
           fd1.append('n_editId',editId);
           let xhr1=new XMLHttpRequest();
           xhr1.open('POST','set_taxibooking_edit_data',true);
           xhr1.setRequestHeader('X-CSRF-TOKEN',token_taxibooking);
           xhr1.send(fd1);
           xhr1.onload=function(){
                var responseTaxiBooking=JSON.parse(xhr1.responseText);
                var id=responseTaxiBooking.eid;
                var trip_type=responseTaxiBooking.trip_type;
                var pickup_date=responseTaxiBooking.pickup_date;
                var return_date=responseTaxiBooking.return_date;
                var pickup_time=responseTaxiBooking.pickup_time;
                var prospect_name=responseTaxiBooking.prospect_name;
                var prospect_phone=responseTaxiBooking.prospect_phone;
                var prospect_email=responseTaxiBooking.prospect_email;
                var pickup_address=responseTaxiBooking.pickup_address;
                var drop_address=responseTaxiBooking.drop_address;
                var vehicle_number=responseTaxiBooking.vehicle_number;
                var vehicle_type=responseTaxiBooking.vehicle_type;
                var vehicle_model=responseTaxiBooking.vehicle_model;
                var driver_name=responseTaxiBooking.driver_name;
                var driver_phone=responseTaxiBooking.driver_phone;
                var driver_idendity=responseTaxiBooking.driver_idendity;
                var fare=responseTaxiBooking.fare;
                var advance_fare=responseTaxiBooking.advance_fare;
                var pending_fare=responseTaxiBooking.pending_fare;
                var final_fare_payment=responseTaxiBooking.final_fare_payment;
                var fare_status=responseTaxiBooking.fare_status;
                var booking_status=responseTaxiBooking.booking_status;
                var trip_status=responseTaxiBooking.trip_status;

                //Edit Form Variables
                var edit_taxibooking_form=document.getElementById("edit_taxibooking_form");
                var hideEditTaxiBookingForm=document.getElementById("hideEditTaxiBookingForm");
                var res1=document.getElementById("res1");                
                //Show Edit Form
                edit_taxibooking_form.style.display="block";
                hideEditTaxiBookingForm.onclick=function(){
                     refreshPage();
                     edit_taxibooking_form.style.display="none";
                }

                var token_editTaxiBookingForm=document.getElementById("token_editTaxiBookingForm").value;
                var edit_id=document.getElementById("edit_id");
                var edit_trip_type=document.getElementById("edit_trip_type");
                var edit_pickup_date=document.getElementById("edit_pickup_date");
                var edit_return_date=document.getElementById("edit_return_date");
                var edit_pickup_time=document.getElementById("edit_pickup_time");
                var edit_prospect_name=document.getElementById("edit_prospect_name");
                var edit_prospect_phone=document.getElementById("edit_prospect_phone");
                var edit_prospect_email=document.getElementById("edit_prospect_email");
                var edit_pickup_address=document.getElementById("edit_pickup_address");
                var edit_drop_address=document.getElementById("edit_drop_address");
                var edit_vehicle_number=document.getElementById("edit_vehicle_number");
                var edit_vehicle_type=document.getElementById("edit_vehicle_type");
                var edit_vehicle_model=document.getElementById("edit_vehicle_model");
                var edit_driver_name=document.getElementById("edit_driver_name");
                var edit_driver_phone=document.getElementById("edit_driver_phone");
                var edit_driver_idendity=document.getElementById("edit_driver_idendity");
                var edit_fare=document.getElementById("edit_fare");
                var edit_advance_fare=document.getElementById("edit_advance_fare");
                var edit_pending_fare=document.getElementById("edit_pending_fare");
                var edit_final_fare_payment=document.getElementById("edit_final_fare_payment");
                var edit_fare_status=document.getElementById("edit_fare_status");
                var edit_booking_status=document.getElementById("edit_booking_status");
                var edit_trip_status=document.getElementById("edit_trip_status");

                
                edit_id.value=id;
                edit_trip_type.value=trip_type;
                edit_pickup_date.value=pickup_date;                
                edit_return_date.value=return_date;
                edit_pickup_time.value=pickup_time;
                edit_prospect_name.value=prospect_name;
                edit_prospect_phone.value=prospect_phone;
                edit_prospect_email.value=prospect_email;
                edit_pickup_address.value=pickup_address;
                edit_drop_address.value=drop_address;
                edit_vehicle_number.value=vehicle_number;
                edit_vehicle_type.value=vehicle_type;
                edit_vehicle_model.value=vehicle_model;
                edit_driver_name.value=driver_name;
                edit_driver_phone.value=driver_phone;
                edit_driver_idendity.value=driver_idendity;
                edit_fare.value=fare;
                edit_advance_fare.value=advance_fare;
                edit_pending_fare.value=pending_fare;
                edit_final_fare_payment.value=final_fare_payment;
                edit_fare_status.value=fare_status;
                edit_booking_status.value=booking_status;
                edit_trip_status.value=trip_status;

                //Submit Edit Form
                function submit_edit_taxi_booking_data(e){
                     e.preventDefault();
                     var fd2=new FormData();
                     fd2.append('n_edit_id',edit_id.value);
                     fd2.append('n_edit_trip_type',edit_trip_type.value);
                     fd2.append('n_edit_pickup_date',edit_pickup_date.value);
                     fd2.append('n_edit_return_date',edit_return_date.value);
                     fd2.append('n_edit_pickup_time',edit_pickup_time.value);
                     fd2.append('n_edit_prospect_name',edit_prospect_name.value);
                     fd2.append('n_edit_prospect_phone',edit_prospect_phone.value);
                     fd2.append('n_edit_prospect_email',edit_prospect_email.value);
                     fd2.append('n_edit_pickup_address',edit_drop_address.value);
                     fd2.append('n_edit_drop_address',edit_drop_address.value);
                     fd2.append('n_edit_vehicle_number',edit_vehicle_number.value);
                     fd2.append('n_edit_vehicle_type',edit_vehicle_type.value);
                     fd2.append('n_edit_vehicle_model',edit_vehicle_model.value);
                     fd2.append('n_edit_driver_name',edit_driver_name.value);
                     fd2.append('n_edit_driver_phone',edit_driver_phone.value);
                     fd2.append('n_edit_driver_idendity',edit_driver_idendity.value);
                     fd2.append('n_edit_fare',edit_fare.value);
                     fd2.append('n_edit_advance_fare',edit_advance_fare.value);
                     fd2.append('n_edit_pending_fare',edit_pending_fare.value);
                     fd2.append('n_edit_final_fare_payment',edit_final_fare_payment.value);
                     fd2.append('n_edit_fare_status',edit_fare_status.value);
                     fd2.append('n_edit_booking_status',edit_booking_status.value);
                     fd2.append('n_trip_status',edit_trip_status.value);
                     
                     let xhr2=new XMLHttpRequest();
                     xhr2.open('POST','edit_taxibooking_data',true);
                     xhr2.setRequestHeader('X-CSRF-TOKEN',token_editTaxiBookingForm);
                     xhr2.send(fd2);
                     xhr2.onload=function(){
                          var responseTaxiBookingEdit=JSON.parse(xhr2.responseText)
                          var flag_edit=responseTaxiBookingEdit.flag_edit;
                          res1.innerHTML=flag_edit;            
                     }

                }
                document.getElementById("editTaxiBookingForm").addEventListener('submit',submit_edit_taxi_booking_data);

                
                

                

                

                
                



                
                
           }

     });
}
//Delete Module
var getId1=document.getElementsByClassName("getid1");
var j;
for(j=0;j<getId1.length;j++){
      getId1[j].addEventListener('click',function(){
           var delid=this.getAttribute('name');
           var fd3=new FormData();
           fd3.append('n_delid',delid);

           let xhr3=new XMLHttpRequest();
           xhr3.open('POST','set_taxibooking_delete_data',true);
           xhr3.setRequestHeader('X-CSRF-TOKEN',token_taxibooking);
           xhr3.send(fd3);
           xhr3.onload=function(){
                var responseTaxiBookingDelete=JSON.parse(xhr3.responseText);
                var flag_delete=responseTaxiBookingDelete.flag;
                if(flag_delete=='0'){
                     return false;
                }
                var del_id=responseTaxiBookingDelete.id;
                var name=responseTaxiBookingDelete.prospect_name;

                var delete_taxibooking_form=document.getElementById("delete_taxibooking_form");
                var hideDeleteTaxiBookingForm=document.getElementById("hideDeleteTaxiBookingForm");
                var deleteTaxiBookingForm=document.getElementById("deleteTaxiBookingForm");
                var res2=document.getElementById("res2");
                var token_deleteTaxiBookingForm=document.getElementById("token_deleteTaxiBookingForm").value;
                var delete_id=document.getElementById("delete_id");            
                var del_message=document.getElementById("del_message");
                delete_taxibooking_form.style.display="block";
                //Hide Delete Form
                hideDeleteTaxiBookingForm.onclick=function(){
                     refreshPage();
                     delete_taxibooking_form.style.display="none";
                }
                delete_id.value=del_id;
                del_message.innerHTML="Do You Want To Delete This Taxi Booking Request By &nbsp;"+name+"?";
                //Submit Delete Form
                function delete_taxi_booking_form(e){
                     e.preventDefault();
                     var fd4=new FormData();
                     fd4.append('n_delete_id',delete_id.value);
                     let xhr4=new XMLHttpRequest();
                     xhr4.open('POST','delete_taxibooking_data',true);
                     xhr4.setRequestHeader('X-CSRF-TOKEN',token_deleteTaxiBookingForm);
                     xhr4.send(fd4);
                     xhr4.onload=function(){
                          var responseTaxiBookingDeleteDetails=JSON.parse(xhr4.responseText);
                          var flag_delete_details=responseTaxiBookingDeleteDetails.flag;
                          res2.innerHTML=flag_delete_details;
                     }
                }
                deleteTaxiBookingForm.addEventListener('submit',delete_taxi_booking_form);
                

                

           }
           
      });
}







