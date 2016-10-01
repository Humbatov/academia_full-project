<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;

class PagesController extends Controller
{
    public function index(){
      if(Auth::guest()){
        return view('pages.index');
      } else {
        return view('pages.home', compact('user'));
      }
    }
    public function home(){

    }
    public function login(){
      return view('pages.login');
    }
    public function signUp(){
      return view('pages.signUp');
    }



}
