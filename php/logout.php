<?php session_start(); 
session_unset();
session_destroy(); // destroy session
header("location:/index.php"); //to redirect back to "index.php" after logging out
exit();
?>