<!DOCTYPE html>
<html lang="en">
<head>
   <title>Book Revies | Users</title>
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
   <div id="wrapper" class="users-wrapper">
      <div class="top-bar">
        <h3></h3>

        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="add">Add Book & Review</a></li>
          <li><a href="logout">Logout</a></li>
        </ul>
      <div class="clr"></div> 
    </div>


       <div class="head">
           <h3>User Alias: Jessie</h3>
           <p>Name: Jessie Jamie</p>
           <p>Email: jessie@yahoo.com</p>
           <p>Total Reviews: </p>
       </div>

       <div class="user-box">
           <h5>Posted Reviews on the following Books</h5>
           <ul>
               <li><a href="#">Divergent</a></li>
               <li><a href="#">The vompire Chronicles</a></li>
               <li><a href="#">The Life of Pie</a></li>
           </ul>
       </div>
       <div class="clr"></div>
   </div>
</body>
</html>