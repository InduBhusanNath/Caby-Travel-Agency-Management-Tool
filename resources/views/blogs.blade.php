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
         <title>Cab Rental In Guwahati| One Of The Best Taxi Operators In Guwahati|AEIETYTRIPS</title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="icon" href="../public/images/icons/caricon.png" type="image/gif" sizes="16x16">
         <meta name="description" content="Experience the best cab rental in Guwahati. We are among the best taxi operators in Guwahati. And our services are distinguished by affordability and promptness."/>
         <link rel="stylesheet" href="{{URL::asset('../resources/css/app.css')}}"/>
         <link rel="stylesheet" href="{{URL::asset('../resources/css/font.css')}}"/>
         <link rel="stylesheet" href="{{URL::asset('../resources/css/form.css')}}"/>
         <link rel="stylesheet" href="{{URL::asset('../resources/fontawesome/css/all.min.css')}}"/>
         <link rel="stylesheet" href="{{URL::asset('../resources/bootstrap/css/bootstrap.min.css')}}"/>
         <script src="../resources/bootstrap/js/bootstrap.min.js"></script>

     </head>
     <body class="bg-light"><div class="container-fuid">
<!--Start-->
     @include('partials.header')
<div class="row">
      <div class="col-sm-3"></div> 
      <div class="col-sm-6">
          <p><h1>Blogs</h1></p>
      </div>
      <div class="col-sm-3"></div>
</div>
<div class="row">
      <div class="col-sm-2"></div> 
      <div class="col-sm-8">
           <span class="font font22">
               <p>A series of though provoking write-ups intended to allow you to experience our thought leadership. And you can access  enough resources to thoroughly research before finalizing your travel plan. </p>
           </span>
           <p>&nbsp;</p>
      </div>
      <div class="col-sm-2"></div>
</div>
<div class="row">
      
      <?php
          if(isset($_GET['page'])){
               $page_no=$_GET['page'];
          }else{
               $page_no='1';
          }
        $i=0;
         foreach($displayBlogs as $row){
           echo "<div class='col-sm-3 text-center'>
                     <div class='card w-100'>
                          <img src=$row->image_path1 style='height:10rem;' class='img-fluid card-img-top' alt='blog_image'/>                     
                          <div class='card-footer'>
                          <span class='card-text'><a class='font font18 action' href='blog_show/id/$row->id/page/blogs/page_no/$page_no'>$row->title&#129030;</a></span>
                          </div>
                     </div>               

           </div>";
           if($i==3){
               echo "<p>&nbsp;</p>";
                }
               $i=0;
         }
           
         ?>

      </div>
      
</div>
      
     

     @include('partials.footer')
<!--End-->
     </div></body></html>












