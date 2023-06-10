<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class blogsController extends Controller
{
    //Show Blog Post Page
    public function blogPostPage(Request $request){
        $showBlogs=DB::table('table_blogs')->get();
        return view('/admin/blogPosts',['showBlogs'=>$showBlogs]);
    }
    //Insert Blogs
    public function insertBlog(Request $request){
         $image=$request->file('n_image1');
         $image_name=$image->getClientOriginalName();         
         $imageLocation='../public/images/blogs/'.$image_name;         
             if(file_exists($imageLocation)){
                 unlink($imageLocation);
                 $imagePath=$image->move('../public/images/blogs/',$image_name);
             }else{
                 $imagePath=$image->move('../public/images/blogs/',$image_name);
             }

                              
         
         $entry_date=$request->input('n_entry_date');
         $title=$request->input('n_title');
         $category=$request->input('n_category');
         $author=$request->input('n_author');
         $others=$request->input('n_others');
         
         $blog_body=$request->input('n_blog_body');
         
         $insertBlog=DB::table('table_blogs')->insert([
             'entry_date'=>$entry_date,
             'title'=>$title,
             'category'=>$category,
             'author'=>$author,
             'others'=>$others,
             'image_path1'=>$imagePath,
             'blog_body'=>$blog_body
         ]);

         if($insertBlog){
            return response()->json([
                 'flag_blog'=>'1'
            ]);
         }else{
            return response()->json([
                'flag_blog'=>'0'
           ]);

         }
          
    }
    //Set Edit Data
     public function setBlogEditData(Request $request){
         $eid=$request->input('n_eid');
         $getEditData=DB::table('table_blogs')->where('id','=',$eid)->get();
         foreach($getEditData as $row){
             $id=$row->id;
             $entry_date=$row->entry_date;
             $title=$row->title;
             $category=$row->category;
             $author=$row->author;
             $others=$row->others;
             
             $image_path1=$row->image_path1;
             $blog_body=$row->blog_body;
         }
         return response()->json([
             'blg_id'=>$eid,
             'image_path1'=>$image_path1,
             'entry_date'=>$entry_date,
             'title'=>$title,
             'category'=>$category,
             'author'=>$author,
             'others'=>$others,
             'blog_body'=>$blog_body

         ]);
     }
     //Edit Image1
     public function editImage1(Request $request){
         $edit_image1_id=$request->input('n_edit_image1_id');
         $edit_image1_existing=$request->input('n_edit_image1_existing');
         $edit_n_image1=$request->file('edit_n_image1');
         $edit_image1_name=$edit_n_image1->getClientOriginalName();

         
         if(file_exists($edit_image1_existing)){
             unlink($edit_image1_existing);
             $edit_n_image1Path=$edit_n_image1->move('../public/images/blogs/',$edit_image1_name);

         } else{
            $edit_n_image1Path=$edit_n_image1->move('../public/images/blogs/',$edit_image1_name);
         }
         $editImage1=DB::table('table_blogs')->where('id','=',$edit_image1_id)
         ->update([
                 'image_path1'=>$edit_n_image1Path
         ]);
         if($editImage1){
             return response()->json([
                 'flag_image1edit'=>'1'
             ]);                 
         }else{
            return response()->json([
                'flag_image1edit'=>'0'
            ]); 
         }
     }
     //Edit Blog
     public function editBlog(Request $request){
         $edit_blogid=$request->input('n_edit_blogid');
         $edit_title=$request->input('n_edit_title');
         $edit_category=$request->input('n_edit_category');
         $edit_author=$request->input('n_edit_author');
         $edit_others=$request->input('n_edit_others');
         $edit_blog_body=$request->input('n_edit_blog_body');
         
         $updateBlog=DB::table('table_blogs')->where('id','=',$edit_blogid)
         ->update([
             'title'=>$edit_title,
             'category'=>$edit_category,
             'author'=>$edit_author,
             'others'=>$edit_others,
             'blog_body'=>$edit_blog_body
         ]);
         if($updateBlog){
             return response()->json([
                 'flag_blog_edit'=>'1'
             ]);
         }else{
            return response()->json([
                 'flag_blog_edit'=>'0'
             ]);
         }
     }
     //Set Delete Data
     public function setBlogDeleteData(Request $request){
             $delid=$request->input('n_delid');
             $setBlog=DB::table('table_blogs')->where('id','=',$delid)->get();
             foreach($setBlog as $row){
                 $id_blog=$row->id;
                 $title=$row->title;
             }
             if($setBlog){
                 return response()->json([
                     'flag_blog_del'=>'1',
                     'id_blog'=>$id_blog,
                     'title'=>$title
                ]);
             } else{
                return response()->json([
                    'flag_blog_del'=>'0'
                ]);

             }            

     }
     //Delete Blog
     public function deleteBlog(Request $request){
             $delBlogId=$request->input('n_delBlogId');
             $delete_blog=DB::table('table_blogs')->where('id','=',$delBlogId)->delete();
             if($delete_blog){
                 return response()->json([
                    'flag_delblg'=>'1'
                ]);
             }else{
                return response()->json([
                    'flag_delblg'=>'0'
                ]);
             }
     }
}
