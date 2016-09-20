@extends('layout',['class'=>'c-static a-landing logged_out'])

@section('container')
  <div class="DesignSystem">
    <div class="container">
      <div class="row">
       <div class="col-xs-12">
         <div class="Header">
           <div class="u-floatLeft">
             <img class="Logo" src="img/academia-logo-redesign-2015.svg" class="logo"" style="width: 146px;height: 18px;" alt="Academia logo"></div>
             <div class="u-floatRight"><a class="Button Button--sm Button--inverseGray" href="/login" style="z-index: 1;">Log In</a></div>

       </div>
      </div>
     </div>
     </div>

            <div class="container Content h-positionAbsoluteVCenter">
               <div class="row">
                 <div class="col-xs-12">
                   <div class="Media">
                      <div class="Media-body Media--left Media--middle">
                        <h1 class="Headline u-fontSerif u-mt0x">Join&nbsp;41,562,348&nbsp;Academics</h1>
                        <p class="Subhead u-fw300 u-tcGrayDarker">Academia is the easiest way to share papers with millions of people across the world for free. A <a class="u-linkUnstyled u-textDecorationUnderline" href="">study</a> recently published in <i>PLOS ONE</i> found that papers uploaded to Academia receive a 69% boost in citations over 5 years.</p>
                           <div class="row u-mt8x hidden-xs">
                              <div class="col-sm-6 col-md-5"><button class="js-landing-google Button Button--google Button--lg Button--block u-ph3x u-fs11"><i class="fa fa-google-plus fa-lg"></i>  Google Sign Up</button></div>
                              <div class="col-sm-6 col-md-5"><button class="js-landing-facebook Button Button--facebook Button--lg Button--block u-ph3x u-fs11 u-mr5x"><i class="fa fa-facebook-square fa-lg"></i>  Facebook Sign Up</button></div>
                           </div>

                           <div class="row u-mt8x visible-xs">
                              <div class="col-xs-12"><button class="js-landing-google Button Button--google Button--lg Button--block" href="/signup"><i class="fa fa-google-plus fa-lg"></i>  Google Sign Up</button></div>
                              <div class="col-xs-12 u-mt4x"><button class="js-landing-facebook Button Button--facebook Button--lg Button--block u-mr5x" href="/signup"><i class="fa fa-facebook-square fa-lg"></i>  Facebook Sign Up</button></div>
                           </div>

                           <div class="row u-mt8x">
                              <div class="col-xs-12 col-md-10">
                                 <div class="u-tcGray u-taCenter">Don't have Google or Facebook? <a class="u-linkUnstyled u-textDecorationUnderline" href="/signup"> Sign Up with Email</a></div>
                              </div>
                           </div>
                      </div>

                         <div class="Media--right Media--middle hidden-xs">
                            <img class="Media-object CitationIllustration" src="img/citation-illustration.svg" alt="Citation illustration">
                         </div>

                   </div>
                 </div>
               </div>
             </div>

              <div class="container">
              <div class="row">
               <div class="col-xs-6 col-md-12">
                 <div class="Foot hidden-xs">
                    <div id="foot" class="bootstrap">
                      <div class="footer-content clearfix text-center padding-top-7x">
                        <ul class="footer-links-secondary footer-links-wide list-inline margin-bottom-1x">
                          <li><a rel="= " href=" ">Job Board</a></li><li><a rel=" " href=" ">About</a></li><li><a rel="= " href=" ">Press</a></li><li><a rel=" " href=" ">Blog</a></li><li><a href=" ">People</a></li><li><a href=" ">Papers</a></li><li><a rel=" " href=" ">Terms</a></li><li><a rel=" " href=" ">Privacy</a></li><li><a rel=" " href=" ">Copyright</a></li><li><a rel=" " href=" "><i class="fa fa-briefcase"></i>&nbsp;<strong>We're Hiring!</strong></a></li><li><a rel=" " href=" "><i class="fa fa-question-circle"></i>&nbsp;<strong>Help Center</strong></a></li>
                        </ul>
                       <ul class="footer-links-tertiary list-inline margin-bottom-1x">
                          <li class="small">Find new research papers in:</li><li class="small"><a href=" ">Physics</a></li><li class="small"><a href=" ">Chemistry</a></li><li class="small"><a href=" ">Biology</a></li><li class="small"><a href=" ">Health Sciences</a></li><li class="small"><a href=" ">Ecology</a></li><li class="small"><a href=" ">Earth Sciences</a></li><li class="small"><a href=" ">Cognitive Science</a></li><li class="small"><a href=" ">Mathematics</a></li><li class="small"><a href=" ">Computer Science</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
         </div>
       </div>
@stop
