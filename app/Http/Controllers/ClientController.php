<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;


class ClientController extends Controller
{
    //
    public function addUser(){
    	return view('login');
    }
    public function createUser(Request $request){
    	$post = new Client();
    	$post->username = $request->username;
    	$post->email = $request->email;
    	$post->password = $request->password;
    	$post->repeat_password = $request->repeat_password;
    	$post->save();
    	return back();//->with('post_added','success');
    }
}
