<?php
// Start the session
session_start();

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
	echo "Status updated";
} 
else {
	echo "Sorry couldn't update your status";
}

mysqli_close($conn);

?>

