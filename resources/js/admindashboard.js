var adminProfile=document.getElementById("adminProfile");
var hideButton=document.getElementById("hideButton");
var adminShowProfile=document.getElementById("adminShowProfile");

//Show Left Popup
function showLeftPopup(){
     adminProfile.style.display="none";
}
adminShowProfile.onmouseover=showLeftPopup;


//Hide Left Popup
function hideLeftPopup(){
    adminProfile.style.left="100%";
}
hideButton.onclick=hideLeftPopup;

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














