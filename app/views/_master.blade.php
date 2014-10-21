<!DOCTYPE html>
<html>
<head>

	<title>@yield('title','Developers Best Friends')</title>
	<meta charset='utf-8'>

	<link href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/flatly/bootstrap.min.css" rel="stylesheet">
	<link rel='stylesheet' href='/css/best-friend.css' type='text/css'>

	@yield('head')

	
</head>
<body>

	<a href='/'><img class='logo' src='/images/genie-lamp.jpg' alt='lamp'></a>

<div class="nav">
	<nav>
		<ul class="navUl">
			<li><a href='/user'>Generate Random Users</a></li>
			<li><a href='/text'>Generate Random Text</a></li>
		</ul>
	</nav>
</div>	
	@yield('content')

	@yield('body')
	
</body>
</html>