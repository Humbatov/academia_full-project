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
        return view('pages.home');
      }
    }
    public function home(){
      $users=User::all();
      return view('pages.home',compact('users'));
    }
    public function login(){
      return view('pages.login');
    }
    public function signUp(){
      return view('pages.signUp');
    }
    public function myprofile(){
      return view('pages.myprofile');
    }
    public function userprofile(){
      return view('pages.userprofile');
    }
    public function fileUpload(){
      return view('pages.fileUpload');
    }

}
