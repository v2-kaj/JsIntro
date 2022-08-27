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
			
		$sql = "SELECT status, username FROM post INNER JOIN account ON post.user=account.id ORDER BY post.id DESC;";
		echo "<div class='row'>";
		$result = mysqli_query($conn, $sql);
		echo "<div class='col-2'></div>";
		if (mysqli_num_rows($result) > 0) {
			echo "<div class='col-8'>";
			echo "<a href='profile.php'>Update Status</a>";
			echo "<br/>";
			echo "<a href='logout.php'>Logout</a>";
			echo "<br/>";
			echo "<br/>";
			// output data in divs
  			while($row = mysqli_fetch_assoc($result)) {
				echo "<div class='status'>";
    					echo "User: ".$row['username'];
					echo "<hr>";
					echo $row['status']; 
					echo "<br>";
					echo "<br>";
				echo "</div>";
				
  			}
			
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