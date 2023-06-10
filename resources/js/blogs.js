//Universal
var token_blogPosts=document.getElementById("token_blogPosts").value;
function refreshPage(){
   location.reload(true);
}
function refreshPage(){
     window.location.reload(true);
}


var showBlogPostForm=document.getElementById("showBlogPostForm");
var blogPost_form=document.getElementById("blogPost_form");
var hideBlogPostForm=document.getElementById("hideBlogPostForm");
var res1=document.getElementById("res1");
var entry_date=document.getElementById("entry_date");
var title=document.getElementById("title");
var category=document.getElementById("category");
var author=document.getElementById("author");
var others=document.getElementById("others");
var blog_body=document.getElementById("blog_body");
var image1=document.getElementById("image1");



//Show Blog Post Form

showBlogPostForm.onclick=function(){
      setTimeout(function(){
        blogPost_form.style.display="block";
      },200);
}
//Hide Blog Post Form
hideBlogPostForm.onclick=function(){
     refreshPage();
     setTimeout(function(){
         
         blogPost_form.style.display="none";       
     },200);
}




//Submit Blog Post Form
function submit_blog_post_form(e){
     e.preventDefault();
     if(title.value.length==0){
          title.style.border='1px solid red';
          return false;
     }
     if(image1.value.length==0){
          image1.style.border="1px solid red";
          return false;
     }
     if(blog_body.value.length==0){
          res1.innerHTML="Blog Body Cannot Be Blank.....";
          return false;
     }
     var fd1=new FormData();
     fd1.append('n_entry_date',entry_date.value);
     fd1.append('n_title',title.value);
     fd1.append('n_category',category.value);
     fd1.append('n_author',author.value);
     fd1.append('n_others',others.value);
     fd1.append('n_image1',image1.files[0]);
     fd1.append('n_blog_body',blog_body.value);     

     let xhr1=new XMLHttpRequest();
     xhr1.open('POST','post_blog',true);
     xhr1.setRequestHeader('X-CSRF-TOKEN',token_blogPosts);
     xhr1.send(fd1);
     xhr1.onload=function(){ 
          
           var responseBlog=JSON.parse(xhr1.response);
           var flag_blog=responseBlog.flag_blog;
           if(flag_blog=='1'){
                res1.innerHTML="Blog Uploaded Successfully.....";
           }else if(flag_blog=='0'){
                res1.innerHTML="Could Not Upload Blog, Try Again.....";
           }
           
     }
     blogPostForm.reset();
     return false;
}
blogPostForm.addEventListener('submit',submit_blog_post_form);

