<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Validator;
use App\User;
use App\Http\Requests;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
        'name' => 'required',
        'surname' => 'required',

        ]);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator->errors());
            // return $validator->errors();
        }else{
          $user = User::find($id);
          $user->name = $request->name;
          $user->surname = $request->surname;
          $user->type = $request->role;
          if ($request->blacklist == 'No') {
            $user->blacklist = 0;
          }else{
            $user->blacklist = 1;
          }
          $user->university = $request->university;
          $user->department = $request->department;
          $user->position = $request->position;
          $user->save();

          return Redirect::action('Admin\AdminController@userList');
        }





    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy(User $id)
     {
         $id->delete();
         return back();
     }
}
