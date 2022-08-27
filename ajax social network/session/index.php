<?php
// Start the session
session_start();

//Check if a user is logged in
if(isset($_SESSION["logged_in"])){
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
				echo "<div id='header' class='col-12'><h1>Hello and Welcome to My Site<h1></div>";
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
				echo "</form>";
				echo "<br>";
				echo "<a href='register.php'>Create an Account</a>";
				echo "</div>";
				echo "<div class='col-4'></div>";
			echo "</div>";
		?>
		

	</body>
</html>