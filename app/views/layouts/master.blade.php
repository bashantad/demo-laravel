<!DOCTYPE html>
<html>
<head>
	<title>Online resource portal</title>
      <?= stylesheet_link_tag() ?>
      <?= javascript_include_tag() ?>
</head>
<body>
	 @section('sidebar')
            <div class="row">
            	<div class="col-sm-offset-1 col-sm-10 col-sm-offset-1">
					<a class="btn btn-small btn-primary" href="{{ URL::to('posts/create') }}">Create new post</a>
				</div>
            </div>
        @show

        <div class="container">
            @yield('content')
        </div>
</body>
</html>