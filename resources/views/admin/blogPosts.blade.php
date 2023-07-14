<!DOCTYPE html>
<html lang="en">
<html>
     <head>
         <title>Aeiety Trips:Blogs|Cab Services|Guwahati.....</title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <meta name="description" content="Know Us"/>
         <link rel="stylesheet" href="{{URL::asset('../resources/css/app.css')}}"/>
         <link rel="stylesheet" href="{{URL::asset('../resources/css/font.css')}}"/>
         <link rel="stylesheet" href="{{URL::asset('../resources/css/form.css')}}"/>
         <link rel="stylesheet" href="{{URL::asset('../resources/fontawesome/css/all.min.css')}}"/>
         <link rel="stylesheet" href="{{URL::asset('../resources/bootstrap/css/bootstrap.min.css')}}"/>
         <script src="../resources/bootstrap/js/bootstrap.min.js"></script>
         <script src="{{URL::asset('../resources/ckeditor5/ckeditor.js')}}"></script>
         <script src="{{URL::asset('../resources/tinymce/js/tinymce/tinymce.min.js')}}"></script>
         
         
         

     </head>
     <body class="background-ghostwhite"><div class="container-fuid">
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
          <p>&nbsp;</p>
          <button id="showBlogPostForm" class="button">&#10133;Blog</button>
     </div>
     <div class="col-sm-4 padding10">
         <h3>BLOG POSTS</h3>
     </div>
     <div class="col-sm-4 padding10"></div>
</div>
<div class="row">
    <div class="col-sm-12">
         <form>
            <input type="hidden" id="token_blogPosts" value="<?php echo csrf_token(); ?> "/>
         </form>
         <table class="table table-borderless" font font18">
             <thead>
                 <tr>
                     <th scope="col"  class="text-center">DATE</th>
                     <th scope="col"  class="text-center">TITLE</th>
                     <th scope="col"  class="text-center">CATEGORY</th>
                     <th scope="col"  class="text-center">AUTHOR</th>
                     <th scope="col"  class="text-center">OTHERS</th>
                     <th scope="col"  class="text-center">IMAGE PATH</th>
                     <th scope="col"  class="text-center">BLOG BODY</th>
                     <th scope="col"  class="text-center">META TAG</th>
                     <th scope="col"  class="text-center">UPDATE</th>
                     <th scope="col"  class="text-center">DELETE</th>
                 </tr>

             </thead>
             <tbody>
                 @foreach($showBlogs as $row)
                 <tr>
                     <td>{{$row->entry_date}}</td>
                     <td>{{$row->title}}</td>
                     <td>{{$row->category}}</td>
                     <td>{{$row->title}}</td>
                     <td>{{$row->others}}</td>
                     <td>{{$row->image_path1}}</td>
                     <td>{{$row->blog_body}}</td>
                     <td>{{$row->blog_meta_tag}}</td>
                     <td ><a href='javascript:void(0);' class="getid text-decoration-none;" name="{{$row->id}}">&#128393;</a></td>
                     <td><a href='javascript:void(0);' class="getid1 text-decoration-none;" name="{{$row->id}}">&#10060;</a></td>
                 </tr>
                
                 @endforeach
                               
                 
                 
             </tbody>


         </table>
         {{$showBlogs->links()}}
         
    </div>
