<html>
<head>
	<title>Blog Employee Profile</title>
</head>
<body>
 
	<header>
 
		<h2>Blog Employee Profile</h2>
		<nav>
			<a href="/blog">HOME</a>
			|
			<a href="/blog/about">ABOUT</a>
			|
			<a href="/blog/contact">CONTACT</a>
		</nav>
	</header>
	<hr/>
	<br/>
	<br/>
 
	<!-- bagian judul halaman blog -->
	<h3> @yield('judul_halaman') </h3>
 
 
	<!-- bagian konten blog -->
	@yield('konten')
 
 
	<br/>
	<br/>
	<hr/>
	<footer>
		<p>&copy; <a href="http://www.employeeprofile.com">www.employeeprofile.com</a>. 2018 - 2019</p>
	</footer>
 
</body>
</html>