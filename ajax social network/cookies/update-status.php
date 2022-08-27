<?php
// Start the session
session_start();
?>
<!DOCTYPE html>

<html>
<head>
	<title>Process Student Registration</title>
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

		$user = $_SESSION["user_id"];	
		echo $user;
		$status = $_POST["status"];	
		
		$sql = "INSERT INTO post (status, user) VALUES ('$status', '$user')";
		
		//Execute the sql
		if (mysqli_query($conn, $sql)) {
 		 	echo "<p>Status Updated</p>";
			echo "<a href='posts.php'>View all status</a>";
		} 
		else {
  			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		mysqli_close($conn);
		
	?>



</body>
</html>