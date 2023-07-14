var token_user=document.getElementById("token_user").value;
var res1=document.getElementById("res1");
var res2=document.getElementById("res2");
var res3=document.getElementById("res3");
var res4=document.getElementById("res4");

var showUserForm=document.getElementById("showUserForm");
var hideUserForm=document.getElementById("hideUserForm");
var user_form=document.getElementById("user_form");
var password=document.getElementById("password");
var sw_pwd=document.getElementById("sw_pwd");


//Refresh Page
function refreshPage(){
     document.location.reload(true);
}
//Display User Form
function show_userForm(){
     user_form.style.display="block";    
}
//Hide User Form

function hide_userForm(){
     refreshPage()
     user_form.style.display="none";
}

showUserForm.onclick=show_userForm;
hideUserForm.onclick=hide_userForm;

//Show Password
function show_hide_password(){
    if(password.type=="password"){
        password.type="text";
    }else{
        password.type="password";
    }
}
sw_pwd.onclick=show_hide_password;

//User Form Submit Function
function insert_user(e){
     e.preventDefault();
     var token=document.getElementById("token").value;
     var entry_date=document.getElementById("entry_date");
     var name=document.getElementById("name");
     var username=document.getElementById("username");
     var phone=document.getElementById("phone");
     var password=document.getElementById("password");
     var admin_status=document.getElementById("admin_status");
     var designation=document.getElementById("designation");
     var address=document.getElementById("address");

     if(name.value.length==0){
         name.style.border="1px solid red";
         return false;        
     }
     if(username.value.length==0){
         username.style.border="1px solid red";
         return false;        
     }
     if(phone.value.length==0){
         phone.style.border="1px solid red";
         return false;        
    }
     
     var fd1=new FormData();
     fd1.append('n_entry_date',entry_date.value);
     fd1.append('n_name',name.value);
     fd1.append('n_username',username.value);
     fd1.append('n_phone',phone.value);
     fd1.append('n_password',password.value);
     fd1.append('n_admin_status',admin_status.value);
     fd1.append('n_designation',designation.value);
     fd1.append('n_address',address.value);

     let xhr1=new XMLHttpRequest();
     xhr1.open('POST','insert_userData',true);
     xhr1.setRequestHeader('X-CSRF-TOKEN',token);
     xhr1.send(fd1);
     xhr1.onload=function(){
         var responseData=JSON.parse(xhr1.response);
         var flag=responseData.flag;
         res.innerHTML=flag;
     }
     document.getElementById("userForm").reset();

     
}
document.getElementById("userForm").addEventListener("submit",insert_user);

//Priviledge
var getId=document.getElementsByClassName("getid");
var priviledge_form=document.getElementById("priviledge_form");
var hidePriviledgeForm=document.getElementById("hidePriviledgeForm");
var i;
//Hide Priviledge Form
function hide_PriviledgeForm(){
     refreshPage();
     priviledge_form.style.display="none";
}
//Submit Priviledge Form



for(i=0;i<getId.length;i++){
    getId[i].addEventListener('click',function(){
          var pid=this.getAttribute('name');

          var token=document.getElementById("token").value;
          
          priviledge_form.style.display="block";
          hidePriviledgeForm.onclick=hide_PriviledgeForm;

          var fd2=new FormData();
          fd2.append('n_pid1',pid);

          let xhr2=new XMLHttpRequest();
          xhr2.open('POST','send_pid',true);
          xhr2.setRequestHeader('X-CSRF-TOKEN',token);
          xhr2.send(fd2);
          xhr2.onload=function(){
              var un=document.getElementById("un");
              var privid=document.getElementById("privid");
              var user_priviledge=document.getElementById("user_priviledge");
              var token1=document.getElementById("token1").value;                           
              var returnData=JSON.parse(xhr2.response);
              var unm=returnData.usrname;               
              var prvid=returnData.id;
              var status=returnData.status; 
              un.value=unm;             
              privid.value=prvid;
              user_priviledge.value=status;
              
              function setUserPriviledge(e){
                     e.preventDefault();
                     var fd3=new FormData();
                     fd3.append('n_prvid',privid.value);
                     fd3.append('n_user_priviledge',user_priviledge.value);
                     let xhr3=new XMLHttpRequest();
                     xhr3.open('POST','set_user_priviledge',true);
                     xhr3.setRequestHeader('X-CSRF-TOKEN',token1);
                     xhr3.send(fd3);
                     xhr3.onload=function(){
                         var roleData=JSON.parse(xhr3.response);
                         var flag=roleData.flag;
                         res2.innerHTML=flag;
                     }
                     

              }
              //Submit User Priviledge Form
              document.getElementById("priviledgeForm").addEventListener("submit",setUserPriviledge);
              document.getElementById("priviledgeForm").reset();     
                    
                                   
         }       
                    
    });
}







