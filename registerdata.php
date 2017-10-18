<?php
$connection = mysql_connect("mysql.hostinger.in","u298484267_vishu","vishal90023") or die("Couldn't connect to server");
$db = mysql_select_db("u298484267_vishu",$connection);
 session_start();
$username = $_POST['usernamesignup'];
$password = $_POST['passwordsignup'];
 $_SESSION['usernamesignup'] = $_POST['usernamesignup'];
$query = mysql_query("select usernamesignup from vishal where usernamesignup='$username'");
if ( preg_match('/\s/',$username) ){
    echo header('Location:registerno.php');
}else

if(mysql_num_rows($query)>0){
  echo header('location:alreadytaken.php');
}
else{mysql_query("Insert into vishal(usernamesignup,passwordsignup)VALUES('$username','$password')");
$_SESSION['usernamesignup'] = $_POST['usernamesignup'];
echo header("Location:users.php");
}
?>
