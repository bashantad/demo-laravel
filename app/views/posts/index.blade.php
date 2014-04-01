@extends('layouts.master')

@section('sidebar')
    @parent
@stop

@section('content')
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

			<td>
				<a class="btn btn-small btn-success" href="{{ URL::to('posts/' . $value->id) }}">Show</a>
			</td>
			<td>
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
@stop
