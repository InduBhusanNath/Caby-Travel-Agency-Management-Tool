var token_adminlogin_form=document.getElementById("token_adminlogin_form").value;
var res1=document.getElementById("res1");
var userName=document.getElementById("userName");
var password=document.getElementById("password");
var sw_pwd=document.getElementById("sw_pwd");

//Show Password
function show_hide_password(){
      if(password.type=="password"){
         password.type="text";
      }else{
         password.type="password";
      }
}
sw_pwd.onclick=show_hide_password;

//Submit Admin Login Form
function admin_login(e){
     e.preventDefault();
     if(userName.value.length==0){
          userName.style.border="1px solid red";
          return false;
     }
     if(password.value.length==0){
          password.style.border="1px solid red";
          return false;        
     }

     var fd1=new FormData();
     fd1.append('n_userName',userName.value);
     fd1.append('n_password',password.value);
     
     let xhr1=new XMLHttpRequest();
     xhr1.open('POST','admin_rights',true);
     xhr1.setRequestHeader('X-CSRF-TOKEN',token_adminlogin_form);
     xhr1.send(fd1);
     xhr1.onload=function(){
           var adminLoginMessage=JSON.parse(xhr1.response);
           var flag=adminLoginMessage.flag;
           if(flag=='0'){
                res1.innerHTML='Access Denied:Incorrect Username/Password,OR Non-Admin Status.....';
           }else if(flag=='>1'){
                res1.innerHTML='Access Denied:Duplicate User.....';
           }else if(flag=='1'){
                res1.innerHTML='Allowing Access.....';
                function redirect_dasboard(){
                    window.location.href='adminDashboard';
               }
               setTimeout(redirect_dasboard,1000);
           }
           
     }     
}
document.getElementById("adminlogin_form").addEventListener('submit',admin_login);
