<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Home</title>

		<!-- Styles -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?php print asset('css/home.css'); ?>">


		<!-- Scripts -->
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
		<script src="<?php print asset('js/home.js'); ?>"></script>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row header">
				<div class="col-sm-12 title-section">
					<div class="text-center">
						<h1>Worldwide Stories</h2>
						<p>A new app from your friends at Luxotus.</p>
					</div>
					<a href="#" class="arrow-down-section">
						<div></div>
					</a>
				</div>
			</div>
			<div class="row app-download-section">
				<div class="col-md-8 text-right">
					<h3>Download it FREE (for a limited time) for your Android</h3>
				</div>
				<a href="#" class="col-md-4 play-icon-holder">
					<img src="<?php print asset('images/icons/play_icon.png'); ?>">
				</a>
			</div>
		</div>
	</body>
</html>