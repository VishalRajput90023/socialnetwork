<?php
session_start();
$connection = mysqli_connect("mysql.hostinger.in","u298484267_vishu","vishal90023") or die("Couldn't connect to server");
$db = mysqli_select_db($connection,"u298484267_vishu");

  $qurey = mysqli_query($connection,"SELECT friend FROM people where confirmed='Confirm' && usernamesignup='$_SESSION[usernamesignup]'");
  while($we = mysqli_fetch_assoc($qurey)){
    $queye =mysqli_query($connection,"SELECT image,online from vishal WHERE usernamesignup = '$we[friend]'");
    while($ro = mysqli_fetch_assoc($queye)){

  if($ro['image']==null)
    {   echo '<img src="logo.png" height=25px width=25px >';
       }
    else{
         echo '<img src="data:image/jpeg;base64,'.base64_encode( $ro['image']).'" height=25px width=25px />';

   }echo '<font color=blue><b>';
  echo $we['friend'];echo '</b></font>';
  if($ro['online'] == 'true'){
    echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src=online.jpg height=8px width=8px/>';
  }else{
    echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src=offline.jpg height=8px width=8px/>';}

  }
echo '<br/>';
echo '<hr/>';
}
 ?>
