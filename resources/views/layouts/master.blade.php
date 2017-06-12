<!DOCTYPE html>
<html>

<!-- Mirrored from www.craftedtheme.com/arne/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Apr 2017 09:18:55 GMT -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Arnè</title>
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
	<link href="{{mix('/css/build.css')}}" rel="stylesheet">
</head>
<body>
<div id="app">
	<!-- Latest compiled and minified JS -->
	<header>
		<div class="logo">
			<h3><a href="#">AP</a></h3>
		</div>
		@include("layouts.nav")
		<div class="social-icons">
			<ul>
				<li><a target="_BLANK" href="http://facebook.com/ashishpatel0720"><i class="fa fa-facebook"></i> </a></li>
				<li><a target="_BLANK" href="http://twitter.com/ashishpatel0720"><i class="fa fa-twitter"></i> </a></li>
				<li><a targ0et="_BLANK" href="http://github.com/ashishpatel0720"><i class="fa fa-github"></i> </a></li>
				<li><a target="_BLANK" href="http://linkedin.com/ashishpatel0720"><i class="fa fa-linkedin"></i> </a></li>
			</ul>
			<li><a target="_BLANK" href="http://linkedin.com/ashishpatel0720"><i class="fa fa-google-plus"></i> </a></li>
			<p>Copyright 2017 CraftedTheme <br> Made with Love from Us.</p>
		</div>
	</header>
	<div class="wrapper">
		<div class="about">
			<img src="images/23.jpg" alt="">
			<router-view></router-view
		</div>
	</div>
</div>

{{--TODO: why we have to use CDN here--}}
<script lang="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.js"></script>
<script src="{{mix('/js/build.js')}}"></script>
</body>
<!-- Mirrored from www.craftedtheme.com/arne/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Apr 2017 09:19:06 GMT -->
</html>