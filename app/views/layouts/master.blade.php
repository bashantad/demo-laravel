<!DOCTYPE html>
<html>
<head>
	<title>Online resource portal</title>
	<link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.min.css">
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