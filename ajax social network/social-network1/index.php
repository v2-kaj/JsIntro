<?php
// Start the session
session_start();

if(isset($_COOKIE["user_id"])) {
	//login in the user from a Cookie file
	$_SESSION["user_id"]= $_COOKIE["user_id"];
  }

//Check if a user is in session
if(isset($_SESSION["user_id"])){
	//redirect the user to their profile page
    header("location: profile.php");
    exit;
}
else{
	//User not logged in and so redirect them to the login page
	header("location: login.html");
    exit;
}

?>
