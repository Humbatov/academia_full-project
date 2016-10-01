<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class AdminController extends Controller
{
    public function index()
    {

      return view('admin.pages.index');
    }

    public function userList()
    {
      $users = User::all();
      return view('admin.pages.userList', compact('users'));
    }

    public function user(User $id)
    {
      $user =$id;
      return view('admin.pages.user', compact('user'));
    }

    public function files(User $id)
    {
        $files = $id->files()->get();
        return view('admin.pages.userFiles',compact('files'));
    }

    public function interests(User $id)
    {

    }



    // public function update(Request $request)
    // {
    //     $rules = array (
    //       'fname' => 'required|alpha',
    //       'lname' => 'required|alpha',
    //       'email' => 'required|email',
    //       'gender' => 'required',
    //       'country' => 'required|regex:/^[\pL\s\-]+$/u',
    //       'salary' => 'required|regex:/^\d*(\.\d{2})?$/'
    //     );
    //     $validator = Validator::make ( Input::all (), $rules );
    //     if ($validator->fails ())
    //     return Response::json ( array (
    //
    //         'errors' => $validator->getMessageBag ()->toArray ()
    //     ) );
    //     else {
    //
    //     $data = Data::find ( $request->id );
    //     $data->first_name = ($request->fname);
    //     $data->last_name = ($request->lname);
    //     $data->email = ($request->email);
    //     $data->gender = ($request->gender);
    //     $data->country = ($request->country);
    //     $data->salary = ($request->salary);
    //     $data->save ();
    //     return response ()->json ( $data );
    //     }
    // }
}
