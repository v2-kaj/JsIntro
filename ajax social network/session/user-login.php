<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User Login</title>
	<link rel="stylesheet" href="styles.css"/>
</head>
<body>
	<?php
		$servername = "localhost";	
		$username = "root";
		$password = "";
		$dbname = "social_network";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
  			die("Connection failed: " . $conn->connect_error);
		}

		$username = mysqli_real_escape_string($conn, $_POST["username"]);
		$password = mysqli_real_escape_string($conn, $_POST["password"]);
		
		$sql = "SELECT * FROM account WHERE username='$username' && password='$password'";
		echo "<div class='row'>";
		$result = mysqli_query($conn, $sql);
		echo "<div class='col-2'></div>";
		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result);
			echo "<div class='col-8'>";
			$_SESSION["user_id"] =  $row["id"];
			header("Location: posts.php");
			die();
			echo "</div>";
			echo "<div class='col-2'><div>";
		} 
		else {
			echo "<div class='col-4'><div>";
			echo "<div class='col-4'>";
  			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			echo "</div>";
			echo "<div class='col-4'><div>";
		}
		echo "</div>";
		mysqli_close($conn);
		
	?>

</body>
</html>