<!DOCTYPE html>
<html lang="en">
<html>
     <head>
         <title>Admin User Management.....</title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
         
         <link rel="stylesheet" href="{{URL::asset('../resources/css/app.css')}}"/>
         <link rel="stylesheet" href="{{URL::asset('../resources/css/font.css')}}"/>
         <link rel="stylesheet" href="{{URL::asset('../resources/css/form.css')}}"/>
         <link rel="stylesheet" href="{{URL::asset('../resources/fontawesome/css/all.min.css')}}"/>
         <link rel="stylesheet" href="{{URL::asset('../resources/bootstrap/css/bootstrap.min.css')}}"/>
         <script src="../resources/bootstrap/js/bootstrap.min.js"></script>
         

     </head>
     <body><div class="container-fuid">
        <!--Start-->
     
<div class="row">
     <div class="col-sm-4 padding10">
         <span><a href="adminDashboard" class="action font font22">&#129152;DashBoard</a></span>
     </div>
     <div class="col-sm-4 padding10"></div>
     <div class="col-sm-4 padding10">
         <section class="font font18">
             <i class="fa-solid fa-user"></i>
             <?php 
                 echo "<span id='adminShowProfile'>[ADMIN]&nbsp;".$adminuser=session('adminuser')."</span>";
             ?>
         
             <i class="fa-solid fa-right-from-bracket"></i>
             <a href='adminLogout' class="font font18">LogOut</a>
         </section>
     </div>
</div>
<div class="row">
     <div class="col-sm-4 padding10">
         <button id="showUserForm" class="button">&#10133;Users</button>
     </div>
     <div class="col-sm-4 padding10">
         <h2>ADMIN USER MANAGEMENT</h2>
     </div>
     <div class="col-sm-4 padding10"></div>

</div>
<div class="row">
    <div class="col-sm-12 padding10">
         <form>
            <input type="hidden" id="token_user" value="<?php echo csrf_token(); ?> "/>
         </form>
         <table class="table table-borderless" font font18">
             <thead>
                 <tr>
                     <th scope="col"  class="text-center">DATE</th>
                     <th scope="col"  class="text-center">NAME</th>
                     <th scope="col"  class="text-center">USERNAME</th>
                     <th scope="col"  class="text-center">PHONE</th>
                     <th scope="col"  class="text-center">PASSWORD</th>
                     <th scope="col"  class="text-center">DESIGNATION</th>
                     <th scope="col"  class="text-center">ADDRESS</th>
                     <th scope="col"  class="text-center">ADMIN STATUS</th>
                     <th scope="col"  class="text-center">PRIVILEDGES</th>
                     <th scope="col"  class="text-center">UPDATE</th>
                     <th scope="col"  class="text-center">DELETE</th>
                 </tr>

             </thead>
             <tbody>
                 <?php
                 foreach($users as $row){
                         $getid=$row->id;
                     echo "<tr>
                         <td class='text-center'>$row->entry_date</td>
                         <td class='text-center'>$row->name</td>
                         <td class='text-center'>$row->username</td>
                         <td class='text-center'>$row->phone</td>
                         <td class='text-center'>$row->password</td>
                         <td class='text-center'>$row->designation</td>
                         <td class='text-center'>$row->address</td>
                         <td class='text-center'>$row->admin_status</td>
                         <td class='text-center'><a href='javascript:void(0);' class='getid text-success text-decoration-none' name=$getid>&#10012;</a></td>
                         <td class='text-center'><a href='javascript:void(0);' class='getid1 text-success text-decoration-none' name=$getid>&#128393;</a></td>
                         <td class='text-center'><a href='javascript:void(0);' class='getid2 text-success text-decoration-none' name=$getid>&#10060;</a></td>
                         
                     </tr>";
                 }
                 ?>
                 
                 
             </tbody>


         </table>
         {{$users->links()}}
    </div>
