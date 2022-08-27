<?php
// Start the session
session_start();

if(!isset($_SESSION["user_id"])){
	//redirect the user to their profile page
    header("location: login.html");
    exit;
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css"/>
    <title>My Profile</title>
  <script src="profile.js"></script>
</head>
<body>
<div class='row'>
  <div class='col-2'></div>
  <div class='col-8'>
  <a href="logout.php">Logout</a>  
  <h1>Update Your Status</h1>
    <form id="updateStatusForm">
      <input type='text' name='status' id='status' required="required"/>
      <br/>
      <br/>
      <input type='submit' value='Update Status'>
    </form> 
    <h1>All Posts</h1>
    <div id="posts"></div> 
    </div>
  <div class='col-2'></div>
</div>
</body>
</html>