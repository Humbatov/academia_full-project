@extends('layout')

@section('navbar')
  @include('navbar')
@stop

@section('container')
<section id="mainUser">
  <div class="userinfo">
        <div class="container">
        <div class="col-md-12">
            <div class="col-md-2 paddingClear">

                <img src="{{ url('img/profile.png') }}">
            </div>

            <div class="col-md-10">
                <div>
                  <ul>
                       <li>
                        <a href="#">{{$user->name}} {{$user->surname}}</a>
                       </li>
                     </ul>
                     <div class="UsMain">


                           @if(!empty($user->university))
                             <a href="#" class="b"><i class="fa fa-university b"></i>{{ $user->university}}, </a>

                           @else

                           @endif


                            @if(!empty($user->department))

                             <a href="#" class="b">{{ $user->department}},</a>
                             @else

                             @endif

                            <i class="fa fa-tag"></i>
                            @foreach ($user->interests as $interest)
                              @if(!empty($user->interests))

                              <a href="{{ action('SearchController@searchPeople', ['id' => $interest->id])}}" class="b">{{ $interest->name}},</a>
                              @else

                              @endif
                            @endforeach

                     </div>
                         <div class="main2">

                        </div>
                     <div class="main3">

                         <a href="#" class="c"><span>0 </span>Followes </a><span class="span">|</span>
                         <a href="#" class="c"><span>0 </span>Following </a><span class="span">|</span>
                         <a href="#" class="c"><span>0 </span>Total views</a>
                     </div>
                     <div class="main4" style="margin-top:15px;">

                       <button class="btn buthov1"><i class="fa fa-plus" style="margin-right:5px"></i>FOLLOW</button>

                  </div>
                </div>
            </div></div>
        </div>
     </div>
     <section id="PDF">
     <div class="container">
           <div class="row">
              <div class="col-md-5"><hr></div>
              <div class="col-md-2 text-center">PAPERS</div>
              <div class="col-md-5"><hr></div>
            </div>

          <div class="row" style="margin-top:20px;">
          @if(count($user->files) > 0)
            @foreach($user->files as $file )
              <div class="col-md-12" style="margin-bottom:30px;">
                <div class="col-md-2 padClass" >
                     <div style="width:90px;height:116px;">
                          <a href="#">
                          <img src="{{ url('img/pdf.png') }}"></a>
                     </div>
                </div>
                  <!-- <div class="col-md-10"> -->
                  <a href="{{ action('FileController@show', ['id' => $file->id])}}" style="font-size:20px;color:gray;">{{ $file->title}}</a>
                  <ul>
                      <li>
                          <a href="#">
                              <i class="fa fa-bookmark" style="color:#428BCA;"></i> Bookmark
                          </a>
                      </li>
                      <li><i class="fa fa-arrow-circle-o-down" style="color:#5E9F17"></i>
                      <a href=""> Download</a></li>
                      <li><i class="fa fa-eye fa-lg u-mr1x" style="color:#999999"></i><a href="#">{{ $file->numbers_of_views}} </a></li>

                  </ul>
              </div>
            @endforeach
          @else
              <div class="col-md-12 text-center" > <h1>NO PAPERS</h1></div>
          @endif

           </div>
       </div>
     </section>
</section>
@stop

@section('footer')
  @include('footer',['class'=>'bgColorGray'])
@stop
