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
                    <h1 class="marginClear">{{ $interest->name}}</h1>
                    <p>
                        {{ $interest->users()->count()}} Followers
                    </p>

                  </div>
                  <div class="col-md-2 col-sm-6 col-xs-6">
                      <a class="btn btn-success pull-right" href="{{ action('FollowController@interest', ['id' => $interest->id])}}">
                        Follow
                      </a>
                  </div>
              </div>
          </div>
          <div class="category">
              <div class="container">
                  <div class="col-md-12">
                      <a href="{{ action('SearchController@searchPeople', ['id' => $interest->id] )}}">People</a>
                      <a class="triangle" href="{{ action('SearchController@searchDocument', ['id' => $interest->id] )}}">Document</a>
                  </div>
              </div>
          </div>
          <div class="resultDocument">
              <div class="container">
                  <div class="row">
                      <div class="col-md-9">
                          <div class="container">

                              @foreach ($interest->files as $file)
                                <div class="newPaper">
                                    <div>
                                        <div class="paperTitle">
                                            <a href="{{ action('FileController@show', ['id' => $file->id])}}">{{ $file->title}}</a>
                                        </div>
                                        <div class="paperText">
                                            <p>
                                              {{ $file->abstract}}
                                            </p>
                                        </div>
                                        <button class="pull-right moreButton">read more...</button>
                                        <div class="clearfix"></div>
                                        <div class="paperMenu">
                                            <a href="" class="btn btn-default papA"><i class="fa fa-bookmark"></i>BOOKMARK</a>
                                            <a href="" class="btn btn-default papA"><i class="fa fa-arrow-circle-o-down"></i>DOWNLOAD</a>
                                            <h5>
                                              by <a href="{{ action('PagesController@userprofile', ['id' => $file->user->id,'name' => $file->user->name,'surname' => $file->user->surname])}}" class="bold">
                                                {{ $file->user->name}} {{ $file->user->surname}}
                                              </a>
                                              <i>|</i>
                                              <i class="fa fa-eye"></i>
                                              {{ $file->numbers_of_views}}
                                              <i>|</i>
                                              <i class="fa fa-tag"></i>
                                              @foreach ($file->interests()->get() as $interest)
                                                <a href="{{ action('SearchController@searchPeople', ['id' => $interest->id])}}">{{ $interest->name}}</a>,
                                              @endforeach
                                         </h5>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                              @endforeach
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
