<!DOCTYPE html>
<html lang="en">
<head>
	<title>Courses</title>
	<meta charset="UTF-8">
		
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src=""></script>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	

	<style type="text/css">
		* {
	padding:0;
	margin: 0:;
}

#wrapper {

	width: 750px;
	margin: 20px auto;
	border: 1px solid #ddd;
	padding: 30px;
	border-radius: 6px;
	min-height: 200px;
	/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#fefcfe+26,f1eff1+100 */
	background: rgb(254,252,254); /* Old browsers */
	background: -moz-linear-gradient(top, rgba(254,252,254,1) 26%, rgba(241,239,241,1) 100%); /* FF3.6-15 */
	background: -webkit-linear-gradient(top, rgba(254,252,254,1) 26%,rgba(241,239,241,1) 100%); /* Chrome10-25,Safari5.1-6 */
	background: linear-gradient(to bottom, rgba(254,252,254,1) 26%,rgba(241,239,241,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fefcfe', endColorstr='#f1eff1',GradientType=0 ); /* IE6-9 */

}

h1{
	text-align: center;
	margin-bottom: 50px !important;
	margin-top: 0px !important;
}
	

label {
	width: 100px;
	vertical-align: top;
	margin-bottom: 20px;
}

input.form-control {
	width: 290px !important;
	display: inline-block !important;
}
textarea {
	width: 290px !important;
	display: inline-block !important;
	min-height: 100px;
}


table th, table td {
	padding-left: 10px;
}
	
	
#submit-button {
	/*float: right;*/
	margin-top: 10px;
	width: 85px;
	margin-left: 310px;
}
.clr {
	clear: both;
}


	</style>
</head>
<body>
	<div id="wrapper">
		<h1>Courses</h1>

		<h4>Add a new Course:</h4>

			<form class="form-group" action="add" method="post">
				<label>Name: </label>	
				<input type="text" name="course_name" class="form-control">
				<br/>
				<label>Description: </label>	
				<textarea type="text" name="description" class="form-control"></textarea>

				<div class="clr"></div>

			  	<input type="submit" class="btn btn-default" value="Add" id="submit-button">

			  	<div class="clr"></div>
			</form>	


			<table cellspacing="0" cellpadding="0" border="1" width="100%" bordercolor="#999">
				<tr>
					<th>Courses</th>
					<th>Description</th>
					<th>Date Added</th>
					<th>Action</th>
				</tr>
			<?php
					foreach ($allcourses as $course) { ?>
						
				<tr>
					<td><?= $course['course_name']  ?></td>
					<td><?= $course['description']  ?></td>
					<td><?= $course['created_at']  ?></td>
					<td><a href="#">Remove Course</a></td>
				</tr>	

			<?php } ?>

				
				
				</table>



			

	</div>
</body>
</html>