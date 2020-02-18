<!DOCTYPE html>
<html>
<head>
	<title>@yield('title') </title>
</head>
<body>
	<nav>
		<ul>
			<li><a href="/">Home</a></li>
			<li><a href="/about">about</a></li>
			<li><a href="/contact">contact</a></li>
			<li><a href="/portafolio">portafolio</a></li>
		</ul>
	</nav>
	@yield('content')
</body>
</html>