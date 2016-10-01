<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
  public function user(){
    return $this->belongsTo(User::class);
  }

  public function interests()
  {
    return $this->belongsToMany(Interest::class,'file_interest');
  }
}
