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

$username = mysqli_real_escape_string($conn, $_POST["username"]);
$password = mysqli_real_escape_string($conn, $_POST["password"]);

$sql = "SELECT * FROM account WHERE username='$username' && password='$password'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	$row = mysqli_fetch_assoc($result);
	//login the user
	$_SESSION["user_id"] =  $row["id"];
	setcookie("user_id", $row["id"], time()+(3600*24)*30); 
	//After successful login redirect the user to the posts page
	header("Location: profile.php");
	die();

} 
else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);	
}
mysqli_close($conn);

?>

