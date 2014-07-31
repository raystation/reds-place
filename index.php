<?php require "functions.php";?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Red's Place</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="css/style.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

</head>
<body>

	<!-- Primary Page Layout
	================================================== -->

<section class="full">
	<!-- <img src="http://placehold.it/400x100&text=map" class="scale-with-grid" alt="map to Red's"> -->
	<img class="scale-with-grid" src="http://maps.googleapis.com/maps/api/staticmap?center=672+Jackson+Street,94133&zoom=13&size=2048x100&scale=2&key=AIzaSyCAliTCzmXdY8zpA6cJgub-7eTIZtSyDog
" alt="">
</section>

<header class="container">
	<section class="sixteen columns">
	<?php happyhour_on("<img class='happy-hour' src='img/happyhour.gif'>")?>
	<img src="img/reds-place-horizontal.svg" class="title desktop" alt="">
	<img src="img/reds-place-stacked.svg" class="title mobile" alt="">
	</section>
</header>

<section class="container mobile">
	<?php 
		reds_open();
		happyhour_on();
	?>
 
	<p><a href="https://www.google.com/maps/place/Red's+Place/@37.796048,-122.406529,17z/data=!3m1!4b1!4m2!3m1!1s0x808580f4a33b0b0b:0xe6ef4af1b6db4808">Google Maps</a></p>
	
	<p><a href="http://maps.apple.com/?q=672+Jackson+St+94133">Apple Maps</a></p>
</section>

<section class="container desktop">
	
	<div class="ten columns add-bottom">
		IT OFFICIAL! RED'S PLACE is NOW SERVING Draft Beer. The First in Chinatown to do so.

		MENU

	</div>

	<div class="six columns side-column">
		
		<h3>Draft Beer</h3>
		<?php html_comma_list( getlist(draftbeer) );?>	
		
		<h3>Bottled Beer</h3>
		<?php html_comma_list( getlist(bottledbeer) );?>
	
	</div>

</section>

<footer class="full footer">
	<div class="container">
		<div class="sixteen columns">
			<li class="social"><img src="img/icon/fb_icon.svg" alt=""><a href="facebook.com/redsplacesf">redsplacesf</a>
			<li class="social"><img src="img/icon/tw_icon.svg" alt=""><a href="twitter.com/redsplacesf">redsplacesf</a>

			<li>twitter.com/redsplacesf
			<li>672 Jackson Street, San Francisco, CA. 94133 | 415.956.4490
			<li>redsplacesf.com | Copyright © <?php $date=get_date();echo $date["year"];?>
		</div>
	</div>
</footer>

<!-- End Document
================================================== -->
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</body>
</html>