//Edit
var getId1=document.getElementsByClassName("getid1");
var j;
for(j=0;j<getId1.length;j++){
     getId1[j].addEventListener('click',function(){
         var eid=this.getAttribute('name');
         //Send id to Get Field Values
         
         
         var edit_form=document.getElementById("edit_form");
         var hideEditForm=document.getElementById("hideEditForm");
         var res3=document.getElementById("res3");
         var token2=document.getElementById("token2").value;
         var edit_id=document.getElementById("edit_id");
         var edit_name=document.getElementById("edit_name");
         var edit_username=document.getElementById("edit_username");
         var edit_phone=document.getElementById("edit_phone");
         var edit_designation=document.getElementById("edit_designation");
         var edit_address=document.getElementById("edit_address");
         //Show Edit Form 
         function show_EditForm(){
             edit_form.style.display="block";
         }
         show_EditForm();
         //Hide Edit Form
         function hide_EditForm(){
             edit_form.style.display="none";
             refreshPage();
         }
         hideEditForm.onclick=hide_EditForm;       

         var fd4=new FormData();
         fd4.append('n_eid',eid);
         let xhr4=new XMLHttpRequest();
         xhr4.open('POST','send_eid',true);
         xhr4.setRequestHeader('X-CSRF-TOKEN',token2);
         xhr4.send(fd4);
         xhr4.onload=function(){
              var detailsData=JSON.parse(xhr4.response);
              var id=detailsData.id;
              var name=detailsData.name;
              var username=detailsData.username;
              var phone=detailsData.phone;
              var designation=detailsData.designation;
              var address=detailsData.address;

              edit_id.value=id;
              edit_name.value=name;
              edit_username.value=username;
              edit_phone.value=phone;
              edit_designation.value=designation;
              edit_address.value=address;

              //Submit Edit Form
              function edit_user(e){
                 e.preventDefault();
                 var fd5=new FormData();
                 fd5.append('n_edit_id',edit_id.value);
                 fd5.append('edit_n_name',edit_name.value);
                 fd5.append('edit_n_username',edit_username.value);
                 fd5.append('edit_n_phone',edit_phone.value);
                 fd5.append('edit_n_designation',edit_designation.value);
                 fd5.append('edit_n_address',edit_address.value);
                 

                 let xhr5=new XMLHttpRequest();
                 xhr5.open('POST','edit_user_details',true);
                 xhr5.setRequestHeader('X-CSRF-TOKEN',token2);
                 xhr5.send(fd5);
                 xhr5.onload=function(){
                      var updateData=JSON.parse(xhr5.response);
                      var updateMessage=updateData.flag;
                      res3.innerHTML=updateMessage;
                 }
              }              
              document.getElementById("edit_userForm").addEventListener('submit',edit_user);
              
             var res3a=document.getElementById('res3a');
             var token2a=document.getElementById('token2a').value;
             var editPassword_id=document.getElementById('editPassword_id');
             editPassword_id.value=id;
             var user_new_password=document.getElementById('user_new_password');

             
             document.getElementById('edit_userPassword').onsubmit=function(e){
                 e.preventDefault();
                 var fd5a=new FormData();
                 fd5a.append('n_editPassword_id',editPassword_id.value);
                 fd5a.append('n_user_new_password',user_new_password.value);
                 
                 const xhr5a=new XMLHttpRequest();
                 xhr5a.open('POST','change_password',true);
                 xhr5a.setRequestHeader('X-CSRF-TOKEN',token2a);
                 xhr5a.send(fd5a);
                 xhr5a.onload=function(){
                     var returnChgPwd=JSON.parse(xhr5a.response);
                     var flag=returnChgPwd.flag;
                     if(flag=='1'){
                         res3a.innerText="Password Changed Successfully.....";
                         user_new_password.value="";
                     }else if(flag=='0'){
                         res3a.innerText="Could Not Change Password, Try Again.....";
                     }
                 }
                 
                 
             }
             

         }
         
         

         



        

         


         
     });
}



//Delete
var delId=document.getElementsByClassName("getid2");
var k;

for(k=0;k<delId.length;k++){
     delId[k].addEventListener('click',function(){
         var did=this.getAttribute("name");
         var fd6=new FormData();
         fd6.append('n_did',did);
         
         let xhr6=new XMLHttpRequest();
         xhr6.open('POST','send_did',true);
         xhr6.setRequestHeader('X-CSRF-TOKEN',token_user);
         xhr6.send(fd6);
         xhr6.onload=function(){              
              var deleteData=JSON.parse(xhr6.response);
              var user_name=deleteData.flag;
              var delete_form=document.getElementById("delete_form");
              var hideDeleteForm=document.getElementById("hideDeleteForm");
              var token3=document.getElementById("token3").value;
              var delete_username=document.getElementById("delete_username");
              delete_username.value=user_name;
              delete_form.style.display="block";
              hideDeleteForm.onclick=function(){
                 delete_form.style.display="none";
                 refreshPage();
              }



              function delete_user(e){
                 e.preventDefault();
                 var fd7=new FormData();
                 fd7.append('delete_n_username',delete_username.value); 
                 let xhr7=new XMLHttpRequest();
                 xhr7.open('POST','delete_user',true);
                 xhr7.setRequestHeader('X-CSRF-TOKEN',token3);
                 xhr7.send(fd7);
                 xhr7.onload=function(){
                     var deleteResponse=JSON.parse(xhr7.response);
                     var deleteMessage=deleteResponse.flag;
                     res4.innerHTML=deleteMessage;
                 }                

              } 
              document.getElementById("delete_userForm").addEventListener('submit',delete_user);             
         }        
    });

}
    
            
        






