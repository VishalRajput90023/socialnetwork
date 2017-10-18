
<?php 
session_start();
$connection = mysqli_connect("mysql.hostinger.in","u298484267_vishu","vishal90023") or die("Couldn't connect to server");
$db = mysqli_select_db($connection,"u298484267_vishu");

$result = 0;
 $query =mysqli_query($connection,"SELECT * from vishal WHERE usernamesignup = '$_POST[usernamesignup]' AND passwordsignup='$_POST[passwordsignup]'");
    $result = mysqli_num_rows($query);
if($result==1)
{ $_SESSION['usernamesignup'] = $_POST['usernamesignup'];
    echo header("Location:users.php");
}
 
else{
    echo header("Location:loginno.php");
}

   
?>