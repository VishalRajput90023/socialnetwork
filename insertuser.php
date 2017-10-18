<?php 

define('HOST','fdb15.awardspace.net');
define('USER','2432011_vishal');
define('PASS','vishal90023');
define('DB','2432011_vishal');

$con = mysql_connect(HOST,USER,PASS,DB);

$name = $_POST['username'];
$address = $_POST['password'];

$sql = mysql_query("insert into users(username,password) VALUES('$name','$address')");
if(mysqli_query($con,$sql))
{
	echo 'success';
}
else
{
	echo 'failure';
}

mysqli_close($con);
?>