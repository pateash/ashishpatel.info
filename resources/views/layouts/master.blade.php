<!DOCTYPE html>
<html>

<!-- Mirrored from www.craftedtheme.com/arne/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Apr 2017 09:18:55 GMT -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Arnè</title>
	<link href="{{mix('/css/build.css')}}" rel="stylesheet">
</head>
<body>
<!-- Latest compiled and minified JS -->
</body>
<div id="app">
	<header>
		<div class="logo">
			<h3><a href="#">Arnè</a></h3>
		</div>
		@include("layouts.nav")
		<div class="social-icons">
			<ul>
				<li><a target="_BLANK" href="http://facebook.com/"><i class="fa fa-facebook"></i> </a></li>
				<li><a target="_BLANK" href="http://pinterest.com/"><i class="fa fa-pinterest"></i> </a></li>
				<li><a target="_BLANK" href="http://twitter.com/"><i class="fa fa-twitter"></i> </a></li>
				<li><a target="_BLANK" href="http://behance.com/"><i class="fa fa-behance"></i> </a></li>
				<li><a target="_BLANK" href="http://dribbble.com/"><i class="fa fa-dribbble"></i> </a></li>
			</ul>
			<p>Copyright 2017 CraftedTheme <br> Made with Love from Us.</p>
		</div>
	</header>
	<div class="wrapper">
		<div class="about">
			<img src="images/23.jpg" alt="">
			<div class="inner-item">
				<router-view></router-view>
			</div>
		</div>
	</div>
</div>

<script lang="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.js"></script>
<script src="{{mix('/js/build.js')}}"></script>
</body>
<!-- Mirrored from www.craftedtheme.com/arne/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Apr 2017 09:19:06 GMT -->
</html>