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
                 
                     <a href="#"><h4>Fidan Djabrayilova</h4></a>
                   
                     <div class="myMain">
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

                    <button class=" buthov1"><i class="fa fa-file" style="margin-right:5px"></i>UPLOAD</button>
                    <button class=" buthov2"><i class="fa fa-pencil" style="margin-right:3px"></i>EDIT</button></div>
                </div>
            </div>
        </div>
     </div>
     
     <section id="designSystems">
        <div class="container">
          <div class="col-md-12 col">
              <div class="uv">
                  <div class="text1">Boost Citations by 69%
                  </div>
                  <div class="test2">A study recently published in <i>PLOS ONE</i> found that papers uploaded to Academia.edu receive a 69%<br> boost in citations over 5 years.<br>
                  
                  <button class="button1">UPLOAD PAPERS</button><br>
                  <button class="button2">DO THIS LATER</button>
              </div>
          </div>
        </div>
        </div>
     </section>
 </section>

    
@stop
@section('footer')
  @include('footer',['class'=>'bgColorGray'])
@stop