</div>
<!--User Form-->
<div id="user_form" class="popup">
     <section>
         <button id="hideUserForm" class="hide_btn">&#10060;</button>
         <h3>Add Users</h3>
         <p><span id="res1" class="res"></span></p>
         <form id="userForm">
             <input type="hidden" id="token" value="<?php echo csrf_token();?>">
             <input type="hidden" id="entry_date" name="n_entry_date" value="<?php echo date('Y-m-d');?>">
             <div class="form-group">
                 <label for="name">Name</label>
                 <input type="text" class="form-control" id="name" name="n_name"/>       
             </div>
             <div class="form-group">
                 <label for="username">EMail</label>
                 <input type="email" class="form-control" id="username" name="n_username"/>       
             </div>
             <div class="form-group">
                 <label for="phone">Phone</label>
                 <input type="text" class="form-control" id="phone" name="n_phone"/>       
             </div>
             <div class="form-group">
                 <label for="password">Password</label>
                 <input type="password" class="form-control" id="password" name="n_password"/>       
             </div>
             <div class="form-group">
                 <input type="checkbox" id="sw_pwd"/>
                 <label for="sw_pwd">Show Password</label> 
             </div>
             <div class="form-group">
                 <label for="admin_status">Admin Status</label>
                 <input type="text" class="form-control" id="admin_status" name="n_admin_status" value="Non-Admin" readonly/>       
             </div>
             <div class="form-group">
                 <label for="designation">Designation</label>
                 <input type="text" class="form-control" id="designation" name="n_designation"/>       
             </div>
             <div class="form-group">
                 <label for="address">Address</label>
                 <textarea  class="form-control" id="address" name="n_address"></textarea>
             </div>
             <div class="form-group">
                 <button type="submit" class="submit">ADD USER</button>
             </div>
         </form>
     </section>
</div>
<!--Priviledge Form-->
<div id="priviledge_form" class="popup">
     <section>
         <button id="hidePriviledgeForm" class="hide_btn">&#10060;</button>
         <h3>Assign User Priviledges</h3>
         <p><span id="res2" class="res"></span></p>
         <form id="priviledgeForm">
             <input type="hidden" id="token1" value="<?php echo csrf_token();?>">
             <input type="hidden" id="privid" name="n_prvid">
             <div class="form-group">
                 <input type="text" id="un" readonly>
             </div>

             <select class="form-select" id="user_priviledge" name="n_user_priviledge">
                 <option value="Non-Admin">Non-Admin</option>
                 <option value="Admin">Admin</option>
             </select>
             <div class="form-group">
                 <button type="submit" class="submit">CHANGE ADMIN STATUS</button>
             </div>

         </form>

     </section>

</div>
<!--User Edit Form-->
<div id="edit_form" class="popup">
     <section>
         <button id="hideEditForm" class="hide_btn">&#10060;</button>
         <h3>Edit Users</h3>
         <p><span id="res3" class="res"></span></p>
         <form id="edit_userForm">
             <input type="hidden" id="token2" value="<?php echo csrf_token();?>">
             <input type="hidden" id="edit_id" name="n_edit_id">
             
             <div class="form-group">
                 <label for="edit_name">Name</label>
                 <input type="text" class="form-control" id="edit_name" name="edit_n_name"/>       
             </div>
             <div class="form-group">
                 <label for="edit_username">EMail</label>
                 <input type="email" class="form-control" id="edit_username" name="edit_n_username"/>       
             </div>
             <div class="form-group">
                 <label for="edit_phone">Phone</label>
                 <input type="text" class="form-control" id="edit_phone" name="edit_n_phone"/>       
             </div>
                          
             <div class="form-group">
                 <label for="designation">Designation</label>
                 <input type="text" class="form-control" id="edit_designation" name="edit_n_designation"/>       
             </div>
             <div class="form-group">
                 <label for="edit_address">Address</label>
                 <textarea  class="form-control" id="edit_address" name="edit_n_address"></textarea>
             </div>
             <div class="form-group">
                 <button type="submit" class="submit">EDIT USER DETAILS</button>
             </div>
         </form>

     </section>
</div>
<!--User Delete Form-->
<div id="delete_form" class="popup">
     <section>
         <button id="hideDeleteForm" class="hide_btn">&#10060;</button>
         <h3>Delete Users</h3>
         <p><span id="res4" class="res"></span></p>
         <form id="delete_userForm">
             <input type="hidden" id="token3" value="<?php echo csrf_token();?>">
             <div class="form-group">
                 <input type="text" class="form-control" id="delete_username" name="delete_n_username"/>       
             </div>
             <div class="form-group">
                 <button type="submit" class="submit">DELETE USER DETAILS</button>
             </div>
         </form>

     </section>
</div>
     



     
     <!--End-->
     </div></body>
     <!--JavaScript Files-->
     <script src="../resources/js/users.js"></script>
        
     </html>