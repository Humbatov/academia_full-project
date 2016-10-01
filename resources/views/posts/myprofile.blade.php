@extends('layout')

@section('navbar')
  @include('navbar')
@stop

@section('container')

<section id="mainheader">

    <div class="userinfo">
        <div class="container">
            <div class="col-md-2">
                <div class="profilimg">
                    <img src="{{ url('img/profile.png') }}">
                </div>
            </div>
            <div class="col-md-10">
                <div>

                     <a href=""><h4>{{ Auth::user()->name}} {{ Auth::user()->surname}}</h4></a>

                     <div class="myMain">
                       @if (!empty(Auth::user()->university) || !empty(Auth::user()->department) || !empty(Auth::user()->position))
                          <i class="fa fa-university b"></i>
                          @if (!empty(Auth::user()->university))
                            <a href="#" class="b">{{Auth::user()->university}},</a>
                          @endif

                          @if (!empty(Auth::user()->department))
                            <a href="#" class="b">{{Auth::user()->department}},</a>
                          @endif

                          @if (!empty(Auth::user()->position))
                            <a href="#" class="b">{{Auth::user()->position}}</a>
                          @endif
                       @endif

                         @if (count(Auth::user()->interests) != 0)
                           <i class="fa fa-tag"></i>
                           @foreach (Auth::user()->interests as $interest)
                             <a href="{{ action('SearchController@searchPeople', ['id' => $interest->id])}}" class="b">{{ $interest->name}}</a>
                           @endforeach
                         @endif


                     </div>

                     <div class="main3">

                         <a href="#" class="c"><span>0 </span>Followes </a><span class="span">|</span>
                         <a href="#" class="c"><span>0 </span>Following </a><span class="span">|</span>
                         <a href="#" class="c"><span>0 </span>Total views</a>
                     </div>
                     <div class="main4" style="margin-top:15px;">

                </div>
            </div>
        </div>
     </div>
 </section>
 <section id="PDF">
   <div class="container">
     <div class="row">
        <div class="col-md-5"><hr></div>
        <div class="col-md-2 text-center">PAPERS</div>
        <div class="col-md-5"><hr></div>
      </div>
      @if (count(Auth::user()->files) > 0)
        @foreach (Auth::user()->files as $file)
       <div class="row" style="margin-top:20px;">
       <div class="col-md-12" style="margin-bottom: 20px">
         <div class="col-md-2 padClass">
              <div style="width:90px;height:116px;">
                   <a href="#">
                   <img src="{{ url('img/pdf.png') }}"></a>
              </div>
             </div>
           <div class="col-md-10" style="padding-top: 19px">
           <a href="{{ action('FileController@show', ['id' => $file->id])}}" style="font-size:20px;color:gray;">{{ $file->title }}hjjhj</a>
           <ul style="margin-top:12px; padding-left: 38px;">
               <li>
                   <a href="#">
                       <i class="fa fa-bookmark" style="color:#428BCA;"></i> Bookmark
                   </a>
               </li>
               <li><i class="fa fa-arrow-circle-o-down" style="color:#5E9F17"></i>
               <a href=""> Download</a></li>
               <li style="border: none;"><i class="fa fa-eye fa-lg u-mr1x" style="color:#999999"></i><a style="vertical-align: text-bottom;" href="#"> {{ $file->numbers_of_views }}</a></li>


           </ul>
              </div>
           </div>
        </div>
        @endforeach
      @else
        <div style="margin-bottom:110px;" class="container">
          <h1 class="text-center">No papers</h1>
        </div>
      @endif
   </div>
 </section>


@stop
@section('footer')
  @include('footer',['class'=>'bgColorGray'])
@stop
