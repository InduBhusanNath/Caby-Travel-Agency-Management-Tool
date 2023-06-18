<!DOCTYPE html>
<html lang="en">
<html>
     <head>
          <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-00GJQDC7QF"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-00GJQDC7QF');
</script>
         <title>Guwahati Taxi Service|Best Cab Service in Guwahati</title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="icon" href="../public/images/icons/caricon.png" type="image/gif" sizes="16x16">
         <meta name="description" content="Contact for the best cab service in Guwahati, trusted Guwahati taxi service."/>
         <link rel="stylesheet" href="{{URL::asset('../resources/css/app.css')}}"/>
         <link rel="stylesheet" href="{{URL::asset('../resources/css/font.css')}}"/>
         <link rel="stylesheet" href="{{URL::asset('../resources/css/form.css')}}"/>
         <link rel="stylesheet" href="{{URL::asset('../resources/fontawesome/css/all.min.css')}}"/>
         <link rel="stylesheet" href="{{URL::asset('../resources/bootstrap/css/bootstrap.min.css')}}"/>
         <script src="../resources/bootstrap/js/bootstrap.min.js"></script>

     </head>
     <body class="background-azure"><div class="container-fuid">
<!--Start-->
     @include('partials.header')
<div class="row">
     <div class="col-sm-12">
           <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="home">Home</a></li>
                     <li class="breadcrumb-item"><a href="aboutus">About Us</a></li>
                     <li class="breadcrumb-item"><a href="services">Services</a></li>
                     <li class="breadcrumb-item"><a href="blogs">Blogs</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
           </nav>
           
     </div>
</div>
<!--Banner-->
<div class="row">
      <div class="col-sm-12 padding0">
      <img src="../public/images/banners/contactus.png" class="img-fluid w-100">
      </div>
</div>
<div class="row">
      <div class="col-sm-3"></div>
      <div class="col-sm-6">
           <p>&nbsp;</p>
           <h1>Get In Touch With Us</h1>
           
      </div>
      <div class="col-sm-3"></div>    
 
</div>
<div class="row">
      <div class="col-sm-1"></div>
      <div class="col-sm-10">
           <h3>
               Are you looking for a dependable taxi rental service provider to book a cab? Submit the form or connect with us through the contact details. We will be at your service quickly.
           </h3>
           
      </div>
      <div class="col-sm-1"></div>
</div>
<!--Contact Us Form-->
<div class="row">
      <div class="col-sm-1"></div>
      <div class="col-sm-4">
          <p>&nbsp;</p>
          <section class="padding10 background-powderblue" style="border-radius:12px 12px 12px 12px;">
                <h2>Send Us Your Message</h2>
                <p><span id="res" class="res"></span></p>
                <form id="contact_form">
                     <input type="hidden" id="token" value="<?php echo csrf_token();?>">
                     <input type="hidden" id="message_date" name="n_message_date" value="<?php echo date('Y-m-d');?>">
                     <div class="form-group">
                          <label for="prospectName">Name</label>
                          <input type="text" class="form-control" id="prospectName" name="n_prospectName"/>       
                     </div>
                     <div class="form-group">
                          <label for="prospectPhone">Phone</label>
                          <input type="text" class="form-control" id="prospectPhone" name="n_prospectPhone"/>
                     </div>
                     <div class="form-group">
                          <label for="prospectMessage">Message</label>
                          <textarea  class="form-control" id="prospectMessage" name="n_prospectMessage"></textarea>
                     </div>
                     <div class="form-group">
                          <button type="submit" class="submit">SEND MESSAGE</button>
                     </div>

                </form>     
          </section>  
          <p>&nbsp;</p>           
      </div>
      <div class="col-sm-5">
           <section class="padding15">
                <p>&nbsp;</p>
                
                <p>
                    <span class="font font22">
                          <i class="fa-solid fa-location-dot"></i>&nbsp;14A, Nirupama Enclave,                               
                    </span><br/>
                     <span class="font font22">
                          Chilarai Path, Beltola,
                     </span></br>
                     <span class="font font22">
                          Guwahati:781029
                     </span>
                </p>
                
                <p>
                     <span class="font font22">
                          <i class="fa-solid fa-phone"></i>&nbsp;9531393648
                     </span>
                
                </p>
                <p>
                     <span class="font font22">
                          <i class="fa-brands fa-whatsapp"></i></i>&nbsp;9531393648
                     </span>   
                
                </p>
                <p>
                     <span class="font font22">
                          <i class="fa-regular fa-envelope"></i>&nbsp;info.aeiety@gmail.com
                     </span> 
               </p> 
           </section>
      </div>
      <div class="col-sm-2">
          
      </div>
</div>
     

     @include('partials.footer')
     

<!--End-->
     </div>
<!--JavaScript Files--><script src="../resources/js/contactus.js"></script>

</body></html>