</div>
<!--User Form-->
<div id="blogPost_form" class="popup">
     <section>
         <button id="hideBlogPostForm" class="hide_btn">&#10060;</button>
         <h3>Add Blog</h3>
         <p><span id="res1" class="res"></span></p>
         <form id="blogPostForm" enctype="multipart/form-data">
             
             <input type="hidden" id="entry_date" name="n_entry_date" value="<?php echo date('Y-m-d');?>">
             <div class="form-group">
                 <label for="title">Title</label>
                 <input type="text" class="form-control" id="title" name="n_title"/>       
             </div>
             <div class="form-group">
                 <label for="category">Category</label>
                 <input type="text" class="form-control" id="category" name="n_category"/>       
             </div>
             <div class="form-group">
                 <label for="author">Author</label>
                 <input type="text" class="form-control" id="author" name="n_author"/>       
             </div>
             <div class="form-group">
                 <label for="others">Others</label>
                 <input type="text" class="form-control" id="others" name="n_others"/>       
             </div>
             
             <div class="form-group">
                 <label for="image1">Blog Image</label>
                 <input type="file" class="form-control" id="image1" name="n_image1"/>       
             </div>
             
             <div class="form-group">
                 <label for="blog_body">Blog Body</label>
                 <textarea  class="form-control" id="blog_body" name="n_blog_body"></textarea>
             </div>
             <div class="form-group">
                 <label for="blog_meta">Meta Description</label>
                 <textarea  class="form-control" id="blog_meta" name="n_blog_meta"></textarea>
             </div>
             <div class="form-group">
                 <button type="submit" class="submit">ADD BLOG</button>                 
             </div>
             <script>
                   ClassicEditor
                         .create( document.querySelector('#blog_body'))
                         .catch( error => {
                 console.error( error );
                     } );
             </script>

         </form>
         
     </section>
</div>
<!--Blog Form-->
<div id="blog_edit_form" class="popup">
     <section>
         <button id="hideBlogEditForm" class="hide_btn">&#10060;</button>
         <h3>Edit Blog Image</h3>
         <p><span id="res2" class="res"></span></p>
         <form id="image1EditForm" enctype="multipart/form-data">
             <input type="hidden" id="edit_image1_id" name="n_edit_image1_id"/>
             <input type="hidden" id="edit_image1_existing" name="n_edit_image1_existing"/>
             <div class="form-group">                 
                 <label for="edit_image1">Blog Image</label>
                 <input type="file" class="form-control" id="edit_image1" name="edit_n_image1"/>       
             </div>
             <div class="form-group">
                 <button type="submit" class="submit">EDIT BLOG IMAGE</button>                 
             </div>

         </form>
         <h3>Edit Blog Content</h3>
         <span id="res3" class="res"></span>
         <form id="blogEditForm">
             <input type="hidden" id="edit_blogid" name="n_edit_blogid"/>
             <div class="form-group">
                 <label for="edit_title">Title</label>
                 <input type="text" class="form-control" id="edit_title" name="n_edit_title"/>       
             </div>
             <div class="form-group">
                 <label for="edit_category">Category</label>
                 <input type="text" class="form-control" id="edit_category" name="n_edit_category"/>       
             </div>
             <div class="form-group">
                 <label for="edit_author">Author</label>
                 <input type="text" class="form-control" id="edit_author" name="n_edit_author"/>       
             </div>
             <div class="form-group">
                 <label for="edit_others">Others</label>
                 <input type="text" class="form-control" id="edit_others" name="n_edit_others"/>       
             </div>
             <div class="form-group">
                 <label for="edit_blog_body">Blog Body</label>
                 <textarea  class="form-control" id="edit_blog_body" name="n_edit_blog_body"></textarea>
             </div>
             <div class="form-group">
                 <label for="edit_blog_meta">Meta Description</label>
                 <textarea  class="form-control" id="edit_blog_meta" name="n_edit_blog_meta"></textarea>
             </div>
             <div class="form-group">
                 <button type="submit" class="submit">EDIT BLOG</button>                 
             </div>
             <script>                  
                 
      });
                 
                  
                   ClassicEditor
                         .create(document.querySelector('#edit_blog_body'))                            
                                                    
                         .catch(error => {
                                 console.error( error );
                            } );
                    
             </script>

         </form>

     </section>

</div>
<!--Blog Delete Form-->
<div id="blog_delete_form" class="popup">
     <section>
         <button id="hideBlogDeleteForm" class="hide_btn">&#10060;</button>
         <h3>Delete Blog</h3>
         <p><span id="res4" class="res"></span></p>
         <form id="blogDeleteForm">
             <input type="hidden" id="delBlogId" name="n_delBlogId">
             <span id="question" class="res"></span>
             <div class="form-group">
                 <button type="submit" class="submit">DELETE BLOG</button>                 
             </div>

         </form>

     </section>

</div>


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
     <script src="../resources/js/blogs.js"></script>
        
     </html>