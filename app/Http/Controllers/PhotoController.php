<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;

class PhotoController extends Controller
{
    //
    public function create(){

        $photos = Photo::all();
        return view('download', compact('photos'));
    }
    public function store(Request $request){
        $size = $request->file('image')->getSize();
        $name = $request->file('image')->getClientOriginalName();

        $request->file('image')->storeAs('public/images/',$name);
        $photo = new Photo();
        $photo-> name = $name;
        $photo-> size = $size;
        $photo->save();
        return redirect()->back();
    }
}
