<?php

// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (isset($_SESSION['usernamesignup'])) {
header('Location:users.php');
}

?>
<!DOCTYPE html>
<html lang="en" class="body">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="icon"
      type="image/png"
      href="logo.png"> 
      <link rel="stylesheet" type="text/css" href="vis.css">
      <style></style>
<title>Kokosocial</title></head>
<body class="body">
<ul>
<li ><a href="http://www.kokosocial.tk/"><img src="logos.png" width=150px height=73px></a></li><br/>
  <li style="float:right"><a href="register.php" class="button">Register</a></li>
  <li style="float:right"><a href="login.php" class="button">Log In</a></li>
</ul>
 <h1> <p align="center"><font color="white">"A place where dreams shape into success."</font></p></h1>
<h2><p align="center"><b><font color="white"><i>Connect and share your thoughts.</i></b></font></p></h2>



</body>

</html>
