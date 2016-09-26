<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SearchController extends Controller
{
  public function index(){
    return view('search.index');
  }
  public function searchDocument(){
    return view('search.searchDocuments');
  }
  public function searchPeople(){
    return view('search.searchPeople');
  }
}
