<?php 

session_start();
require_once('user_interests_connection.php');
// Add validations here to make sure information is correct
// if validations check out we insert the records into the database
$query = "INSERT INTO user_interests (id, color, file_path, created_at, updated_at)
          VALUES('{$_POST['music']}','{$_POST['color']}','{$file_path}', NOW(), NOW())";
          
if(run_mysql_query($query))
{
    $_SESSION['message'] = "New Interest has been added correctly!";
}
else
{
    $_SESSION['message'] = "Failed to add new Interest"; 
}
header('Location: index.php');

?>