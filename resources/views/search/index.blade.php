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
                  <h2 class="marginClear">Search Results for '{{ $query }}'</h2>
              </div>
              <div class="clearfix"></div>
              <section class="tagsName">
                  <div class="col-md-2 col-sm-4 col-xs-6"><a href="#">{{ $users->count() }} People</a></div>
                  <div class="col-md-2 col-sm-4 col-xs-6"><a href="#interest">{{ $interests->count() }} Research Interests</a></div>
                  <div class="clearfix"></div>
              </section>
          </div>

          <section id="people">
              <div class="subtitle">
                  <p>

                      @if (count($users->get()) > 0)
                        {{ $users->count() }} People found matching "{{$query}}"
                      @else
                        People not found
                      @endif

                  </p>
              </div>
              <div class="row">

                  @if (count($users->get()) > 0)
                    @foreach ($users->get() as $user)
                      <div class="col-md-12">
                          <div class="img">
                              <img class="img-responsive" src="{{ url('img/s65_no_pic.png') }}" alt="" />
                          </div>
                          <div class="info">
                              <h3 class="marginClear">
                    <a href="#">{{ $user->name }} {{ $user->surname }}</a>
                  </h3>
                              <p>
                                  @foreach ($user->interests()->get() as $interest)
                                    <a href="#">{{ $interest->name}},</a>
                                  @endforeach

                              </p>
                          </div>
                          <div class="button pull-right">
                              <a class="btn btn-success" href="#">Follow {{ $user->name}}</a>
                              <div class="clearfix">

                              </div>
                          </div>
                          <div>
                              <hr>
                          </div>
                      </div>
                    @endforeach
                  @endif



              </div>

          </section>

          <section id="interest" class="title">
              <h3>
            <a href="#">Reserch interests</a>
          </h3>
              <div class="subtitle">
                  <p>
                    @if (count($interests->get()) > 0)
                      {{ $interests->count() }} Interests found matching "{{$query}}"
                    @else
                      Interests not found
                    @endif
                  </p>
              </div>
              <div class="search_result">
                  @foreach ($interests->get() as $interest)
                    <a href="{{ action('SearchController@searchPeople', ['id' => $interest->id])}}">{{ $interest->name}}</a>
                  @endforeach
              </div>
          </section>

      </div>
  </section>
  <!-- Search start -->
@stop

@section('footer')
  @include('footer',['class'=>'bgColorGray'])
@stop
