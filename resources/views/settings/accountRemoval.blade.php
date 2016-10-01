@extends('layout')

@section('navbar')
  @include('navbar')
@stop

@section('container')
  <!--main start-->
  <section class="container main">
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
        <div class="col-md-4 removeForm">
          <form>
            <input class="form-control input-lg dis" type="text" disabled="disabled" value="Warning: Deleting your account cannot be undone.">
            <br>
            <br>
            <textarea rows="4" cols="56" placeholder="Let us know why you're deleting your account (optianal)"></textarea>
            <br>
            <br>
            <button type="button" class="btn btn-danger active delete">Delete My Account</button>
          </form>
        </div>
        <div class="col-md-offset-3"></div>
      </div>
  </section>
  <!--main end-->
@stop

@section('footer')
  @include('footer',['class'=>'bgColorGray'])
@stop
