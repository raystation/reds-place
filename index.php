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
	<?php 
	//AIzaSyCAliTCzmXdY8zpA6cJgub-7eTIZtSyDog
	?>
</section>

<header class="container">
	<section class="sixteen columns">
	<img src="img/reds-place-horizontal.svg" class="title desktop" alt="">
	<img src="img/reds-place-stacked.svg" class="title mobile" alt="">
	</section>
</header>

<section class="container">
	
	<div class="ten columns">
		IT OFFICIAL! RED'S PLACE is NOW SERVING Draft Beer. The First in Chinatown to do so.

		MENU
		<?php 
			// $result = fetchData("https://api.instagram.com/v1/users/57d6320085fe4aca9f0e4091c8369040/media/recent/?access_token=7aa5b6febeed4117a1c1926b12de388e");
			// $result = json_decode($result);
			// var_dump($result);
			// foreach ($result->data as $post) {
			  // echo $post;
			// }
			// https://api.instagram.com/oauth/authorize/?client_id=57d6320085fe4aca9f0e4091c8369040&redirect_uri=REDIRECT-URI&response_type=code
		?>

	</div>

	<div class="six columns side-column">
		
		<h3>Draft Beer</h3>
		<?php html_comma_list( list_draftbeer() );?>	
		
		<h3>Bottled Beer</h3>
		<?php html_comma_list( list_bottledbeer() );?>
	
	</div>

</section>

<footer class="full footer">
	<div class="container">
		<div class="sixteen columns">
			<li>www.facebook.com/redsplacesf</li>
			<li>www.twitter.com/redsplacesf</li>
			<li>672 Jackson Street, San Francisco, CA. 94133 | 415.956.4490</li>
			<li>www.redsplacesf.com | Copyright © <?php $date=get_date();echo $date["year"];?></li>
		</div>
	</div>
</footer>


<!-- End Document
================================================== -->
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</body>
</html>