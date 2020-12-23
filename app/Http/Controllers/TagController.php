<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{
    public function create(){
        return view('tag');
    }

    public function store(Request $request){
        $this->validate($request,[
            'title'=>'required|string|max:15',
            'description'=>'required|string|max:250'
        ]);

        $store = new Tag();
        $store->title = $request->title;
        $store->description = $request->description;
        $store->save();
        return redirect()->route('tag-create');
    }
}