<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
  public function users()
  {
    return $this->belongsToMany(User::class,'user_interest');
  }

  public function files()
  {
    return $this->belongsToMany(File::class,'file_interest');
  }

}
