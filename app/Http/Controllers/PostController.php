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



}