//Edit
var getId=document.getElementsByClassName("getid")
var i;
for(i=0;i<getId.length;i++){
      function get_edit_id(){
           var eid=this.getAttribute("name");
           var fd2=new FormData();
           fd2.append('n_eid',eid);
           
           let xhr2=new XMLHttpRequest();
           xhr2.open('POST','set_blog_edit_data',true);
           xhr2.setRequestHeader('X-CSRF-TOKEN',token_blogPosts);
           xhr2.send(fd2);
           xhr2.onload=function(){
                var responseEditBlog=JSON.parse(xhr2.response);
                var blg_id=responseEditBlog.blg_id;
                var image_path1=responseEditBlog.image_path1;
                var title=responseEditBlog.title;
                var category=responseEditBlog.category;
                var author=responseEditBlog.author;
                var others=responseEditBlog.others;
                var blog_body=responseEditBlog.blog_body;
                



                var blog_edit_form=document.getElementById("blog_edit_form");
                var hideBlogEditForm=document.getElementById("hideBlogEditForm");
                var res2=document.getElementById("res2");
                var image1EditForm=document.getElementById("image1EditForm");
                var edit_image1_existing=document.getElementById("edit_image1_existing");
                var edit_image1_id=document.getElementById("edit_image1_id");
                var edit_image1=document.getElementById("edit_image1");
                var res3=document.getElementById("res3");
                var blogEditForm=document.getElementById("blogEditForm");
                var edit_blogid=document.getElementById("edit_blogid");
                var edit_title=document.getElementById("edit_title");
                var edit_category=document.getElementById("edit_category");
                var edit_author=document.getElementById("edit_author");
                var edit_others=document.getElementById("edit_others");
                var edit_blog_body=document.getElementById("edit_blog_body");
                
                
                //Set Field Values
                edit_image1_id.value=blg_id;
                edit_image1_existing.value=image_path1;
                edit_blogid.value=blg_id;
                edit_title.value=title;
                edit_category.value=category;
                edit_author.value=author;
                edit_others.value=others;
                edit_blog_body.textContent=blog_body;
                



                
                





                //Show Edit Form
                
                blog_edit_form.style.display="block";
                //Hide Edit Form

                function hide_blog_edit_form(){
                     refreshPage();
                     blog_edit_form.style.display="none";
                }
                hideBlogEditForm.onclick=hide_blog_edit_form;
                
                //Submit Image Edit Form
                function submit_image1_edit_form(e){
                     e.preventDefault();
                     if(edit_image1.files[0]==null){
                         edit_image1.style.border="1px solid red";
                         return false;
                    }
                     var fd3=new FormData();
                     fd3.append('n_edit_image1_id',edit_image1_id.value);
                     fd3.append('n_edit_image1_existing',edit_image1_existing.value);
                     fd3.append('edit_n_image1',edit_image1.files[0]);
                     
                     let xhr3=new XMLHttpRequest();
                     xhr3.open('POST','edit_image1',true);
                     xhr3.setRequestHeader('X-CSRF-TOKEN',token_blogPosts);
                     xhr3.send(fd3);
                     xhr3.onload=function(){
                          var responseImage1Edit=JSON.parse(xhr3.response);
                          var flag_image1edit=responseImage1Edit.flag_image1edit;
                          if(flag_image1edit=='1'){ 
                               res2.innerHTML="Image Updated Successfully.....";
                          }else if(flag_image1edit=='0'){
                              res2.innerHTML="Could Not Update Image, Try Again.....";
                          }
                     }                    

                }

                image1EditForm.addEventListener('submit',submit_image1_edit_form);
                //Submit Blog Edit Form
                //Submit Blog Edit Form
                function submit_blog_edit_form(e){
                    e.preventDefault();
                    var fd3=new FormData();
                    
                    fd3.append('n_edit_blogid',edit_blogid.value);
                    fd3.append('n_edit_title',edit_title.value);
                    fd3.append('n_edit_category',edit_category.value);
                    fd3.append('n_edit_author',edit_author.value);
                    fd3.append('n_edit_others',edit_others.value);
                    fd3.append('n_edit_blog_body',edit_blog_body.value);

                    let xhr3=new XMLHttpRequest();
                    xhr3.open('POST','edit_blog',true);
                    xhr3.setRequestHeader('X-CSRF-TOKEN',token_blogPosts);
                    xhr3.send(fd3);
                    xhr3.onload=function(){
                          var responseUpdateBlog=JSON.parse(xhr3.response);
                 
                          var flag_blog_edit=responseUpdateBlog.flag_blog_edit;
                          if(flag_blog_edit=='1'){
                               res3.textContent="Blog Updated Successfully.....";
                          }else if(flag_blog_edit=='0'){
                               res3.textContent="Could Not Update Blog,Try Again.....";
                          }                 
                     }
                    
               }
               blogEditForm.addEventListener('submit',submit_blog_edit_form);
                
                
                
           }          
      }
      getId[i].addEventListener('click',get_edit_id);
}
//Delete
var getId1=document.getElementsByClassName("getid1");
var j;
for(j=0;j<getId1.length;j++){
      getId1[j].addEventListener('click',function(){
           var delid=this.getAttribute("name");
           
           var fd4=new FormData();
           fd4.append('n_delid',delid);

           let xhr4=new XMLHttpRequest();
           xhr4.open('POST','set_blog_delete_data',true);
           xhr4.setRequestHeader('X-CSRF-TOKEN',token_blogPosts);
           xhr4.send(fd4);
           xhr4.onload=function(){
                var responseBlogDel=JSON.parse(xhr4.response);
                var flag_blog_del=responseBlogDel.flag_blog_del;
                var id_blog=responseBlogDel.id_blog;
                var title=responseBlogDel.title;

                
                var blog_delete_form=document.getElementById("blog_delete_form");
                var hideBlogDeleteForm=document.getElementById("hideBlogDeleteForm");
                var res4=document.getElementById("res4");
                var blogDeleteForm=document.getElementById("blogDeleteForm");
                var delBlogId=document.getElementById("delBlogId");
                             
                var question=document.getElementById("question");
                blog_delete_form.style.display="block";
                hideBlogDeleteForm.onclick=function(){
                     setTimeout(function(){
                          refreshPage();
                          blog_delete_form.style.display="none";
                     },500);                     
                }
                if(flag_blog_del=='1'){
                    delBlogId.value=id_blog;
                    question.innerHTML="Do You Want To Delete The Blog Titled: &nbsp;"+title+"?";
               }else if(flag_blog_del=='0'){
                    res4.innerHTML="Something Went Wrong, Try Again.....";
               }
                //Submit Blog Delete Form
                function submit_blog_delete_form(e){
                     e.preventDefault();
                     var fd5=new FormData();
                     fd5.append('n_delBlogId',delBlogId.value);
                     let xhr5=new XMLHttpRequest();
                     xhr5.open('POST','delete_blog',true);
                     xhr5.setRequestHeader('X-CSRF-TOKEN',token_blogPosts);
                     xhr5.send(fd5);
                     xhr5.onload=function(){
                          var responseDelBlg=JSON.parse(xhr5.response);
                          var flag_delblg=responseDelBlg.flag_delblg;
                          if(flag_delblg=='1'){
                              res4.textContent="Blog Successfully Deleted.....";
                          }else{
                               res4.textContent="Could Not Delete Blog,Try Again.....";
                          }
                     }

                    
                     

                }
                blogDeleteForm.addEventListener('submit',submit_blog_delete_form);



                


           }

           

     });
}
