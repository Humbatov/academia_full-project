@extends('layout')

@section('navbar')
  @include('navbar')
@stop

@section('container')
  <!--Setmain start-->
  <section class="container setMain">
    <div class="row mainRow">
      <div class="col-md-offset-3 col-md-9 setImg">
        <div><img src="{{ url('img/1.png') }}"></div>
        <h4 class="myac">My Account</h4>
      </div>
      <div class="row orta">
        <div class="col-md-offset-3 col-md-2 setButton">
          <ul>
            <li>
              <a href="{{ url('settings') }}">
                <div>Account Settings</div>
              </a>
            </li>
            <li>
              <a href="{{ url('settings/account-removal') }}">
                <div>Account Removal</div>
              </a>
            </li>
          </ul>
        </div>

        <div class="col-sm-12 col-md-4">
          <div class="row">
            <form class="setInfo">
              <b>First Name</b>
              <br>
              <input type="text" name="name" class="setInp" placeholder="First Name">
              <br>
              <br>
              <b>Middle Initials</b>
              <br>
              <b><input type="text" name="name" class="setInp" placeholder="Middle Initials"><br><br>
        <b>Last name</b>
              <br>
              <input type="text" name="name" class="setInp" placeholder="Last name">
              <br>
              <br>
              <b>Email</b>
              <br>
              <input type="email" name="name" class="setInp" placeholder="Email">
              <br>
              <br>
              <b>Password</b>
              <br>
              <input type="password" name="password" placeholder="password" class="setInp">
              <br>
              <br>
              <button type="button" class="btn btn-success active saveSet">Save</button>

            </form>
            <hr>
            <div class="setChange">
              <h4>Change your Profile URL</h4>
              <h6>Profile URL</b></h6>
              <form>
                <input type="text" class="disInput" disabled="disabled" value="khazar.academia.edu/">
                <input type="text" class="pageNameInput" placeholder="Page Name">
                <br>
                <br>
                <button type="button" class="btn btn-success active saveSet">Save</button>
              </form>
              <hr>
              <h4>Change your Time Zone</h4>
              <h6>Time Zone</h6>
              <select class="setInp setSelect">
                <option value="">Africa/Abidjan</option>
                <option value="">Africa/Abidjan</option>
                <option value="">Africa/Abidjan</option>
                <option value="">Africa/Abidjan</option>
                <option value="">Africa/Abidjan</option>
                <option value="">Africa/Abidjan</option>
                <option value="">Africa/Abidjan</option>
                <option value="">Africa/Abidjan</option>
                <option value="">Africa/Abidjan</option>
                <option value="">Africa/Abidjan</option>
              </select>
              <br>
              <br>
              <button type="button" class="btn btn-success active saveSet">Save</button>
            </div>
          </div>
        </div>
        <div class="col-md-offset-3"></div>
      </div>
  </section>
  <!--Setmain end-->

@stop

@section('footer')
  @include('footer',['class'=>'bgColorGray'])
@stop
