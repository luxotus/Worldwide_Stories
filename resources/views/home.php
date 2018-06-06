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
		<script src="<?php print asset('js/scrollreveal.min.js'); ?>"></script>
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
				<a href="https://play.google.com/store/apps/details?id=com.luxotus.worldwidestories" class="col-md-4 play-icon-holder">
					<img src="<?php print asset('images/icons/play_icon.png'); ?>">
				</a>
			</div>
			<div class="row feature-section feature-countries">
				<div class="col-sm-6 image-section left-section text-center">
					<img src="<?php print asset('images/screens/countries_phone.png'); ?>">
				</div>
				<div class="col-sm-6 text-section right-section">
					<div class="text-center title-icon-section">
						<span class="icon-globe"></span>
						<h2>Countries</h2>
					</div>
					<p>So you probably have a favorite author in your country but do you have one in spain or france or russia? Didn't think so, hence why you should use our app. Explore the minds of authors worldwide all in one place.</p>
				</div>
			</div>
			<div class="row feature-section feature-stories">
				<div class="col-sm-6 text-section left-section">
					<div class="text-center title-icon-section">
						<span class="icon-book"></span>
						<h2>Stories</h2>
					</div>
					<p>From Love at first sight to scary stories from the past, we have it all. Get lost in narratives of vibrant characters that could spark the interest of just about any reader. </p>
				</div>
				<div class="col-sm-6 image-section right-section">
					<img src="<?php print asset('images/screens/story_phone.png'); ?>">
				</div>
			</div>
			<div class="row feature-section feature-bookmarks">
				<div class="col-sm-6 image-section left-section text-center">
					<img src="<?php print asset('images/screens/bookmarks_phone.png'); ?>">
				</div>
				<div class="col-sm-6 text-section right-section">
					<div class="text-center title-icon-section">
						<span class="icon-bookmark"></span>
						<h2>Bookmarking</h2>
					</div>
					<p>We know the stories can be long and you might not have the time to read it all in one sitting. So we created a feature that will allow you to save your position in the story and come back to it when ever you like. Making it much easier for you to finish stories on your own pace which is missing from 99% of story apps.</p>
				</div>
			</div>
			<div class="row feature-section feature-share">
				<div class="col-sm-6 text-section left-section">
					<div class="text-center title-icon-section">
						<span class="icon-share"></span>
						<h2>Share</h2>
					</div>
					<p>So you just finished your new favorite story and want to tell a friend about it. We provided you with a easy way to share stories using sms and your favorite social media platforms. </p>
				</div>
				<div class="col-sm-6 image-section right-section">
					<img src="<?php print asset('images/screens/share_phone.png'); ?>">
				</div>
			</div>
			<div class="row newsletter-section">
				<div class="tint col-12">
					<div class="col-1 col-sm-3"></div>
					<div class="col-10 col-sm-6 middle-section text-center">
						<p class="download-message">Read stories from all of the world. Worldwide stories is the new app for android that helps you explore fascinating stories all in one place.</p>
						<a href="https://play.google.com/store/apps/details?id=com.luxotus.worldwidestories">
							<img src="<?php print asset('images/icons/play_icon.png'); ?>">
						</a>
						<div class="panel panel-default">
							<div class="panel-body">
								<p class="newsletter-message text-center">Get the latest news from Luxotus delivered straight to your inbox. Join our mailing list today.</p>
								<form action="#" id="newsletter">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" class="form-control" id="first-name" name="first-name" placeholder="First Name">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" class="form-control" id="last-name" name="last-name" placeholder="Last Name">
											</div>
										</div>
										<div class="col-sm-12">
											<div class="form-group">
												<input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required>
											</div>
										</div>
									</div>
									<button type="submit" class="btn btn-danger">Subscribe</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row footer">
				<div class="col-sm-2">
					<p>&copy; 2018 Luxotus</p>
				</div>
				<div class="col-sm-8"></div>
				<div class="col-sm-2 text-right">
					<a href="mailto:example@email.com">Contact</a>
				</div>
			</div>
		</div>
	</body>
</html>