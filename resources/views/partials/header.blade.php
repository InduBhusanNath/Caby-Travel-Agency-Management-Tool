<div class="row background-lightyellow padding10">
     <div class="col-sm-4">
          <img src="../public/images/logo/logo.png" class="img-responsive" alt="logo">
     </div>
     
      
      <div class="col-sm-1">
         <span  onclick="show_mobileMenu()"><i class="fa-sharp fa-solid fa-bars"></i></span>
         <span id="mob_menu" class="mobile_menu w-100 bg-info padding10">
             <button class="hide_btn" onclick="hide_mobile_menu()">&#10060;</button>
                 <table class="table w-100 text-center font font-18">
                     <tr><td>Home</td></tr>
                     <tr><td>About Us</td></tr>
                     <tr><td>Services</td></tr>
                     <tr><td>Blogs</td></tr>
                     <tr><td>Contact Us</td></tr>                    

                 </table>

         </span>
         <script>
             var mob_menu=document.getElementById("mob_menu");
             //Show Mobile Menu            
             function show_mobileMenu(){                 
                 mob_menu.style.display="block";
                }
            //Hide Mobile Menu

             function hide_mobile_menu(){
                mob_menu.style.display="none";
             }

         </script>
      </div>









      <div class="col-sm-5">
           <nav class="navbar navbar-expand-lg bg-transparent">
                <div class="container-fluid">
    
                     <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                          <div class="navbar-nav">
                               <a class="nav-link font font20 " href="home">Home</a>&nbsp;&nbsp;
                               <a class="nav-link font font20" href="aboutus">About Us</a>&nbsp;&nbsp;
                               <a class="nav-link font font20" href="services">Services</a>&nbsp;&nbsp;
                               <a class="nav-link font font20" href="blogs">Blogs</a>&nbsp;&nbsp;
                               <a class="nav-link font font20" href="contactus">Contact Us</a>
        
                          </div>
                     </div>
               </div>
           </nav>
      </div>

      <div class="col-sm-2">
         <span class="font font-14">Quick Contacts</span>
         <br/>
         <span class="font font-14"><i class="fa-solid fa-phone"></i>&nbsp;9395124889</span>
         <br/>
         <span class="font font-14"><i class="fa-brands fa-whatsapp"></i>&nbsp;9395124889</span>

         
      </div>

      
</div>
