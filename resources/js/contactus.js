var res=document.getElementById("res");
var token=document.getElementById("token").value;
var message_date=document.getElementById("message_date");
var prospectName=document.getElementById("prospectName");
var prospectPhone=document.getElementById("prospectPhone");
var prospectMessage=document.getElementById("prospectMessage");

//Submit Function
function contactusSubmit(e){
     e.preventDefault();
     if(prospectName.value.length==0){
         prospectName.style.border="1px solid red";
         return false;
     }
     if(prospectPhone.value.length==0){        
         prospectPhone.style.border="1px solid red";
         return false;
     }

     var fd1=new FormData();
     fd1.append('n_message_date',message_date.value);
     fd1.append('n_prospectName',prospectName.value);
     fd1.append('n_prospectPhone',prospectPhone.value);
     fd1.append('n_prospectMessage',prospectMessage.value);
     
     let xhr1=new XMLHttpRequest();
     xhr1.open('POST','insert_contactusData',true);
     xhr1.setRequestHeader('X-CSRF-TOKEN',token);
     xhr1.send(fd1);
     xhr1.onload=function(){
         var response=JSON.parse(xhr1.response);
         var flag=response.flag;
         if(flag=='1'){
             res.innerHTML="Message Submitted Successfully.....";
         }else if(flag=='0'){
             res.innerHTML="Failed To Submit Message.....";
         }
     }
     document.getElementById("contact_form").reset();




}
//Submit Form
document.getElementById("contact_form").addEventListener("submit",contactusSubmit);

