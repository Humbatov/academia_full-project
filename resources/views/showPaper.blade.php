@extends('layout')

@section('navbar')
  @include('navbar')
@stop

@section('container')
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
																@foreach ($file->interests()->get() as $interest)
																  <h5>
                                    <a href="{{ action('SearchController@searchPeople', ['id' => $interest->id])}}" class="bold">{{ $interest->name}}</a>
                                  </h5>
																@endforeach
																<h5>
                                  <a href="{{ action('PagesController@userprofile', ['id' => $file->user->id,'name' => $file->user->name,'surname' => $file->user->surname])}}">
                                    by
                                    {{ $file->user->name}} {{ $file->user->surname}}</a>
                                </h5>
																<span class="pull-right">6 days</span>
														</div>
														<div class="paperTitle">
																<h3>{{ $file->title}}</h3>
														</div>
														<div class="readPaper">
																@php
																  echo $file->content;
																@endphp
														</div>

												</div>



										</div>
								</section>



								<!--content end-->
						</div>
						<div class="clearfix"></div>

				</section>
				<div class="clearfix"></div>

@endsection
