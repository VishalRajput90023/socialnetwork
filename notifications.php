<?php

// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['usernamesignup'])) {
header('Location:index.php');
}
$connection = mysqli_connect("mysql.hostinger.in","u298484267_vishu","vishal90023") or die("Couldn't connect to server");
$db = mysqli_select_db($connection,"u298484267_vishu");
$username = $_SESSION['usernamesignup'];

$qry = mysqli_query($connection,"SELECT * from people where usernamesignup='$username'");
while($e = mysqli_fetch_assoc($qry)){
if($e['requested']==null){
 $query = mysqli_query($connection,"UPDATE people set id=1 where usernamesignup= '$username'");}}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="icon"
      type="image/png"
      href="logo.png">
      <link rel="stylesheet" type="text/css" href="vis.css">
<title>Kokosocial-Simplified way to connect</title>
<style>
.container {
    overflow: hidden;
    background-color: blue;
    font-family: monospace;
}

.container a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    border-color:white;

}

.dropdown {
    float:left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 2px 2px;
    background-color: inherit;
}

.container a:hover, .dropdown:hover .dropbtn {
    background-color: skyblue;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: blue;
    padding: 12px 16px;
    text-decoration: none;
    display: block;             
    text-align: left;
}

.dropdown-content a:hover {
    background-color: skyblue;
    border-radius:4px;
    
}

.dropdown:hover .dropdown-content {
    display: block;
}
.notifier{
    display:block;
    background-color:white;
    border-radius:5px;
}
</style>
</head>
<body bgcolor="darkblue">
<script src="jquery.min.js"></script>

<script>
var auto_refresh = setInterval(
function()
{
$('#data').load('notifdynamic.php');
}, 1000);
</script> 
<script src="jquery.min.js"></script>

<script>
var auto_refresh = setInterval(
function()
{
$('#dat').load('friendsdynamic.php');
}, 1000);
</script> 
<script src="jquery.min.js"></script>






<div align="left">
 <div class="container">
  
  <div class="dropdown">     
    <button class="dropbtn"><br/><?php session_start();
$connection = mysqli_connect("mysql.hostinger.in","u298484267_vishu","vishal90023") or die("Couldn't connect to server");
$db = mysqli_select_db($connection,"u298484267_vishu");

 $query =mysqli_query($connection,"SELECT image from vishal WHERE usernamesignup = '$_SESSION[usernamesignup]'");
$row = mysqli_fetch_assoc($query);
 
    
 if($row['image']==null)
   {   echo '<img src="logo.png" height=26px width=26px style=border-radius:30px;vertical-align:text-top;>&nbsp&nbsp&nbsp&nbsp';
      }
   else{
        echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image']).'" height=28px width=28
        px style=border-radius:70px;/>';

  }
?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>

    <div class="dropdown-content" >
            <a href="users.php">Home</a>
                
       
      <a href="logout.php">Log out</a>
    </div></div>
    <div style="float:right">
     <div class="container" > 
     <div class="dropdown" >     
   <a href="friends.php"><img src="friends.png" height=28px width=28px style="border-radius:200px;text-align:bottom;"/>
  <div id="dat">&nbsp</div>
   </a>
   <a href="messages.php"><img src="messages.png" height=28px width=28px style="border-radius:200px;text-align:bottom;"/>
   
  </a>
   <a href="notifications.php"><img src="notifications.jpg" height=28px width=28px style="border-radius:200px;text-align:bottom;"/>
   <div id="data">&nbsp</div></a>
      <a href="people.php"><img src="search.png" height=28px width=28px style="border-radius:200px;text-align:bottom;"/></a>

   </div></div>
    </div>
  </div><br/>
  <?php session_start();
$connection = mysqli_connect("mysql.hostinger.in","u298484267_vishu","vishal90023") or die("Couldn't connect to server");
$db = mysqli_select_db($connection,"u298484267_vishu");

 $query =mysqli_query($connection,"SELECT * from people WHERE usernamesignup = '$_SESSION[usernamesignup]'");
while($row = mysqli_fetch_assoc($query)){

 if($row['requested']!=null){
     if($row['confirmed']!=null){
    echo '<font color=Lightgreen><h3><p align=center>';
    echo $row['friend'];
    echo ' accepted your friend request. &nbsp';
    echo '<a href=messages.php class=button>Write a message...</a></h3></font></p><hr/>';
    
    }
    else{
        echo '<font color=white><h3><p align=center>Awaiting confirmation from: &nbsp';
 echo $row['friend'];echo '</h3></font></p><hr/>';
    }
}
}echo '<font color=white><h3><p align=center>No more notifications!!</h3></p></font>';
 
?>
</body>
</html>