@extends('layout')

@section('navbar')
  @include('navbar')
@stop

@section('container')
	<section id="mainFileEdit">
		<center class="container">
			<div class="row text-center">
				<h5>Add Paper Details</h5>
				<div class="col-md-6 col-md-push-3 editFile text-center">
					<form>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Paper Title</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
					    
					  </div>
					  <div class="form-group">
					    <label for="exampleTextarea">Abstract</label>
					    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Authors</label>
					    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Authors">
					  </div>
					  <div class="form-group">
					    <label for="exampleSelect1">Research Interests</label>
					    <select class="form-control" id="exampleSelect1">
					      <option>Mathematics</option>
					      <option>Programming</option>
					      <option>Science</option>
					      <option>Biology</option>
					      <option>Philosophy</option>
					    </select>
					  </div>
					   
					</form>
					<button>SAVE & FINISH</button>
				</div>

			</div>
		</center>
	</section>
@stop

@section('footer')
  @include('footer',['class'=>'bgColorGray'])
@stop
