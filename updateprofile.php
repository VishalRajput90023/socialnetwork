<?php
session_start();
$connection = mysqli_connect("mysql.hostinger.in","u298484267_vishu","vishal90023") or die("Couldn't connect to server");
$db = mysqli_select_db($connection,"u298484267_vishu");



mysqli_query($connection,"UPDATE vishal set name='$_POST[name]',
                   website='$_POST[website]',
                   bio='$_POST[bio]',
                   gender='$_POST[gender]'

 where usernamesignup='$_SESSION[usernamesignup]'");
header('Location:users.php');
?>