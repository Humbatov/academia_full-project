@extends('layout')

@section('navbar')
  @include('navbar')
@stop

@section('container')
  <!-- Page content start -->
  <section id="page-content">
      <!-- Search result start  -->
      <section id="search_result">

          <div class="title">
              <div class="container">
                  <div class="col-md-10 col-sm-6 col-xs-6">
                      <h1 class="marginClear">Physics</h1>
                      <p>
                          528,655 Followers
                      </p>

                  </div>
                  <div class="col-md-2 col-sm-6 col-xs-6">
                      <a class="btn btn-success pull-right" href="#">Follow</a>
                  </div>
              </div>
          </div>
          <div class="category">
              <div class="container">
                  <div class="col-md-12">
                      <a href="{{ url('/search/peoples') }}">People</a>
                      <a class="triangle" href="{{ url('/search/documents') }}">Document</a>
                  </div>
              </div>
          </div>
          <div class="resultDocument">
              <div class="container">
                  <div class="row">
                      <div class="col-md-9">
                          <div class="container">

                              <div class="newPaper">
                                  <div>
                                      <div class="paperTitle">
                                          <a href="">Lebendiges Mathematiklernen: Der Blick der Themenzentrierten Interaktion auf die Mathematikdidaktik</a>
                                      </div>
                                      <div class="paperText">
                                          <p>Research studies show students' weaknesses in conceptual understanding of the integration. The aim of this paper is offering a sequence of activities to reach a mature conceptual understanding of integral. The
                                              journey is started from exploring an area calculation method by partitioning, forming an algebraic sequence, and taking the limit of that sequence for obtaining the formal concept of integration. We also
                                              planned the usage of spreadsheet program. During the journey, we make an effort to support students for quantitative reasoning. At the end of the journey, we hypothesize that students can reach the big idea
                                              that " Integral is a special continuous sum and antiderivative is a genius method to calculate this sum " instead of " integral is an operation which is the inverse of derivative ". Consequently, the effect
                                              of this learning journey was tested on 47 students and some clues were found showing the positive effect understanding the integration conceptually.</p>
                                      </div>
                                      <button class="pull-right moreButton">read more...</button>
                                      <div class="clearfix"></div>
                                      <div class="paperMenu">
                                          <a href="" class="btn btn-default papA"><i class="fa fa-bookmark"></i>BOOKMARK</a>
                                          <a href="" class="btn btn-default papA"><i class="fa fa-arrow-circle-o-down"></i>DOWNLOAD</a>
                                          <h5>
                                            by <a href="#" class="bold">Susanne Prediger</a>
                                            <i>|</i>
                                            <i class="fa fa-eye"></i>
                                            4 <i>|</i>
                                            <i class="fa fa-tag"></i>
                                            <a href="#">Mathematics</a>,
                                            <a href="#">Teaching method</a>
                                       </h5>
                                      </div>
                                  </div>
                                  <hr>
                              </div>
                              <div class="newPaper">
                                  <div>
                                      <div class="paperTitle">
                                          <a href="">Lebendiges Mathematiklernen: Der Blick der Themenzentrierten Interaktion auf die Mathematikdidaktik</a>
                                      </div>
                                      <div class="paperText">
                                          <p>Research studies show students' weaknesses in conceptual understanding of the integration. The aim of this paper is offering a sequence of activities to reach a mature conceptual understanding of integral. The
                                              journey is started from exploring an area calculation method by partitioning, forming an algebraic sequence, and taking the limit of that sequence for obtaining the formal concept of integration. We also
                                              planned the usage of spreadsheet program. During the journey, we make an effort to support students for quantitative reasoning. At the end of the journey, we hypothesize that students can reach the big idea
                                              that " Integral is a special continuous sum and antiderivative is a genius method to calculate this sum " instead of " integral is an operation which is the inverse of derivative ". Consequently, the effect
                                              of this learning journey was tested on 47 students and some clues were found showing the positive effect understanding the integration conceptually.</p>
                                      </div>
                                      <button class="pull-right moreButton">read more...</button>
                                      <div class="clearfix"></div>
                                      <div class="paperMenu">
                                          <a href="" class="btn btn-default papA"><i class="fa fa-bookmark"></i>BOOKMARK</a>
                                          <a href="" class="btn btn-default papA"><i class="fa fa-arrow-circle-o-down"></i>DOWNLOAD</a>
                                          <h5>
                                            by <a href="#" class="bold">Susanne Prediger</a>
                                            <i>|</i>
                                            <i class="fa fa-eye"></i>
                                            4 <i>|</i>
                                            <i class="fa fa-tag"></i>
                                            <a href="#">Mathematics</a>,
                                            <a href="#">Teaching method</a>
                                       </h5>
                                      </div>
                                  </div>
                                  <hr>
                              </div>
                              <div class="newPaper">
                                  <div>
                                      <div class="paperTitle">
                                          <a href="">Lebendiges Mathematiklernen: Der Blick der Themenzentrierten Interaktion auf die Mathematikdidaktik</a>
                                      </div>
                                      <div class="paperText">
                                          <p>Research studies show students' weaknesses in conceptual understanding of the integration. The aim of this paper is offering a sequence of activities to reach a mature conceptual understanding of integral. The
                                              journey is started from exploring an area calculation method by partitioning, forming an algebraic sequence, and taking the limit of that sequence for obtaining the formal concept of integration. We also
                                              planned the usage of spreadsheet program. During the journey, we make an effort to support students for quantitative reasoning. At the end of the journey, we hypothesize that students can reach the big idea
                                              that " Integral is a special continuous sum and antiderivative is a genius method to calculate this sum " instead of " integral is an operation which is the inverse of derivative ". Consequently, the effect
                                              of this learning journey was tested on 47 students and some clues were found showing the positive effect understanding the integration conceptually.</p>
                                      </div>
                                      <button class="pull-right moreButton">read more...</button>
                                      <div class="clearfix"></div>
                                      <div class="paperMenu">
                                          <a href="" class="btn btn-default papA"><i class="fa fa-bookmark"></i>BOOKMARK</a>
                                          <a href="" class="btn btn-default papA"><i class="fa fa-arrow-circle-o-down"></i>DOWNLOAD</a>
                                          <h5>
                                            by <a href="#" class="bold">Susanne Prediger</a>
                                            <i>|</i>
                                            <i class="fa fa-eye"></i>
                                            4 <i>|</i>
                                            <i class="fa fa-tag"></i>
                                            <a href="#">Mathematics</a>,
                                            <a href="#">Teaching method</a>
                                       </h5>
                                      </div>
                                  </div>
                                  <hr>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-12 text-center">
                          <ul class="list-inline custom-pagination">
                              <li><a href="#">1</a></li>
                              <li><a href="#">2</a></li>
                              <li><a href="#">3</a></li>
                              <li><a href="#">4</a></li>
                              <li>...</li>
                              <li><a href="#">20570</a></li>
                              <li><a href="#">Next ›</a></li>
                              <li><a href="#">Last »</a></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- Search result end  -->
@stop

@section('footer')
  @include('footer',['class'=>'bgColorWhite'])
@stop
