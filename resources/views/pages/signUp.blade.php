@extends('layout',['class'=>'c-signup a-signup logged-out'])

@section('container')
  <div id="site" class="fix">
    <div id="content" class="clearfix">
      <div class="DesignSystem">
        <div class="container">
           <div class="row">
              <div class="col-xs-12 col-md-6 col-md-offset-3">
              <!-- CONTENT de DEYISHIKLIK -->
                 <div class="Content1 center-block u-mt20x">
                     <div class="u-taCenter">
                     <!-- Logo DEYISHIKLIK -->
                         <img class="Logo1" src="{{ url('img/academia-logo-redesign-2015.svg') }}" class="logo"" style="width: 178px;height: 22px;" alt="Academia logo redesign 2015">
                     </div>

                     <div class="u-mt2x"></div>

                     <div class="u-mt3x">
                        <div class="row">
                          <div class="col-md-6">
                             <div class="u-mv6x">
                               <button class="js-fb-button Button Button--facebook Button--lg Button--block u-p0x">
                               <i class="fa fa-lg fa-facebook-square"></i><span class="u-fs11">&nbsp;&nbsp;Sign Up with Facebook</span>
                               </button>
                              </div>
                            </div>
                            <div class="col-md-6">
                             <div class="u-mv6x">
                              <button class="js-google-button Button Button--google Button--lg Button--block u-p0x" id="login-google-oauth-button">
                                <i class="fa fa-lg fa-google-plus"></i><span class="u-fs11">&nbsp;&nbsp;Sign Up with Google</span>
                              </button>
                            </div>
                           </div>
                          </div>
                          <div class="row">
                           <div class="col-xs-12">
                             <div class="hr-heading login-hr-heading u-mb6x">
                               <span class="hr-heading-text">or</span>
                             </div>
                            </div>
                           </div>
                          </div>
                  <div class="SignUpForm">
                    <form class="js-signup-email-form u-mb8x" action=" " accept-charset="UTF-8" method="post">
                      <input name="utf8" type="hidden" value="✓">
                      <input type="hidden" name=" " value=" ">
                      <div class="row">
                          <div class="col-xs-12 col-md-6 u-mb8x">
                           <div class="u-positionRelative">
                             <input class="TextInput TextInput--lg TextInput--dark signup-input" placeholder="First Name" autofocus="autofocus" type="text" value="" name="user[first_name]" id="user_first_name">
                          </div>
                         </div>
                         <div class="col-xs-12 col-md-6 u-mb8x">
                          <div class="u-positionRelative">
                            <input class="TextInput TextInput--lg TextInput--dark signup-input" placeholder="Last Name" type="text" value="" name="user[last_name]" id="user_last_name">
                          </div>
                         </div>
                         <div class="col-xs-12 u-mb8x">
                          <div class="u-positionRelative">
                            <input class="TextInput TextInput--lg TextInput--dark signup-input" placeholder="Email" type="text" value="" name="user[email]" id="user_email">
                          </div>
                         </div>
                         <div class="col-xs-12 u-mb8x">
                           <div class="u-positionRelative">
                             <input class="TextInput TextInput--lg TextInput--dark signup-input" placeholder="Password" type="password" name="user[password]" id="user_password">
                           </div>
                          </div>
                      </div>
                      <input type="hidden" name=" " id=" ">
                      <div class="row">
                         <div class="col-sm-8">
                             <div class="u-pt3x hidden-xs"></div>
                             <p class="u-fs12">By clicking Sign Up, you agree to our
                             <a id="terms" tabindex="-1" href=" ">Terms</a>.</p>
                             <div class="u-pb5x hidden-sm hidden-md hidden-lg"></div>
                         </div>
                         <div class="col-sm-4">
                            <div class="js-signup-spinner" style="display:none">
                              <div class="text-center u-mv3x">
                                <i class="fa fa-spinner fa-spin fa-lg"></i>
                              </div>
                            </div>
                            <input type="submit" name="commit" value="Sign up" class="Button1 Button--lg Button--block" id="register_button">
                          </div>
                      </div>
                    </form>
                  </div>
                  <hr>
                    <!-- HR DEYISHIKLIK OLUB LOGIN SCSS BAX -->
                        <div class="u-taCenter u-mv8x u-tcGrayDark">
                           Already have an account?&nbsp;<a class="u-tcGrayDark u-textDecorationUnderline" href=" ">Log In</a>
                        </div>
                 </div>
              </div>
           </div>
        </div>
      </div>
    </div>
  </div>
@stop
