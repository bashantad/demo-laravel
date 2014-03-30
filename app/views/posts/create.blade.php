<link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.min.css">
<div class="row">
	<div class="col-sm-offset-2 col-sm-8 col-sm-offset-2">
	<h1>Create a post</h1>

	<!-- if there are creation errors, they will show here -->
	{{ HTML::ul($errors->all()) }}

	{{ Form::open(array('url' => 'posts')) }}

		<div class="form-group">
			{{ Form::label('title', 'Title') }}
			{{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
		</div>

		<div class="form-group">
			{{ Form::label('body', 'Body') }}
			{{ Form::textarea('body', Input::old('body'),  array('class' => 'form-control', "cols" => 100, "rows" => 10)) }}
		</div>

		{{ Form::submit('Create the post!', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}
</div>