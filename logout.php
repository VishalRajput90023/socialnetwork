<?php

// Inialize session
session_start();

// Delete certain session

// Delete all session variables
// session_destroy();

// Jump to login page

 $connection = mysqli_connect("mysql.hostinger.in","u298484267_vishu","vishal90023") or die("Couldn't connect to server");
 $db = mysqli_select_db($connection,"u298484267_vishu");
$qrty = mysqli_query($connection,"UPDATE vishal set online='false' where usernamesignup='$_SESSION[usernamesignup]'");
unset($_SESSION['usernamesignup']);
 echo header('Location: index.php');
?>
