<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artist;
use App\User;

class ArtistController extends Controller
{
    public function index()
    {
      return view('artists',[
        'artists'=> Artist::All()
      ]);
    }

    public function store($id)
    {
      $artist = Artist::find($id);
      auth()->user()->follow($artist);

      return redirect('artists');
    }

    public function delete($id)
    {
      $artist = Artist::find($id);
      auth()->user()->unfollow($artist);

      return redirect('artists');
    }
}
