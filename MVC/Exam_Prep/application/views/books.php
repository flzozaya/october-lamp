<!DOCTYPE html>
<html lang="en">
<head>
	<title>Book Revies | Welcome</title>
	<meta charset="UTF-8">
		
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src=""></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/main.css') ?>">

</head>
<body>
	<div id="wrapper">
		<div class="top-bar">
			<h3>Welcome, <?= $session_user ?></h3>

			<ul>
				<li><a href="/Books/add_book">Add Book & Review</a></li>
				<li><a href="/Users/logout">Logout</a></li>
			</ul>
			<div class="clr"></div>	
		</div>

		<div id="main">

			<div id="recent-book-reviews">
			<h4>Recent Book Reviews:</h4>
				<div class="book">
					<a href="#" class="recent-book">Recent Book Review 1</a>

					<span class="rating">Rating:</span>

					<p class="user-comment"><a href="#">User</a> says: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras volutpat dolor vitae libero porttitor, non cursus tortor lacinia. Integer bibendum sem vitae metus luctus finibus.</p>

					<span class="posted-date">Posted Date</span>
				</div>

				<div class="book">
					<a href="#" class="recent-book">Recent Book Review 1</a>

					<span class="rating">Rating:</span>

					<p class="user-comment"><a href="#">User</a> says: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras volutpat dolor vitae libero porttitor, non cursus tortor lacinia. Integer bibendum sem vitae metus luctus finibus.</p>

					<span class="posted-date">Posted Date</span>
				</div>

				<div class="book">
					<a href="#" class="recent-book">Recent Book Review 1</a>

					<span class="rating">Rating:</span>

					<p class="user-comment"><a href="#">User</a> says: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras volutpat dolor vitae libero porttitor, non cursus tortor lacinia. Integer bibendum sem vitae metus luctus finibus.</p>

					<span class="posted-date">Posted Date</span>
				</div>
			</div>

			<div id="other-books">
				<h4>Other Books with Reviews:</h4>
				<div>

				</div>

			</div>

			<div class="clr"></div>

		</div>


			

	</div>
</body>
</html>