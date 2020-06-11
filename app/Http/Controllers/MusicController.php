<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Music;

class MusicController extends Controller
{
  public function index()
  {
      return view('music',[
        'songs'=>Music::All()
      ]);
  }
}
