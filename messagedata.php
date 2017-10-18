<?php session_start();
$connection = mysqli_connect("mysql.hostinger.in","u298484267_vishu","vishal90023") or die("Couldn't connect to server");
$db = mysqli_select_db($connection,"u298484267_vishu");

 $username = $_SESSION['usernamesignup'];
$friend = $_POST['submit'];
$message = $_POST['message'];

$u = "false";
$r= "true";
  mysqli_query($connection,"Insert into messages(usernamesignup,message,friend)VALUES('$username','$message','$friend')");

if(isset($_SESSION['friend'])){
$username = $_SESSION['usernamesignup'];
$r = mysqli_query($connection,"SELECT * FROM messages");
while($rd = mysqli_fetch_assoc($r)){
if($rd['usernamesignup']==$username){
echo '<br><div class=totto ><font color=green><b>';
echo $rd['message'];
echo '</font>';echo '</div></b>';
}
else{echo '<br/><div class=lotto ><b><font color=blue>';
echo '<div align=right>';
echo $rd['message'];echo '</div>';
echo '</font>';echo '</div></b><br>';


}
}

 

}


 ?>

 