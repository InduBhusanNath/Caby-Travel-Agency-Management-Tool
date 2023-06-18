var prospect_request_form=document.getElementById("prospect_request_form");
var res=document.getElementById("res");

var oneway=document.getElementById("oneway");
var roundtrip=document.getElementById("roundtrip");
var pickupdate=document.getElementById("pickupdate");
var returndate=document.getElementById("returndate");
var pickuptime=document.getElementById("pickuptime");
var prospectName=document.getElementById("prospectName");
var prospectPhone=document.getElementById("prospectPhone");
var prospectEmail=document.getElementById("prospectEmail");
var prospectfrom=document.getElementById("prospectfrom");
var prospectto=document.getElementById("prospectto");
var token=document.getElementById("token").value;
var returnDate;


//Disabling Roundtrip Radio
oneway.onclick=function(){
       oneway.checked=true; 
       roundtrip.checked=false;
       returndate.disabled=true;
            
}
//Enabling Round Trip Radio
roundtrip.onclick=function(){
       oneway.checked=false;
       roundtrip.checked=true;
       returndate.disabled=false; 
}



//Enquiry Submit Function
function enquiryFormSubmit(e){
       e.preventDefault();
       var tripType;
       if(oneway.checked==true){
             tripType='One Way';             
             returnDate='NA';
             if(pickupdate.value.length==0){
                  pickupdate.style.border="1px solid red";
                  return false;
            }
       }else if(roundtrip.checked==true){
             tripType='Round Trip';
             if(returndate.value.length==0){
                   returndate.style.border="1px solid red";
                   return false;
             }
             returnDate=returndate.value;
       }
       if(prospectName.value.length==0){
             prospectName.style.border="1px solid red";
             return false;
       }
       if(prospectPhone.value.length==0){
             prospectPhone.style.border="1px solid red";
             return false;
       }
       if(prospectfrom.value.length==0){            
             prospectfrom.style.border="1px solid red";
             return false;
       }
       if(prospectto.value.length==0){            
             prospectto.style.border="1px solid red";
             return false;
       }

       

       var fd1=new FormData();
       fd1.append('n_trip',tripType);
       fd1.append('n_pickupdate',pickupdate.value);
       fd1.append('n_returndate',returnDate);
       fd1.append('n_pickuptime',pickuptime.value);
       fd1.append('n_prospectName',prospectName.value);
       fd1.append('n_prospectPhone',prospectPhone.value);
       fd1.append('n_prospectEmail',prospectEmail.value);
       fd1.append('n_prospectfrom',prospectfrom.value);
       fd1.append('n_prospectto',prospectto.value);
       fd1.append('token',token);
       


       let xhr1=new XMLHttpRequest();
       xhr1.open('POST','insert_enquiryData',true);
       xhr1.setRequestHeader('X-CSRF-TOKEN',token);
       xhr1.send(fd1);
       xhr1.onload=function(){
             var response=JSON.parse(xhr1.response);
             var flag=response.flag;
             
             if(flag=='1'){
                   res.innerHTML="Request Submitted Successfully, We Will Get In Touch With You Soon.....";
             }else if(flag=='0'){
                   res.innerHTML="Failed To Submit Request,Try Again";
             }
             prospect_request_form.reset();
             
       }



       


}


//Submit Enquiry-Form
prospect_request_form.addEventListener("submit",enquiryFormSubmit);

//FAQs
var collapsible=document.getElementsByClassName("collapsible");
var collapsible_content=document.getElementsByClassName("collapsible_content");
var c;
for(c=0;c<collapsible.length;c++){
       collapsible[c].addEventListener('click',function(){
             //this.classList.toggle('active');
             var collapsible_content=this.nextElementSibling;
             if(collapsible_content.style.display=='none'){
                   collapsible_content.style.display='block';
                   
             }else{
                   collapsible_content.style.display='none';
                   
             }
       });
}