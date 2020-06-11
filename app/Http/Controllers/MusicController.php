<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Music;
use App\Post;

class MusicController extends Controller
{
  public function index()
  {
      return view('music',[
        'songs'=>Music::All()
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

  public function show($id)
  {
    $song = Music::find($id);

    return view('song',[
      'song'=>$song
    ]);
  }
}
