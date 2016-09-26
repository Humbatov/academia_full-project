@extends('layout')

@section('navbar')
  @include('navbar')
@stop

@section('container')
  <!-- Search start  -->
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
                  <a class="triangle" href="search_result-people.html">People</a>
                  <a href="search_result-document.html">Document</a>
              </div>
          </div>
      </div>
      <div class="resultPeople">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="img-container">
                          <div class="img-icon">
                              <img src="/img/IMG_0823.JPG" alt="" />
                          </div>
                      </div>
                      <div class="info">
                          <p class="marginClear">
                              <a href="#">Eugene Stanley</a>
                          </p>
                          <span><span class="number">960</span> Papers</span>
                          <span class="grayLight">|</span>
                          <span><span class="number">13,490</span> Views</span>
                          <span class="grayLight">|</span>
                          <span><span class="number">8,720</span> Followers</span>
                          <span class="grayLight">|</span> <i class="fa fa-trophy number"></i> <span class="number">top 2%</span>
                      </div>
                      <div class="button-container pull-right">
                          <input class="button " type="button" name="follow" value="Follow">
                      </div>
                      <hr>
                  </div>
                  <div class="col-md-12">
                      <div class="img-container">
                          <div class="img-icon">
                              <img src="/img/IMG_0823.JPG" alt="" />
                          </div>
                      </div>
                      <div class="info">
                          <p class="marginClear">
                              <a href="#">Eugene Stanley</a>
                          </p>
                          <span><span class="number">960</span> Papers</span>
                          <span class="grayLight">|</span>
                          <span><span class="number">13,490</span> Views</span>
                          <span class="grayLight">|</span>
                          <span><span class="number">8,720</span> Followers</span>
                          <span class="grayLight">|</span> <i class="fa fa-trophy number"></i> <span class="number">top 2%</span>
                      </div>
                      <div class="button-container pull-right">
                          <input class="button " type="button" name="follow" value="Follow">
                      </div>
                      <hr>
                  </div>
                  <div class="col-md-12">
                      <div class="img-container">
                          <div class="img-icon">
                              <img src="/img/IMG_0823.JPG" alt="" />
                          </div>
                      </div>
                      <div class="info">
                          <p class="marginClear">
                              <a href="#">Eugene Stanley</a>
                          </p>
                          <span><span class="number">960</span> Papers</span>
                          <span class="grayLight">|</span>
                          <span><span class="number">13,490</span> Views</span>
                          <span class="grayLight">|</span>
                          <span><span class="number">8,720</span> Followers</span>
                          <span class="grayLight">|</span> <i class="fa fa-trophy number"></i> <span class="number">top 2%</span>
                      </div>
                      <div class="button-container pull-right">
                          <input class="button " type="button" name="follow" value="Follow">
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
  <!-- Search end  -->

@stop


@section('footer')
  @include('footer',['class'=>'bgColorGray'])
@stop
