<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Music;
use App\Post;

class PostController extends Controller
{
    public function index($id)
    {
      $song = Music::find($id);

      return view('post',[
        'song'=>$song
      ]);
    }

    public function store()
    {


      $attributes = request()->validate([
        'body'=>'required',
        'id'=>'required'
      ]);


      Post::create([
        'user_id'=>auth()->id(),
        'music_id'=>$attributes['id'],
        'body'=>$attributes['body']
      ]);

      return redirect('home');

    }

}
