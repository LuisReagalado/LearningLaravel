<!DOCTYPE html>
<html>
<head>
	<title>@yield('title') </title>
	<style>
		.active a{
			color: green;
			text-decoration: none;
		}
	</style>
</head>
<body>
	@include('partials/nav')
	@include('partials.sessions-status')
	@yield('content')

</body>
</html>