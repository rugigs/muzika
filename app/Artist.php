<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
  public function songs()
  {
    return $this ->belongsToMany(Music::class);
  }

  public function follows()
  {
    return $this->belongsToMany(User::class);
  }
}
