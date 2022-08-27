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

$sql = "SELECT status, username FROM post INNER JOIN account ON post.user=account.id ORDER BY post.id DESC;";

$result = mysqli_query($conn, $sql);

$posts = new SimpleXMLElement('<POSTS/>');

if (mysqli_num_rows($result) > 0) {
	//output data in xml format
	while($row = mysqli_fetch_assoc($result)) {
		
		$post= $posts->addChild('POST');
		$post->addChild('USER', $row['username']);
		$post->addChild('STATUS',  $row['status'] );
	}	
	Header('Content-type: text/xml');
echo($posts->asXML());
} 
else {
	echo"";
}
mysqli_close($conn);
?>
