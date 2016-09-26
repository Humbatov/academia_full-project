<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function index(){
      return view('pages.index');
    }
    public function home(){
      return view('pages.home');
    }
    public function login(){
      return view('pages.login');
    }
    public function signUp(){
      return view('pages.signUp');
    }

}
