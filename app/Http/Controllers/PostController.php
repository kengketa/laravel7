<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('posts.index')->with('posts',$posts);
    }
    public function create(){
        return view('posts.create');
    }
    public function store(Request $request){
        //dd($request->all());
        Post::create([
            'topic' =>  $request['topic'],
            'description'=>$request['description']
        ]);
        return redirect()->back()->with('success','added');
    }
    public function edit($id){
        //d($id);
        $post = Post::find($id);
        return view('posts.edit')->with('post',$post);
    }



}
