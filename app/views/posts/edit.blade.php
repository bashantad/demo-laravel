<link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.min.css">
<div class="row">
	<div class="col-sm-offset-2 col-sm-8 col-sm-offset-2">
<h1>Edit {{ $post->title }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($post, array('route' => array('posts.update', $post->id), 'method' => 'PUT')) }}

	<div class="form-group">
		{{ Form::label('title', 'Title') }}
		{{ Form::text('title', null, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('body', 'Body') }}
		{{ Form::textarea('body', null, array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Edit the Post!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
</div>
</div>