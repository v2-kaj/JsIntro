<!DOCTYPE html>

<html>
<head>
	<title>Process Student Registration</title>
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

		$username = $_POST["username"];	
		$password = $_POST["password"];
		$q = "SELECT id FROM account WHERE username='" .$username."'";
		$result = mysqli_query($conn, $q);
		if(mysqli_num_rows($result) > 0) {
			echo "Username is taken";
		}
		else{

		$sql = "INSERT INTO account (username, password) VALUES ('$username', '$password')";
		
		//Execute the sql
		if (mysqli_query($conn, $sql)) {
			echo "<div class='row'>";
			echo "<div class='col-4'><div>";
			echo "<div class='col-4'>";
 		 	echo "<p>Your account has been created successfully<p>";
			echo "<a href='index.php'>Login</a>";
			echo "</div>";
			echo "<div class='col-4'><div>";
			echo "</div>";
		} 
		else {
			echo "<div class='row'>";
			echo "<div class='col-4'><div>";
			echo "<div class='col-4'>";
  			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			echo "</div>";
			echo "<div class='col-4'><div>";
			echo "</div>";
			}
		}
		

		mysqli_close($conn);
		
	?>




</body>
</html>