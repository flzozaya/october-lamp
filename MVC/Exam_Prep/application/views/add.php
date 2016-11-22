<!DOCTYPE html>
<html lang="en">
<head>
	<title>Book Reviews | Welcome</title>
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
	<div id="add-book-wrapper">
		<div class="top-bar">
			<h3></h3>

			<ul>
				<li><a href="/Users/login">Home</a></li>
				<li><a href="/Users/logout">Logout</a></li>
			</ul>
			<div class="clr"></div>	
		</div>

		<div id="main">

			<h4>Add a Book Title & Review:</h4>

			<form id="add-book-review" action="/Books/add_new_book_and_review" method="post">
				<label for="">Book Title: <input name="book_title" type="text" class="form-control"></label>
				<label for="">Author: 
					<label for="" class="sub-label">Choose from the list: 
						<select name="book_author">
							<option></option>
							<option>Stephen King</option>
							<option>Author 1</option>
							<option>Author 2</option>
							<option>Author 3</option>
							<option>Author 4</option>
						</select>
					</label>
					<label for="" class="sub-label">Or add a new author: <input name="author" class="form-control" type="text"></label>

				<label for="">Review: <textarea name="review" class="form-control"></textarea></label>
				<label></label>
				<label>Rating: 
						<select name="rating">
							<option></option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select> 
				stars</label>


				<div class="clr"></div>
				<input type="submit" class="btn btn-default" value="Add" id="submit-button">
				
				<div class="clr"></div>

			</form>
		</div>


			

	</div>
</body>
</html>