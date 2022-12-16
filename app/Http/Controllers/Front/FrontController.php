<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;   
use App\Models\Video; 
use App\Models\Team; 
use TBETool\GenerateVideoScreenshots;


class FrontController extends Controller
{


     public function index()
     {
          $blog=Blog::get();
          $teams=Team::get();
          
          return view('welcome',compact('blog','teams'));

     }

     public function Blog()
     {
          $blogs=Blog::paginate(2);     
          $videos=Video::get();
          return view('Front.blog.blog',compact('blogs','videos'));
     }

     public function show_blog($id)
     {
         $blog=Blog::find($id);
         return view('Front.blog.blog-single',compact('blog'));
     }
// // --------------------------------- VIDEOS------------------------------
     public function team()
     {
          $teams=Team::get();
          
          return view('Front.Team.Teams',compact('teams'));
     }

     public function team_show($id)
     {
         $team=Team::find($id);
         return view('Front.Team.team_single',compact('team'));
     }

// ---------------------------------  endVIDEOS------------------------------

}