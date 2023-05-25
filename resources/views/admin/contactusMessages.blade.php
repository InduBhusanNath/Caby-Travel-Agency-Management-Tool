<!DOCTYPE html>
<html lang="en">
<html>
     <head>
         <title>Contact Us.....</title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <meta name="description" content="Know Us"/>
         <link rel="stylesheet" href="{{URL::asset('../resources/css/app.css')}}"/>
         <link rel="stylesheet" href="{{URL::asset('../resources/css/font.css')}}"/>
         <link rel="stylesheet" href="{{URL::asset('../resources/css/form.css')}}"/>
         <link rel="stylesheet" href="{{URL::asset('../resources/fontawesome/css/all.min.css')}}"/>
         <link rel="stylesheet" href="{{URL::asset('../resources/bootstrap/css/bootstrap.min.css')}}"/>
         <script src="../resources/bootstrap/js/bootstrap.min.js"></script>

     </head>
     <body><div class="container-fuid">
<div class="row">
     <div class="col-sm-2"></div>
     <div class="col-sm-8">
          <h2>Contact Us Messages</h2>
     </div>
     <div class="col-sm-2"></div>
</div>
<div class="row">
     <div class="col-sm-12">
         <table class="table">
             <thead>
                 <th scope="col">DATE</th>
                 <th scope="col">NAME</th>
                 <th scope="col">PHONE</th>
                 <th scope="col">MESSAGE</th>
                 <th scope="col">DELETE</th>
             </thead>
             <tbody> 
                     <form>
                        <input type="hidden" id="token_contactusMessages" value="<?php echo csrf_token();?>">
                     </form>
                 
                     @foreach($contactusmessages as $row)
                             
                         <tr>
                             <td>{{$row->message_date}}</td>
                             <td>{{$row->prospect_name}}</td>
                             <td>{{$row->prospect_phone}}</td>
                             <td>{{$row->prospect_message}}</td>
                             <td><a href="javascript:void(0);" class="getid text-decoration-none" name={{$row->id}}>&#10060;</a></td>
                             
                             
                             
                         </tr>
                       

                     
                     @endforeach             
                         
                     
             </tbody>

         </table>
         {{$contactusmessages->links()}}
     </div>
</div>
<!--Delete User Form-->
<div id="user_delete_form" class="popup">
     <section>
         <button id="hideUserDeleteForm" class="hide_btn">&#10060;</button>
         <h3>Delete User Message</h3>
         <span id="res1" class="res"></span>
         <form id="deleteUserDeleteForm">
            <input type="hidden" id="token_deleteUserDeleteForm" value="<?php echo csrf_token();?>">
            <span id="delname" class="font font18"></span>
             <div class="form-group">
                 <input type="text" id="del_id" class="form-control">
            </div>
            <div class="form-group">
                 <button type="submit" class="submit">DELETE CONTACT US MESSAGE</button>
             </div>

         </form>
     </section>
</div>

         
     
     </div><body>
        <!--JavaScript Files-->
         <script src="../resources/js/contactusmessages.js"></script> 

     </html>