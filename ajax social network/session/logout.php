<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logged Out</title>
</head>
<body>
    <?php
    session_destroy();
    header("Location: index.php");
			die();
    ?>
    <p>You have successfully logged out</p>
    <a href="index.php">Login</a>
</body>
</html>