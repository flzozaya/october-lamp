<!DOCTYPE html>
<html lang="en">
<head>
	<title>Edit Product | Semi Restful Route Demo</title>
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
		<h1>Edit Product <?= $edit_pd_row['id'] ?></h1>
			
			<form class="form-group" action="/Products/update/<?= $edit_pd_row['id'] ?>" method="post">
				<fieldset>
					<label>Name:</label>
					<input type="text" name="updated_product_name" class="form-control form-txt-input" value="<?= $edit_pd_row['name'] ?>">
				</fieldset>
				<fieldset>
					<label>Description:</label>
					<input type="text" name="updated_product_description" class="form-control form-txt-input" value="<?= $edit_pd_row['description'] ?>">
				</fieldset>
				<fieldset>
					<label>Price:</label>
					<input type="text" name="updated_product_price" class="form-control form-txt-input" value="<?= $edit_pd_row['price'] ?>">
				</fieldset>
			  	
			  	<input type="submit" class="btn btn-default" value="Update" id="submit-button">
			  	
			  	<div class="clr"></div>

			</form>
			
			<div class="bottom-menu"><a href="/Products/show/<?= $edit_pd_row['id'] ?>">Show</a> | <a href="/">Back</a></div>
	</div>
</body>
</html>