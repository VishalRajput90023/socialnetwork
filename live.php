<?php session_start();
$connection = mysqli_connect("mysql.hostinger.in","u298484267_vishu","vishal90023") or die("Couldn't connect to server");
$db = mysqli_select_db($connection,"u298484267_vishu");


if(isset($_SESSION['friend'])){
$username = $_SESSION['usernamesignup'];
$friend = $_SESSION['friend'];
$r = mysqli_query($connection,"SELECT * FROM messages where ((usernamesignup='$username' && friend = '$friend')||(usernamesignup='$friend' && friend='$username'))");
while($rd = mysqli_fetch_assoc($r)){
if($rd['usernamesignup']==$username){
echo '<br><div class=totto ><p align=center><font color=green><b>';
echo $rd['message'];
echo '</font>';echo '</div></b></div></p>';
}
else
{   
    echo '<div align=right>';
    echo '<br/><div class=lotto ><p align=center><b><font color=blue>';

echo $rd['message'];echo '</div>';
echo '</font>';echo '</div></b><br></p>';


}
}
}
 ?>