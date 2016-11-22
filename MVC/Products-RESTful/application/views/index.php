<!DOCTYPE html>
<html lang="en">
<head>
	<title>All Products | Semi Restful Route Demo</title>
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
		<h1>Products</h1>
			
		<table width="100%" cellspacing="0" cellpadding="0" border="0">
			<tr>
				<th>Name</th>
				<th>Description</th>
				<th>Price</th>
				<th>Action</th>
			</tr>

			<?php 
				foreach ($allproducts as $product) { ?>
				<tr>
					<td><?= $product['name'] ?></td>
					<td><?= $product['description'] ?></td>
					<td><?= $product['price'] ?></td>
					<td align="center" class="action-td">
						<ul>
							<li><a href="Products/show/<?= $product['id']?>">Show</a></li>
							<li><a href="Products/edit/<?= $product['id']?>">Edit</a></li>
							<li><a href="Products/delete/<?= $product['id']?>" class="btn btn-default">Remove</a></li>
						</ul>
					</td>
				</tr>
				<?php } ?>
		</table>

		<div class="bottom-menu"><a href="Products/new" class="btn btn-default">Add a new Product</a></div>	
	</div>
</body>
</html>