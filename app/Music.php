<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
   public function artists()
    {
      return $this ->belongsToMany(Artist::class);
    }



}
