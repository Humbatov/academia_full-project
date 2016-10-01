@extends('layout')

@section('navbar')
  @include('navbar')
@stop

@section('container')
  <!--wrap start-->
  <section id="wrap" class="col-md-12">


      <!--paper start-->
      <section id="content" class="col-md-12">
          <div class="container " style="padding: 0;">
              <!--contentin esas hissesi-sol-->

              <section class="papers animated col-sm-12 col-md-10 col-md-offset-1 container fadeInDown">

                  <div class="newPaper">
                      <div>
                          <div class="paperAdd">
                              <i class="fa fa-tag"></i>
                              <h5>New paper added to <a href="#" class="bold">Mathematics</a></h5>
                              <span class="pull-right">6 days</span>
                          </div>
                          <div class="paperTitle">
                              <a href="">Lebendiges Mathematiklernen: Der Blick der Themenzentrierten Interaktion auf die Mathematikdidaktik</a>
                          </div>
                          <div class="paperText">
                              <p>Research studies show students' weaknesses in conceptual understanding of the integration. The aim of this paper is offering a sequence of activities to reach a mature conceptual understanding of integral. The journey
                                  is started from exploring an area calculation method by partitioning, forming an algebraic sequence, and taking the limit of that sequence for obtaining the formal concept of integration. We also planned the usage
                                  of spreadsheet program. During the journey, we make an effort to support students for quantitative reasoning. At the end of the journey, we hypothesize that students can reach the big idea that " Integral is a special
                                  continuous sum and antiderivative is a genius method to calculate this sum " instead of " integral is an operation which is the inverse of derivative ". Consequently, the effect of this learning journey was tested
                                  on 47 students and some clues were found showing the positive effect understanding the integration conceptually.</p>
                          </div>
                          <button class="pull-right moreButton">read more...</button>
                          <div class="paperMenu">
                              <a href="" class="btn btn-default papA"><i class="fa fa-bookmark"></i>BOOKMARK</a>
                              <a href="" class="btn btn-default papA"><i class="fa fa-arrow-circle-o-down"></i>DOWNLOAD</a>
                              <h5>
                                      by <a href="{{ url('/userprofile') }}" class="bold">Susanne Prediger</a>
                                      <i>|</i>
                                      <i class="fa fa-eye"></i>
                                      4 <i>|</i>
                                      <i class="fa fa-bookmark"></i>
                                      <a href="#">Mathematics</a>,
                                      <a href="#">Teaching method</a>
                                 </h5>
                          </div>
                      </div>
                  </div>

              </section>



              <!--content end-->
          </div>
          <div class="clearfix"></div>

      </section>
      <!--paper end-->
@stop

@section('footer')
  @include('footer',['class'=>'navbar-fixed-bottom'])
@stop
