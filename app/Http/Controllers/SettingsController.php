<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SettingsController extends Controller
{
    public function account()
    {
      return view('settings.accountSettings');
    }

    public function removal()
    {
      return view('settings.accountRemoval');
    }
}
