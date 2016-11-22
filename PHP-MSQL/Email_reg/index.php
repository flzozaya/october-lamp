<?php

require_once('email_users.php');
	

	if(isset($_GET['error']) && $_GET['error'] === "invalid")
{
	 $error = "You entered an invalid email";
}	

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Email Validation with DB</title>
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

	width: 600px;
	margin: 20px auto;
	border: 1px solid #ddd;
	padding: 30px;
	border-radius: 6px;
	min-height: 250px;
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


	

.form-group {

	/*text-align: center;*/
	clear: both;
	margin-bottom: 60px;
}	


	
	
#submit-button {
	float: right;
	margin-top: 10px;
	width: 85px;
}
.clr {
	clear: both;
}


	</style>
</head>
<body>
	<div id="wrapper">
		<h1>Email Validation with DB</h1>
			<form class="form-group" action="process.php" method="post">
				<p>Enter your email address:</p>
				<input type="text" name="email" class="form-control" placeholder="Enter your email">

				<input type="submit" class="btn btn-default" value="Submit" id="submit-button">
				<div cla="clr"></div>
			</form>	
			<div>
				<p><?php
						
					if(isset($error)) 

					{
						echo $error; 
					
					} else {
						$email_data = fetch_all("SELECT email FROM user_emails");
						$dates = fetch_all("SELECT created_at FROM user_emails");
						//var_dump($email_data);
						
						for($i=0, $j=0; $i < count($email_data), $j < count($dates); $i++, $j++)
						{

							$myEmails = $email_data[$i]['email'];
							$myDate =  $dates[$j]['created_at'];
							echo $myEmails . " " . $myDate . "<br/>"; 
						}

					}

						/*foreach($email_data, $dates  as $key, $key => $emails, as $key => $date){
							$myEmails =  $emails['email'];
							$myDate =  $date['created_at'];
							echo $myEmails . " " . $myDate . "<br/>"; 
						}*/

						/*foreach($dates  as $key => $date){
							$myDate =  $date['created_at'];
							echo $myDate . " " . "<br/>";
						}*/

						//echo $myEmails . " " . $myDate . "<br/>"; 

					?>
				</p>
				
			</div>
	</div>


</body>
</html>







