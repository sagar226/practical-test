<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    public function createComment(Request $request){
        $validator = Validator::make($request->all(),[
            'blog_id'=>'required|exists:blogs,id',
            'user_id'=>'required|exists:users,id',
            'comment' => 'required|string',
        ]);       

        if($validator->fails())  redirect('/');   

        Comment::create([
            'blog_id' => $request->blog_id,
            'user_id' => $request->user_id,
            'comment' => $request->comment
        ]);

        return redirect('blog/'.$request->blog_id);
    }
}
