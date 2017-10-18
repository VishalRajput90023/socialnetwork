<?php
session_start();
$connection = mysql_connect("mysql.hostinger.in","u298484267_vishu","vishal90023") or die("Couldn't connect to server");
$db = mysql_select_db("u298484267_vishu",$connection);

$friend = $_POST['connect'];
$username = $_SESSION['usernamesignup'];

mysql_query("Insert into people(usernamesignup,requested,friend)VALUES('$username','requested','$friend')");
mysql_query("Insert into people(usernamesignup,friend)VALUES('$friend','$username')");




echo header("Location:users.php");

?>
