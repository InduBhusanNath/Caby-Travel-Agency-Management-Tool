function refreshPage(){
     window.location.reload();
}
var csrf_token=document.getElementById('csrf_token').value;
var adminProfile=document.getElementById("adminProfile");
var hideButton=document.getElementById("hideButton");
var adminShowProfile=document.getElementById("adminShowProfile");

//Show Left Popup
function showLeftPopup(){
     adminProfile.style.display="block";
}
adminShowProfile.onmouseover=showLeftPopup;


//Hide Left Popup
function hideLeftPopup(){
    adminProfile.style.left="100%";
    refreshPage();
}
hideButton.onclick=hideLeftPopup;
//Change Password
var change_admin_password_form=document.getElementById('change_admin_password_form');                
var res1=document.getElementById('res1');
var admin_id=document.getElementById('admin_id');
var admin_old_password=document.getElementById('admin_old_password');     
var admin_new_password=document.getElementById('admin_new_password');
change_admin_password_form.onsubmit=function(e){
     e.preventDefault();
     if(admin_old_password.value.length==0){
        res1.innerText="Type Your Old Password.....";
        return false;
    }
    if(admin_old_password.value.length!=0 && admin_new_password.value.length==0){
        res1.innerText="Type Your New Password.....";
        return false;
    }
     
     var fd1=new FormData;
     fd1.append('n_admin_id',admin_id.value);
     fd1.append('n_admin_old_password',admin_old_password.value);
     fd1.append('n_admin_new_password',admin_new_password.value);
     

     const xhr1=new XMLHttpRequest();
     xhr1.open('POST','change_admin_password',true);
     xhr1.setRequestHeader('X-CSRF-TOKEN',csrf_token);
     xhr1.send(fd1);
     xhr1.onload=function(){
             
         var responsePwd=JSON.parse(xhr1.responseText);
         var flag=responsePwd.flag;        
         
         if(flag=='1'){
            res1.innerText="Password Updated Successfully.....";
         }else if(flag=='0'){
            res1.innerText="Failed to Update Password,Try Again.....";
         }
        
     }
    
}


//Dasboard Operations

var adm_db=document.getElementById("adm_db");
var content_space=document.getElementById("content_space");
//Default Page
window.addEventListener('load',function(){
    let xhr_def=new XMLHttpRequest();     
     xhr_def.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200){
            content_space.innerHTML=xhr_def.response;
        }
     }
     xhr_def.open('GET','adminDashboardPage',true);
     xhr_def.send();
});



//Page Loader
function loadPage(url){
     let xhr=new XMLHttpRequest();
     
     xhr.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200){
            content_space.innerHTML=xhr.response;
        }
     }
     xhr.open('GET',url,true);
     xhr.send();
     
}

//Tasks Collapsible
var coll=document.getElementsByClassName("collapsible");
var active=document.getElementsByClassName("active");
var c;
for(c=0;c<coll.length;c++){
    coll[c].addEventListener('click',function(){
         
         var coll_content=this.nextElementSibling;
         if(coll_content.style.display==='none'){
             coll_content.style.display='block'; 
         }else{
             coll_content.style.display='none'; 
         }
         this.classList.toggle("active");

    });
}
















