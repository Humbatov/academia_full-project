@extends('layout')

@section('navbar')
  @include('navbar')
@stop

@section('container')
	<section id="mainFileUpload">
		<center class="container">
			<div class="row text-center">
				<h5>Upload Papers</h5>
				<div class="col-md-6 col-md-push-3 chooseFile text-center">
					<form action="#type your action here" method="POST" enctype="multipart/form-data" name="myForm">
						<div id="yourBtn" onclick="getFile()">CHOOSE FILES</div>

						<div style='height: 0px;width: 0px; overflow:hidden;'>
							<input id="upfile" type="file" value="upload"/>
						</div>

					</form>
				</div>

			</div>
			<a href="{{ action('FileController@postEdit')}}">No file to upload?</a>
		</center>
	</section>
@stop

@section('footer')
  @include('footer',['class'=>'bgColorGray'])
@stop
