<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\File;
use App\Interest;
use App\Http\Requests;

class SearchController extends Controller
{
  public function index(Request $request){
    $query = $request->input('search');
    $users = User::where('name', 'LIKE', '%' . $query . '%')->orWhere('surname', 'LIKE', '%' . $query . '%');
    $interests = Interest::where('name', 'LIKE', '%' . $query . '%');
    return view('search.index', compact('users','interests','query'));
  }

  public function searchDocument($id){
    $interest = Interest::find($id);
    return view('search.searchDocuments', compact('interest'));
  }

  public function searchPeople($id){
    $interest = Interest::find($id);
    return view('search.searchPeople', compact('interest'));
  }
}
