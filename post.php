<?php
$connection = mysqli_connect("mysql.hostinger.in","u298484267_vishu","vishal90023") or die("Couldn't connect to server");
$db = mysqli_select_db($connection,"u298484267_vishu");

 session_start();

$username = $_SESSION['usernamesignup'];
$status =$_POST['status'];
mysqli_query($connection,"INSERT into post2(usernamesignup,status) VALUES('$_SESSION[usernamesignup]','$_POST[status]')");
 header('location:users.php');
 ?>