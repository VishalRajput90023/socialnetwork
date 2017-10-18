<?php session_start();
$connection = mysqli_connect("mysql.hostinger.in","u298484267_vishu","vishal90023") or die("Couldn't connect to server");
$db = mysqli_select_db($connection,"u298484267_vishu");
$username= $_SESSION['usernamesignup'];$count = 0;
$r = mysqli_query($connection,"SELECT * From people where usernamesignup='$username'");
while($row = mysqli_fetch_assoc($r)){if($row['requested']!=null){
   if($row['confirmed']!=null && $row['id']== 0){
      $count++;
    }
}if($count!=0){echo '<div class=notifier><font color=blue>';
echo $count;echo '</font></div>';
}}
   ?>
