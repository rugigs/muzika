<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Music;
use App\Post;
use App\User;

class PostController extends Controller
{

    public function index()
    {
      $posts = User::find(auth()->id())->posts;

      return view('posts',[
        'posts'=>$posts
      ]);
    }

    public function show($id){
      $post = Post::find($id);

      return view('update-post',[
        'post'=>$post
      ]);
    }

    public function update($id){

      $attributes = request()->validate([
        'body'=>'required'
      ]);

      Post::find($id)->update([
        'body'=>$attributes['body']
      ]);

      return redirect('posts');
    }

    public function delete($id){

      Post::find($id)->delete();

      return redirect('posts');

    }



}
