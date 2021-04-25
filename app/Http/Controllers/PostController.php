<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function addPost(){
    	return view('add-post');
    }
    public function createPost(Request $request){
    	$post = new Post();
    	$post->title = $request->title;
    	$post->body = $request->body;
    	$post->save();
    	return back();//->with('post_added','success');
    }
}
