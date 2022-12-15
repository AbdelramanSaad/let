<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;   
use App\Models\Video; 

class FrontController extends Controller
{


     public function index()
     {
          $blog=Blog::get();
          $videos=Video::get();
          
          return view('welcome',compact('blog'));

     }

     public function Blog()
     {
          $blogs=Blog::get();
          $videos=Video::get();
          return view('Front.blog.blog',compact('blogs','videos'));
     }

     public function show_blog($id)
     {
         $blog=Blog::find($id);
         return view('Front.blog.blog-single',compact('blog'));
     }
// // --------------------------------- VIDEOS------------------------------
//      public function Video()
//      {
//           $blogs=Video::get();
          
//           return view('Front.blog.blog',compact('Video'));
//      }

//      public function show_Video($id)
//      {
//          $blog=Blog::find($id);
//          return view('Front.blog.blog-single',compact('blog'));
//      }

// ---------------------------------  endVIDEOS------------------------------

}