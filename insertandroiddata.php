<?php
$connection = mysql_connect("mysql.hostinger.in","u298484267_vishu","vishal90023") or die("Couldn't connect to server");
$db = mysql_select_db("u298484267_vishu",$connection);
 
$username = $_POST['usernamesignup'];
$password = $_POST['passwordsignup'];
 $_SESSION['usernamesignup'] = $_POST['usernamesignup'];
mysql_query("Insert into vishal(usernamesignup,passwordsignup)VALUES('$username','$password')");

}
?>
