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
        echo "<h1>Update Your Status</h1>";
        echo "<form action='update-status.php' method='post'>";
        echo "<input type='text' name='status' id='post'/>";
        echo "<br/>";
        echo "<br/>";
        echo "<input type='submit' value='Update Status'>";
        echo "</form>";
        echo "</div>";
    echo "<div class='col-2'></div>";
    ?>
    
</body>
</html>