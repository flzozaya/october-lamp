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
			<h3>Book, </h3>

			<ul>
				<li><a href="/">Home</a></li>
				<li><a href="logout">Logout</a></li>
			</ul>
			<div class="clr"></div>	
		</div>

		<div id="main">

			<div id="book-review">
				<h5>Author: </h5>

				<h4>Reviews:</h4>
				<div class="review">

					<span class="rating">Rating:</span>

					<p class="user-comment"><a href="#">User</a> says: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras volutpat dolor vitae libero porttitor, non cursus tortor lacinia. Integer bibendum sem vitae metus luctus finibus.</p>

					<span class="posted-date">Posted Date</span>
				</div>
		

				<a href="delete" class="delete-review">Delete this Review</a>
			</div>

			<div id="add-review">
				<h4>Add a Review:</h4>
					
				<form action="review" method="post">
					<textarea class="form-control">

					</textarea>

					<label>Rating: 
						<select>
							<option></option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select> 
						stars</label>	
					
					<div class="clr"></div>
					<input type="submit" class="btn btn-default" value="Submit" id="submit-button">
					<div class="clr"></div>

				</form>
			</div>

			<div class="clr"></div>

		</div>


			

	</div>
</body>
</html>