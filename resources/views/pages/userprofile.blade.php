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
                        <a href="#">User Name</a>
                       </li>
                     </ul>
                     <div class="UsMain">
                         <i class="fa fa-university b"></i>
                         <a href="#" class="b">University name,</a>
                         <a href="#" class="b">Departments,</a>
                         <a href="#" class="b"><i class="fa fa-tag"></i>Faculty</a>
                     </div>
                         <div class="main2">
                            <i class="fa fa-plus u-mr1x"></i>
                          <a href="#" class="b">Add a Biography</a>
                        </div>
                     <div class="main3">

                         <a href="#" class="c"><span>0 </span>Followes </a><span class="span">|</span>
                         <a href="#" class="c"><span>0 </span>Following </a><span class="span">|</span>
                         <a href="#" class="c"><span>0 </span>Total views</a>
                     </div>
                     <div class="main4" style="margin-top:15px;">

                       <button class="btn buthov1"><i class="fa fa-plus" style="margin-right:5px"></i>FOLLOW</button>
                       <button class="btn buthov2"><i class="fa fa-comment" style="margin-right:3px"></i>MESSAGE</button>

                      <ul>
                        <li class="envelope"><a href="#"><i class="fa fa-envelope" style="color:#AFAFAF;"></i></a></li>
                        <li class="twitter"><a href="#"><i class="fa fa-twitter" style="color:#AFAFAF;"></i></a></li>
                    </ul>
                  </div>
                </div>
            </div></div>
        </div>
     </div>
     <section id="PDF">
     <div class="container">
           <div class="row">
              <div class="col-md-5"><hr></div>
              <div class="col-md-1">PAPERS</div>
              <div class="col-md-5"><hr></div>
            </div>
        <div class="row" style="margin-top:20px;">
        <div class="col-md-12">
          <div class="col-md-2 padClass">
               <div style="width:90px;height:116px;">
                    <a href="#">
                    <img src="{{ url('img/pdf.png') }}"></a>
               </div>
              </div>

            <!-- <div class="col-md-10"> -->
            <a href="#" style="font-size:20px;color:gray;">Starting the Journey: Discovering the Point of D&T</a>
            <ul>
                <li>
                    <a href="#">
                        <i class="fa fa-bookmark" style="color:#428BCA;"></i> Bookmark
                    </a>
                </li>
                <li><i class="fa fa-arrow-circle-o-down" style="color:#5E9F17"></i>
                <a href="#"> Downloaded</a></li>
                <li><i class="fa fa-eye fa-lg u-mr1x" style="color:#999999"></i><a href="#"> 20</a></li>
                <li style="border:none;"><i class="fa fa-ellipsis-h" style="color:#999999"></i><a href="#"> More</a></li>

            </ul>
              <!-- </div> -->
            </div>
         </div>
         </div>
     </section>
</section>
@stop
