@extends('layout')

@section('navbar')
  @include('navbar')
@stop

@section('container')
	<section id="articleCreate">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<form action="{{ action('FileController@store')}}" class="form-horizontal" method="POST" accept-charset="utf-8">

						{{ csrf_field() }}

					<div class="form-group">
						<legend>Create post</legend>
					</div>

				<div class="row">
					<div class="form-group">
						<label for="inputTitle" class="col-sm-2 control-label">Title:</label>
						<div class="col-sm-6">
							<input type="text" name="title" id="inputTitle" class="form-control" value="">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="form-group">
						<label for="textareaExcerpt" class="col-sm-2 control-label">Abstract</label>
						<div class="col-sm-6">
							<textarea name="abstract" id="textareaExcerpt" class="form-control" rows="7"></textarea>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="form-group">
						<label for="textareaContent" class="col-sm-2 control-label">Content:</label>
						<div class="col-sm-6">
							<textarea name="content" id="textareaContent" class="form-control" rows="5"></textarea>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="form-group">
						<label for="inputStatus" class="col-sm-2 control-label">Status:</label>
						<div class="col-sm-10">
							<div class="radio">
								<label>
									<input type="radio" checked name="status" id="inputStatus" value="unpublic">
									<span class="text-capitalize">Unpublic</span>
								</label>
								<label>
									<input type="radio" name="status" id="inputStatus" value="public">
									<span class="text-capitalize">Public</span>
								</label>
							</div>
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-10 col-sm-offset-2">
						<button type="submit" class="btn btn-primary">Save</button>
						<a class="btn btn-info" href="#">Cancel</a>
					</div>
				</div>

				@section('scripts')
					<!-- include summernote css/js-->
					<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
					<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>

					<script type="text/javascript">
					$(document).ready(function() {
							$('#textareaContent').summernote({
								toolbar: [
							    // [groupName, [list of button]]
							    ['style', ['bold', 'italic', 'underline', 'clear']],
							    ['font', ['strikethrough', 'superscript', 'subscript']],
							    ['fontsize', ['fontsize']],
							    ['color', ['color']],
							    ['para', ['ul', 'ol', 'paragraph']],
							    ['height', ['height']]
							  ],
								height: 200,                 // set editor height
								minHeight: 100,             // set minimum height of editor
								maxHeight: 300,             // set maximum height of editor
								focus: true                  // set focus to editable area after initializing summernote
							});
						});
					</script>
				@stop
			</form>
				</div>
			</div>
		</div>
	</section>
@stop
