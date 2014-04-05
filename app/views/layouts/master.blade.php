<!DOCTYPE html>
<html lang="en">
<head>
	<title>Online resource portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
       <?= stylesheet_link_tag() ?>
       {{ HTML::style("packages/fontawesome/css/font-awesome.min.css")}}

      <?= javascript_include_tag() ?>
</head>
<body>
    @section('header')
        @include('layouts.header')
    @show
    <div id="container" class="container">
        @yield('content')
    </div>
</body>
</html>