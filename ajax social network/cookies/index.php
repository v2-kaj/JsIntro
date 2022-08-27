<?php
// Start the session
session_start();

if(isset($_COOKIE["user_id"])) {
	//login in the user from a Cookie file
	$_SESSION["user_id"]= $_COOKIE["user_id"];
  }

//Check if a user is in session
if(isset($_SESSION["user_id"])){
    header("location: posts.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Login</title>
		<link rel="stylesheet" href="styles.css"/>
	</head>
	<body>
		
		<?php
			$servername = "localhost";	
			$username = "root";
			$password = "";

			// Create connection
			$conn = new mysqli($servername, $username, $password);

			// Check connection
			if ($conn->connect_error) {
  				die("Connection failed: " . $conn->connect_error);
			}
			echo "<div class='row'>";
				echo "<div id='header' class='col-12'><h1>The Social Network<h1></div>";
			echo "</div>";
			echo "<div class='row'>";
				echo "<div class='col-4'></div>";
				echo "<div class='col-4'>";
				echo "<h3>Login</h3>";
				echo "<form action='user-login.php' method='post'>";
				echo "<input type='text' name='username' placeholder='username'/>";
				echo "<br>";
				echo "<br>";
				echo "<input type='password' name='password' placeholder='password'/>";
				echo "<br>";
				echo "<br>";
				echo "<input type='submit' value='Login' placeholder='password'/>";
				echo "Remember Me";
				echo "<input type='checkbox' value='yes' name='rememberme'/>  ";
				echo "<input type='checkbox' value='No' name='rememberme'/>  ";
				echo "</form>";
				echo "<br>";
				echo "<a href='register.php'>Create an Account</a>";
				echo "</div>";
				echo "<div class='col-4'></div>";
			echo "</div>";
		?>
		

	</body>
</html>