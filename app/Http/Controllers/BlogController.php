<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        
        $blogs=Blog::all();
        return view('bloglist',['data'=>$blogs]);
        
    }
    public function blogDetails($id){

        $blog=Blog::where('id',$id)->with('comments')->first();

        return view('blog',['data'=>$blog]);
    }
}
