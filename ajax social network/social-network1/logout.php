<?php
session_start();

session_destroy();
//expire the cookie as well
setcookie("user_id", "", time()-1); 
header("Location: login.html");

die();
?>
    