<?php

// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['usernamesignup'])) {
header('Location:index.php');
} ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

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
</style>
</head>
<body bgcolor="darkblue">
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
   <a href="friends.php"><img src="friends.png" height=28px width=28px style="border-radius:200px;text-align:bottom;"/></a>
   <a href="messages.php"><img src="messages.png" height=28px width=28px style="border-radius:200px;text-align:bottom;"/></a>
   <a href="notifications.php"><img src="notifications.jpg" height=28px width=28px style="border-radius:200px;text-align:bottom;"/></a>
      <a href="people.php"><img src="search.png" height=28px width=28px style="border-radius:200px;text-align:bottom;"/></a>

   </div></div>
    </div>
  </div><br/>
  <form action="profiledata.php" method="POST" enctype="multipart/form-data">
  <div style="height:0px;overflow:hidden">
   <input type="file" id="fileInput" name="fileInput" /><br/><br/>
</div>

<script>
   function chooseFile() {
      document.getElementById("fileInput").click();
   }
</script>
   <p align="center"><button type="button" onclick="chooseFile();" style="border-radius:10px;cursor:pointer;"><img src="pro.png" width=100px height=100px/></button>
<p align="center"><input type="submit" value="Upload Photo" class="button2"></form></p>
<hr/>

</body>

</html>