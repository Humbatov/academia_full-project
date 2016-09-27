
@extends('layout',['class'=>'c-static a-landing logged_out'])

@section('container')
  <div id="site" class="fix">
    <div id="content" class="clearfix">
      <div class="DesignSystem">
        <div class="container u-mt20x">
           <div class="row">
              <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">
              <!-- CONTENT de DEYISHIKLIK -->
                 <div class="Content1 center-block">
                     <div class="u-taCenter">
                     <!-- Logo DEYISHIKLIK -->
                         <img class="Logo1" src="{{ url('img/academia-logo-redesign-2015.svg') }}" class="logo"" style="width: 178px;height: 22px;" alt="Academia logo redesign 2015">
                     </div>

                     <div class="row u-mt2x">
                        <div class="col-sm-6">
                           <button class="Button Button--inverseFacebook Button--lg Button--block u-p0x u-mv6x" id="login-facebook-oauth-button">
                             <i class="fa fa-lg fa-facebook-square"></i><span class="u-fs11">&nbsp;&nbsp;Log In with Facebook</span>
                           </button>
                        </div>

                      <div class="col-sm-6">
                         <button class="Button Button--inverseGoogle Button--lg Button--block u-p0x u-mv6x" id="login-google-oauth-button">
                           <i class="fa fa-lg fa-google-plus"></i><span class="u-fs11">&nbsp;&nbsp;Log In with Google</span>
                         </button>
                      </div>
                     </div>
                      <div class="row">
                        <div class="col-xs-12">
                          <div class="hr-heading login-hr-heading">
                            <span class="hr-heading-text">or</span>
                          </div>
                        </div>
                       </div>
                       <div class="row">

                         <div class="col-xs-12 u-positionRelative u-mt6x u-mb8x">
                           <form action="{{ url('/login') }}" role="form" method="POST">
                             {{ csrf_field() }}

                              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label class="control-label" for="login-modal-email-input">Email</label>
                                <input class="TextInput TextInput--lg TextInput--dark u-mb8x" id="login-modal-email-input" placeholder="Email Address" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                              </div>
                              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                  <label class="control-label" for="login-modal-email-input">Password</label>
                                   <div class="u-floatRight">
                                     <a class="u-tcGrayDark u-fs12" data-target="#login-reset-password-container" data-toggle="collapse" href="">
                                      <span class="u-textDecorationNone"><i class="fa fa-lg fa-question-circle u-pr1x" style="line-height: 9px"></i></span>Password Reset</a>
                                   </div>
                                  <input class="TextInput TextInput--lg TextInput--dark u-mb8x" id="login-modal-password-input" name="password" placeholder="Password" type="password" id="password">

                                  @if ($errors->has('password'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('password') }}</strong>
                                      </span>
                                  @endif

                             </div>
                             <div class="row">
                              <div class="col-sm-8">
                               <div class="checkbox">
                                <label class="u-m0x" style="line-height: 18px;">
                                  <input type="checkbox" name="remember" id="remember_me" value="1" checked="checked">
                                  <div class="u-tcGrayDark u-fs12 u-fw400">Remember me on this computer</div>
                                </label>
                             </div>
                           </div>
                           <div class="col-sm-4">
                           <!-- BUTTON DEYISHIKLIK -->

                             <input type="submit"  value="Log In" class="Button1 Button--lg Button--block">

                           </div>
                          </div>
                         </form>
                        <div class="collapse" id="login-reset-password-container">
                         <br>

                         <div class="well margin-0x">
                           <form action=" " accept-charset="UTF-8" method="POST">

                             <p>Enter the email address you signed up with and we'll email you a reset link.</p>
                             <div class="form-group">
                             <!-- FORM CONTROL DEYISHIKLIK & BUTTON1-->
                               <input class="form-control1" name="email" type="email">
                              </div>
                              <input type="submit" name="commit" value="Email me a link" class="Button1 Button--block Button--blue">
                           </form>
                       </div>
                      </div>
                    </div>
                   </div>
                    <hr>
                    <!-- HR DEYISHIKLIK OLUB LOGIN SCSS BAX -->
                     <div class="row">
                        <div class="u-taCenter u-mv8x u-tcGrayDark">
                           Don't have an account?&nbsp;<a class="u-tcGrayDark u-textDecorationUnderline" href="{{ url('/register')}}">Sign Up</a>
                        </div>
                     </div>
                  </div>
                </div>
              </div>
             </div>
            </div>
           </div>
          </div>
@stop
