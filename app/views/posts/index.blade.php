<link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.min.css">
<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Body</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
	</thead>
	<tbody>
	@foreach($posts as $key => $value)
		<tr>
			<td>{{ $value->id }}</td>
			<td>{{ $value->title }}</td>
			<td>{{ $value->body }}</td>

			<!-- we will also add show, edit, and delete buttons -->
			<td>
				<!-- show the nerd (uses the show method found at GET /nerds/{id} -->
				<a class="btn btn-small btn-success" href="{{ URL::to('posts/' . $value->id) }}">Show</a>
			</td>
			<td>
				<!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('posts/' . $value->id . '/edit') }}">Edit</a>
			</td>
			<td>
				{{ Form::open(array('url' => 'posts/' . $value->id, 'class' => 'form-inline')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
				{{ Form::close() }}

			</td>
		</tr>
	@endforeach
	</tbody>
</table>