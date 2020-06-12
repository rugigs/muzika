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
      if($post->user_id != auth()->user()->id){
        abort(404);
      }

      return view('update-post',[
        'post'=>$post
      ]);
    }

    public function update($id){

      $post = Post::find($id);
      if($post->user_id != auth()->user()->id){
        abort(404);
      }

      $attributes = request()->validate([
        'body'=>'required'
      ]);

      $post->update([
        'body'=>$attributes['body']
      ]);

      return redirect('posts');
    }

    public function delete($id){

      $post = Post::find($id);
      if($post->user_id != auth()->user()->id){
        abort(404);
      }

      $post->delete();

      return redirect('posts');

    }



}
