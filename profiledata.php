<?php
session_start();
$connection = mysqli_connect("mysql.hostinger.in","u298484267_vishu","vishal90023") or die("Couldn't connect to server");
$db = mysqli_select_db($connection,"u298484267_vishu");

$img =addslashes(file_get_contents($_FILES["fileInput"]["tmp_name"]));
$s = $_SESSION['usernamesignup'];

mysqli_query($connection,"UPDATE vishal set image='$img' where usernamesignup='$_SESSION[usernamesignup]'");

header('location:users.php');

?>
