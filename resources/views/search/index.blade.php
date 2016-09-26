@extends('layout')

@section('navbar')
  @include('navbar')
@stop

@section('container')
  <!-- Search start -->
  <section id="search">
      <div class="container">
          <div class="row">
              <div class="col-md-12 headerPadding">
                  <h2 class="marginClear">Search Results for 'qafqaz'</h2>
              </div>
              <div class="clearfix"></div>
              <section class="tagsName">
                  <div class="col-md-2 col-sm-4 col-xs-6"><a href="#">4 People</a></div>
                  <div class="col-md-2 col-sm-4 col-xs-6"><a href="#interest">4 Research Interests</a></div>
                  <div class="col-md-2 col-sm-4 col-xs-6"><a href="#">1 University</a></div>
                  <div class="col-md-2 col-sm-4 col-xs-6"><a href="#">1 Department</a></div>
                  <div class="col-md-2 col-sm-4 col-xs-6"><a href="#">0 Jobs</a></div>
                  <div class="col-md-2 col-sm-4 col-xs-6"><a href="#">0 Papers</a></div>
                  <div class="clearfix"></div>
              </section>
          </div>

          <section id="people">
              <div class="subtitle">
                  <p>
                      4 People found matching "qafqaz"
                  </p>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <div class="img">
                          <img class="img-responsive" src="{{ url('img/s65_no_pic.png') }}" alt="" />
                      </div>
                      <div class="info">
                          <h3 class="marginClear">
                <a href="#">Qafqaz Journal</a>
              </h3>
                          <p>
                              <a href="#">Foreign Aid,</a>
                              <a href="#">Foreign Policy,</a>
                              <a href="#">Diplomancy,</a>
                              <a href="#">African Studies,</a> and
                              <a href="#">GIS AND REMOTE SENSING</a>
                          </p>
                      </div>
                      <div class="button pull-right">
                          <a class="btn btn-success" href="#">Follow Qafqaz</a>
                          <div class="clearfix">

                          </div>
                      </div>
                      <div>
                          <hr>
                      </div>
                  </div>

                  <div class="col-md-12">
                      <div class="img">
                          <img class="img-responsive" src="{{ url('img/s65_no_pic.png') }}" alt="" />
                      </div>
                      <div class="info">
                          <h3 class="marginClear">
                <a href="#">Qafqaz Journal</a>
              </h3>
                          <p>
                              <a href="#">Foreign Aid,</a>
                              <a href="#">Foreign Policy,</a>
                              <a href="#">Diplomancy,</a>
                              <a href="#">African Studies,</a> and
                              <a href="#">GIS AND REMOTE SENSING</a>
                          </p>
                      </div>
                      <div class="button pull-right">
                          <a class="btn btn-success" href="#">Follow Qafqaz</a>
                          <div class="clearfix">

                          </div>
                      </div>
                      <div>
                          <hr>
                      </div>
                  </div>

                  <div class="col-md-12">
                      <div class="img">
                          <img class="img-responsive" src="{{ url('img/s65_no_pic.png') }}" alt="" />
                      </div>
                      <div class="info">
                          <h3 class="marginClear">
                <a href="#">Qafqaz Journal</a>
              </h3>
                          <p>
                              <a href="#">Foreign Aid,</a>
                              <a href="#">Foreign Policy,</a>
                              <a href="#">Diplomancy,</a>
                              <a href="#">African Studies,</a> and
                              <a href="#">GIS AND REMOTE SENSING</a>
                          </p>
                      </div>
                      <div class="button pull-right">
                          <a class="btn btn-success" href="#">Follow Qafqaz</a>
                          <div class="clearfix">

                          </div>
                      </div>
                      <div>
                          <hr>
                      </div>
                  </div>

              </div>

          </section>

          <section id="interest" class="title">
              <h3>
            <a href="#">Reserch interests</a>
          </h3>
              <div class="subtitle">
                  <p>
                      4 Interest found matching "qafqaz"
                  </p>
              </div>
              <div class="search_result">
                  <a href="#">Qafqaz University</a>
                  <a href="#">Qafqaz University</a>
                  <a href="#">Qafqaz University</a>
                  <a href="#">Qafqaz University</a>
              </div>
          </section>
          <section id="university" class="title">
              <h3>
          <a href="#">Universities</a>
        </h3>
              <div class="subtitle">
                  <p>
                      One University found matching "qafqaz".
                  </p>
              </div>
              <div class="search_result">
                  <a href="#">Qafqaz University</a>
              </div>
          </section>
          <section id="department" class="title">
              <h3>
          <a href="#">Departments</a>
        </h3>
              <div class="subtitle">
                  <p>
                      One Department found matching "qafqaz".
                  </p>
              </div>
              <div class="search_result">
                  <a href="#">Qafqaz University</a>
              </div>
          </section>
      </div>
  </section>
  <!-- Search start -->
@stop

@section('footer')
  @include('footer',['class'=>'bgColorGray'])
@stop
