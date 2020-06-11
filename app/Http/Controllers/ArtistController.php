<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artist;

class ArtistController extends Controller
{
    public function index()
    {
      return view('artists',[
        'artists'=> Artist::All()
      ]);
    }
}
