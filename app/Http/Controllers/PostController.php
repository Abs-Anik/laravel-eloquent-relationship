<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;

class PostController extends Controller
{
    public function store(Request $request){
        $this->validate($request,[
            'title' => 'required|string|max:20',
            'description' => 'required|string|max:250',
            'category' => 'required'
        ]);

        $store = new Post();

        $store->title = $request->title;
        $store->description = $request->description;
        $store->user_id = Auth::user()->id;
        $store->category_id = $request->category;

        $store->save();
        return redirect()->route('home');
    }
}