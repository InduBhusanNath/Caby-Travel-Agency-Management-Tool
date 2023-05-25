function refreshPage(){
     window.location.reload(true);
}
var token_contactusMessages=document.getElementById("token_contactusMessages").value;
var getId=document.getElementsByClassName("getid");
var i;
for(i=0;i<getId.length;i++){
     getId[i].addEventListener('click',function(event){ 
         var contactusid=event.target.name; 
         var fd1=new FormData();
         fd1.append('n_contactusid',contactusid);
         let xhr1=new XMLHttpRequest();
         xhr1.open('POST','user_delete_data',true);
         xhr1.setRequestHeader('X-CSRF-TOKEN',token_contactusMessages);
         xhr1.send(fd1);
         xhr1.onload=function(){
             var del_details=JSON.parse(xhr1.response);

             var flag_id=del_details.id;
             var flag_name=del_details.name;
             
             var user_delete_form=document.getElementById("user_delete_form");
             var deleteUserDeleteForm=document.getElementById("deleteUserDeleteForm");
             var hideUserDeleteForm=document.getElementById("hideUserDeleteForm");
             var res1=document.getElementById("res1");
             
             var token_deleteUserDeleteForm=document.getElementById("token_deleteUserDeleteForm").value;
             var del_id=document.getElementById("del_id");
             //Show User Message Form
             user_delete_form.style.display="block";
             //Hide User Message Form
             hideUserDeleteForm.onclick=function(){
                 user_delete_form.style.display="none";
                 refreshPage();
             }  
             del_id.value=flag_id;        
             

             delname.innerHTML="&nbsp; Do You Want to Delete this Message by &nbsp;"+flag_name+"?";
             //Submit User Message Delete Form
             function userMessage_delete(e){
                 e.preventDefault();
                 var fd2=new FormData();
                 fd2.append('n_delmessageId',del_id.value);
                 let xhr2=new XMLHttpRequest();
                 xhr2.open('POST','delete_contactus_message',true);
                 xhr2.setRequestHeader('X-CSRF-TOKEN',token_deleteUserDeleteForm);
                 xhr2.send(fd2);
                 xhr2.onload=function(){
                     var responseMessage=JSON.parse(xhr2.responseText);
                     var delete_status=responseMessage.del_status;
                     res1.innerHTML=delete_status;
                     
                 }         

             }
             deleteUserDeleteForm.addEventListener('submit',userMessage_delete);          

         }           
    });
}
