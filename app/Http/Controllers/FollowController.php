<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interest;
use App\User;
use App\User_interest;
use Auth;
use App\Http\Requests;

class FollowController extends Controller
{
    public function interest($id)
    {
      $interest = Interest::find($id);
      $user = Auth::user();
      $user_interest = new User_interest;

      $follow = User_interest::where('user_id', $user->id)->where('interest_id', $interest->id)->get();
        //  print_r($follow);
      //  return $user_interest;
      // $follow = User_interest::where('user_id', 1)->where('interest_id', 6)->get();
      if (!count($follow)) {
        $user_interest->user_id = $user->id;
        $user_interest->interest_id = $interest->id;
        $user_interest->save();
      }else{
        $follow[0]->delete();

      }

      return back();
    }
}
