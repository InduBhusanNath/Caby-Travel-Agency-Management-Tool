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
var content_space=document.getElementById("content_space");
var dashboardAdmin=document.getElementById("dashboardAdmin");
var adm_db=document.getElementById("adm_db");
var requests_db=document.getElementById("requests_db");

function loadPage(url){                   
           content_space.innerHTML=url;    
}


//Default Page
window.addEventListener('load',function(){
     dashboardAdmin.innerHTML="<object data='adminDashboardPage'></object>"; 
});












