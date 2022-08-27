<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css"/>
    <title>My Profile</title>
</head>
<body>

    <?php
    echo "<div class='row'>";
    echo "<div class='col-2'></div>";
    echo "<div class='col-8'>";
    if(isset($_SESSION["user_id"])) {
        echo "<h1>Update Your Status</h1>";
        echo "<form action='update-status.php' method='post'>";
        echo "<input type='text' name='status' id='post'/>";
        echo "<br/>";
        echo "<br/>";
        echo "<input type='submit' value='Update Status'>";
        echo "</form>";
      } else {
        echo "<p>You are not logged in so you cant update your status</p>";
        echo "<a href='index.php'>Login</a>";
      }
       
        echo "</div>";
    echo "<div class='col-2'></div>";
    ?>
    
</body>
</html>