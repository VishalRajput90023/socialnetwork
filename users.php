<?php
 
session_start();
//If user not logged in jump to index.php
  if(!isset($_SESSION['usernamesignup']))
	{   header('Location:index.php');}
  else
  {
    $connection = mysqli_connect("mysql.hostinger.in","u298484267_vishu","vishal90023") or die("Couldn't connect to server");
    $db = mysqli_select_db($connection,"u298484267_vishu");
    $qrty = mysqli_query($connection,"UPDATE vishal set online='true' where usernamesignup='$_SESSION[usernamesignup]'");
  } 
?>

<script>
//Update user as offline on closing the tab
window.onbeforeunload = function()
{ <?php
  $qrty = mysqli_query($connection,"UPDATE vishal set online='false' where usernamesignup='$_SESSION[usernamesignup]'");
  ?>
}
<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon"
      type="image/png"
      href="logo.png">
<link rel="stylesheet" type="text/css" href="vis.css">
<title>Kokosocial</title>

<style>
body{margin:0px;}
@media only screen and (max-width: 900px) {
  .checkonline {
        display: none;
    }
}
@media only screen and (max-width: 900px) {
  .hidden {
      height: 40px;
      width: 40px;
    }
}
@media only screen and (max-width: 900px) {
  .hid {font-size:15px;
      height: 50px;
      width: 150px;
    }
}
.container {
    margin:0px;
    padding:0px;
    background-color: #00cccc;
    position: fixed;
    font-family: monospace;
    width:100%;
}

.container a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 10px;
    text-decoration: none;
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
    padding: 10px 10px;
    background-color: inherit;
}

.container a:hover, .dropdown:hover .dropbtn {
    background-color: skyblue;
}

.dropdown-content {top:48px;
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index:1;
}

.dropdown-content a {

    float: none;
    color: blue;
    padding: 12px 16px;
    text-decoration: none;
    display:block;
    text-align: left;
}



.dropdown:hover .dropdown-content {
    display: block;
}
.notifier{font-size: 12px;
    background-color: white;

    border-radius:1000px;
}
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 10px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: scroll; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.7); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: white;
    margin: auto;
    padding: 12px;
    border: 1px solid #888;
    width: 90%;

}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
.moda {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 10px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: scroll; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.7); /* Black w/ opacity */
}

/* Modal Content */
.moda-content {
    background-color: white;
    margin: auto;
    padding: 12px;
    border: 1px solid #888;
    width: 70%;

}

/* The Close Button */
.clos {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.clos:hover,
.clos:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
.mod {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 10px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: scroll; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.7); /* Black w/ opacity */
}

/* Modal Content */
.mod-content {
    background-color: white;
    margin: auto;
    padding: 12px;
    border: 1px solid #888;
    width: 90%;

}

/* The Close Button */
.clo {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.clo:hover,
.clo:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
.mode {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 10px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: scroll; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.7); /* Black w/ opacity */
}

/* Modal Content */
.mode-content {
    background-color: white;
    margin: auto;
    padding: 12px;
    border: 1px solid #888;
    width: 70%;

}

/* The Close Button */
.cloe {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.cloe:hover,
.cloe:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
.modr{
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 10px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: scroll; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.7); /* Black w/ opacity */
}

/* Modal Content */
.modr-content {
    background-color: white;
    margin: auto;
    padding: 12px;
    border: 1px solid #888;
    width: 90%;

}

/* The Close Button */
.clor {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.clor:hover,
.clor:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
.mybutton{
  bottom:0px;
  left:0px;
  position:fixed;
}
table {
    border-width:thin;
    border-spacing: 2px;
    border-style: none;
    border-radius:7px;


    overflow:hidden;
    word-wrap:break-word;
}
.v{
  background-image: url(like.jpg);
  background-size:30px;
  border:none;
  width:30px;
  height:30px;
  background-repeat: no-repeat;
margin:0px;
  padding:0px;
}
.vi{
  background-image: url(rose.jpg);
  background-size:30px;
  border:none;
  width:30px;
  height:30px;
  background-repeat: no-repeat;
  margin:0px;
  padding:0px;
}
.vis{
  background-image: url(punch.png);
  background-size:30px;
  border:none;
  width:30px;
  height:30px;
  background-repeat: no-repeat;
  margin:0px;
  padding:0px;
}
.vish{
  background-image: url(sad.png);
  background-size:30px;
  border:none;
  width:30px;
  height:30px;
  background-repeat: no-repeat;
  margin:0px;
  padding:0px;
}
.visha{
  background-image: url(cool.png);
  background-size:30px;
  border:none;
  width:30px;
  height:30px;
  background-repeat: no-repeat;
  margin:0px;
  padding:0px;
}
.vishal{
  background-image: url(laugh.png);
  background-size:30px;
  border:none;
  width:30px;
  height:30px;
  background-repeat: no-repeat;
  margin:0px;
  padding:0px;
}
.vishala{
  background-image: url(share.png);
  background-size:30px;
  border:none;
  width:30px;
  height:30px;
  background-repeat: no-repeat;
  margin:0px;
  padding:0px;
}
.placeholder{
  font-size:20px;
}
</style>
</head>
<body>
<script src="jquery.min.js"></script>
<script>
var auto_refresh = setInterval(
function()
{
$('#dattas').load('checkonline.php');
}, 20000);
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

<div align="left" >
 <div class="container">

  <div class="dropdown">
    <div class="dropbtn">

<?php session_start();

$connection = mysqli_connect("mysql.hostinger.in","u298484267_vishu","vishal90023") or die("Couldn't connect to server");
$db = mysqli_select_db($connection,"u298484267_vishu");

$query =mysqli_query($connection,"SELECT image from vishal WHERE usernamesignup = '$_SESSION[usernamesignup]'");
$row = mysqli_fetch_assoc($query);


 if($row['image']==null)
   {   echo '<img src="logo.png" height=30px width=30px style=border-radius:7px;vertical-align:text-top;>';
      }
   else{
        echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image']).'" height=30px width=30px style=border-radius:7px;/>';

       }
?>
	
</div>

    <div class="dropdown-content" >
            <a href="users.php">Home</a>
            <a href="#" id="m">Profile photo</a>

            <a href="logout.php">Log out</a>
    </div></div>
    <div style="float:right" >

     <div class="dropdown" >
        <a href="#" id="myBtn"><img src="friends.png" height=28px width=28px style="border-radius:200px;text-align:bottom;"/>
   <div id="dat">&nbsp</div></a>
   <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
  <p>
<?php session_start();
$connection = mysqli_connect("mysql.hostinger.in","u298484267_vishu","vishal90023") or die("Couldn't connect to server");
$db = mysqli_select_db($connection,"u298484267_vishu");

echo '<p align=center><font color=00A1FF><b><h2>Friends</h2></b></font></p>';
 $query =mysqli_query($connection,"SELECT * from people WHERE friend='$_SESSION[usernamesignup]'");
while($row = mysqli_fetch_assoc($query))
{
    if(($row['requested']!=null)&& ($row['decline']==null))
    {
        if($row['confirmed']==null)
        {
          $qyry = mysqli_query($connection,"SELECT * from vishal where usernamesignup='$row[usernamesignup]'");
            while($rw = mysqli_fetch_assoc($qyry))
              {
                 if($rw['image']!=null){
                  echo '<img src="data:image/jpeg;base64,'.base64_encode( $rw['image']).'" height=25px width=25px style=border-radius:70px;/>';
                  }
                 else{
                  echo '<img src="logo.png" height=25px width=25px style=border-radius:70px;>';
                 }
                echo '<font color=#00A1FF><b>';
                echo $row['usernamesignup'];
                echo " wants a handshake!!";
                echo '</b></font>';
                echo '<form action=users.php method=POST>';
                echo '<input type=image src=confirm.png height=30px width=30px value='.$row['usernamesignup'].' name=submit >';
                echo '<input type=image src=decline.png height=30px width=30px value='.$row['usernamesignup'].' name=subm ></form><hr/>';
                    
                  if(isset($_POST['submit'])){
                    $qry=mysqli_query($connection,"Update people set confirmed='confirm' where friend='$_POST[submit]'");
                    $qry=mysqli_query($connection,"Update people set confirmed='confirm' where usernamesignup='$_POST[submit]'");
                      }
                 echo '<form action=users.php method=POST>';

                    if(isset($_POST['subm'])){
                         $qry=mysqli_query($connection,"Update people set decline='decline' where friend='$_POST[subm]'");
                         $qry=mysqli_query($connection,"Update people set decline='decline' where usernamesignup='$_POST[subm]'");
                         }
            }
         } 
     }
}
?>

<?php
session_start();

$connection = mysqli_connect("mysql.hostinger.in","u298484267_vishu","vishal90023") or die("Couldn't connect to server");
$db = mysqli_select_db($connection,"u298484267_vishu");

$query = mysqli_query($connection,"SELECT * from people where usernamesignup='$_SESSION[usernamesignup]'");

while($row = mysqli_fetch_assoc($query))
{
 if($row['confirmed']!=null)
 	{
 		$qry = mysqli_query($connection,"SELECT * from vishal where usernamesignup='$row[friend]'");
        while($rw = mysqli_fetch_assoc($qry))
        {
            if($rw['image']!=null)
            {
               echo '<img src="data:image/jpeg;base64,'.base64_encode( $rw['image']).'" height=25px width=25px style=border-radius:70px;vertical-align:text-top;/>';
            }
            else{
               echo '<img src="logo.png" height=25px width=25px style=border-radius:70px;vertical-align:text-top;>';
             }
         echo '<font color=#00A1FF>&nbsp&nbsp';
         echo $rw['usernamesignup'];
         
        }
    }
}
?>
</p>
</div>
</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
   <a href="#" id="myBt"><img src="messages.png" height=28px width=28px style="border-radius:200px;text-align:bottom;"/></a>
   <div id="myModa" class="moda">

  <!-- Modal content -->
  <div class="moda-content">
    <span class="clos">&times;</span>
  <p>
<p align="center"><font color="blue"><h3>Inbox</h3></font></p>
   
<?php session_start();
  $connection = mysqli_connect("mysql.hostinger.in","u298484267_vishu","vishal90023") or die("Couldn't connect to server");
  $db = mysqli_select_db($connection,"u298484267_vishu");


  $query =mysqli_query($connection,"SELECT * from people WHERE friend='$_SESSION[usernamesignup]'");
  while($row = mysqli_fetch_assoc($query))
  {
    if($row['confirmed']!=null)
      {
        $query = mysqli_query($connection,"SELECT * from people where usernamesignup='$_SESSION[usernamesignup]'");

       while($row = mysqli_fetch_assoc($query))
        {
          if($row['confirmed']!=null)
            {
              $qry = mysqli_query($connection,"SELECT * from vishal where usernamesignup='$row[friend]'");

              while($rw = mysqli_fetch_assoc($qry))
              {
                if($rw['image']!=null)
                {
                  echo '<img src="data:image/jpeg;base64,'.base64_encode( $rw['image']).'" height=40px width=40px style=border-radius:70px;text-align:top;/>';
                }
                else
                { 
                  echo '<img src="logo.png" height=40px width=40px >&nbsp&nbsp&nbsp&nbsp';
                }
                 echo '<font color=blue><b>';
                 echo $row['friend'];
                 echo '</font></b>';
                 echo '<div style=float:right><form action=inbox.php method=POST>';
                 echo '<input type=image src=messages.png width=33px height=33px name=sub  value='.$row['friend'].'></form></div></font>';
                 echo '<br/>';echo '<br/>';
                 echo '<hr/>';
                 if(isset($_POST['sub']))
                 {
                   $_SESSION['friend']=$_POST['sub'];echo header('location:inbox.php');
                 }
                 else
                  { unset($_SESSION['friend']);}
              }
            }
          }
        }
      }
  ?> 

  </p>
  </div>
  </div>

  <script>
   // Get the modal
   var moda = document.getElementById('myModa');

   // Get the button that opens the modal
   var bt = document.getElementById("myBt");

   // Get the <span> element that closes the modal
   var span = document.getElementsByClassName("clos")[0];

   // When the user clicks the button, open the modal
   bt.onclick = function() {
      moda.style.display = "block";
   }

   // When the user clicks on <span> (x), close the modal
   span.onclick = function() {
      moda.style.display = "none";
   }

   // When the user clicks anywhere outside of the modal, close it
   window.onclick = function(event) {
      if (event.target == moda) {
          moda.style.display = "none";
      }
   }
   </script>

<a href="#" id="my"><img src="notifications.jpg" height=28px width=28px style="border-radius:200px;text-align:bottom;"/>
    <div id="data"></div></a>
    <div id="myMo" class="mode">
    <!-- Modal content -->
    <div class="mode-content">
     <span class="cloe">&times;</span>

    <p>
    <?php session_start();
      $connection = mysqli_connect("mysql.hostinger.in","u298484267_vishu","vishal90023") or die("Couldn't connect to server");
      $db = mysqli_select_db($connection,"u298484267_vishu");
      
      echo '<font color=#00A1FF><b><p align=center><h2>Notifications</h2></b></p></font>';
      $query =mysqli_query($connection,"SELECT * from people WHERE usernamesignup = '$_SESSION[usernamesignup]' ");
      while($row = mysqli_fetch_assoc($query))
      {
         if($row['requested']!=null)
         {
           if($row['confirmed']!=null)
           {
              echo '<font color=orange><p align=center>';
              echo $row['friend'];
              echo ' accepted your friend request. &nbsp';
              echo '<hr/></font>';

            }
            else
            {
              echo '<font color=red><b><p align=center>Awaiting confirmation from:&nbsp';
              echo $row['friend'];
              echo '</b></font></p><hr/>';
            }
          }
        }
    ?>
</p>
</div>
</div>

 <script>
 // Get the modal
 var mode = document.getElementById('myMo');

 // Get the button that opens the modal
 var bs = document.getElementById("my");

 // Get the <span> element that closes the modal
 var span = document.getElementsByClassName("cloe")[0];

 // When the user clicks the button, open the modal
 bs.onclick = function() {
     mode.style.display = "block";
 }

 // When the user clicks on <span> (x), close the modal
 span.onclick = function() {
     mode.style.display = "none";
 }

 // When the user clicks anywhere outside of the modal, close it
 window.onclick = function(event) {
     if (event.target == mode) {
         mode.style.display = "none";
     }
 }
 </script>

<a href="#" id="myB"><img src="search.png" height=28px width=28px style="border-radius:200px;text-align:bottom;"/></a>
      <div id="myMod" class="mod">

      <!-- Modal content -->
      <div class="mod-content">
       <span class="clo">&times;</span>

      <p><form  method="GET">
      <p align="center"><input type="text" class="textboxchange" name="search" placeholder="Search" onkeyup="showResult(this.value)"></p>
      <p align="center"><input type="button" name="submit" value="Search" class="button2"></p></form>
      <div id="livesearch" ><p align="center">  <img src="load.gif"  width=150px height=150px style="border-radius:50px"/></p></div>
      <script>
      function showResult(str) {
        if (str.length==0) {
          document.getElementById("livesearch").innerHTML="";
          document.getElementById("livesearch").style.border="0px";
          return;
        }
        if (window.XMLHttpRequest) {
          // code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp=new XMLHttpRequest();
        } else {  // code for IE6, IE5
          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function() {
          if (this.readyState==4 && this.status==200) {
            document.getElementById("livesearch").innerHTML=this.responseText;
            document.getElementById("livesearch").style.border="1px solid #A5ACB2";
          }
        }
        xmlhttp.open("GET","ajax.php?search="+str,true);
        xmlhttp.send();
      }
      </script>
    </p>
    </div>
    </div>
    <script>
    // Get the modal
    var mod = document.getElementById('myMod');

    // Get the button that opens the modal
    var B = document.getElementById("myB");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("clo")[0];

    // When the user clicks the button, open the modal
    B.onclick = function() {
        mod.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        mod.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == mod) {
            mod.style.display = "none";
        }
    } </script>
   </div></div>
    </div>
  <br/>
  <div id="myModr" class="modr">

 <!-- Modal content -->
 <div class="modr-content">
   <span class="clor">&times;</span>
 <p><form action="profiledata.php" method="POST" enctype="multipart/form-data">
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
 <hr/></p>
  </div>
</div>

<script>
// Get the modal
var modr = document.getElementById('myModr');

// Get the button that opens the modal
var btnr = document.getElementById("m");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("clor")[0];

// When the user clicks the button, open the modal
btnr.onclick = function() {
    modr.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modr.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modr) {
        modr.style.display = "none";
    }
}
</script>
<br/><br/><br/>
<table bgcolor="#dee2f2" border="1" >
  <tr>
  <td>
  <div class="dropdown">
  <?php session_start();
     $connection = mysqli_connect("mysql.hostinger.in","u298484267_vishu","vishal90023") or die("Couldn't connect to server");
     $db = mysqli_select_db($connection,"u298484267_vishu");

     $query =mysqli_query($connection,"SELECT image from vishal WHERE usernamesignup = '$_SESSION[usernamesignup]'");
     $row = mysqli_fetch_assoc($query);

      if($row['image']==null)
      {   
        echo '<img src="logo.png" class=hidden height=50px width=50px style="border-radius:50px">';
      }
      else
      {
        echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image']).'" height=50px width=50px class=hidden/>';
      }
?>

<div class="dropdown-content">
    
<?php session_start();
   
   $connection = mysqli_connect("mysql.hostinger.in","u298484267_vishu","vishal90023") or die("Couldn't connect to server");
   $db = mysqli_select_db($connection,"u298484267_vishu");

   $query =mysqli_query($connection,"SELECT image from vishal WHERE usernamesignup = '$_SESSION[usernamesignup]'");
   $row = mysqli_fetch_assoc($query);

   if($row['image']==null)
    {   
      echo '<img src="logo.png" height=150px width=150px align=center >';
    }
   else
   {
        echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image']).'" height=150px width=150px align=center/>';
    }
?>
    
<div class="desc"><?php echo $_SESSION['usernamesignup'];?></div>
</div>
</div>
</td>
<td>
<br/>

<form action="post.php" method="POST">
<textarea rows="2" cols="25" name="status" class="hid" placeholder="What's exciting about today!!"></textarea>
<input type="image" name="submit" class="hidden" src="post.png" height="50px" width="50px" style="border-radius:1000px">
</form>
</td>
<td>
<a href="#"><img src="camera.png"  class="hidden" height="50px" width="50px" style="border-radius:1000px"></a>
</td>
</tr>
</table>
<br/>

<?php
  session_start();
  $connection = mysqli_connect("mysql.hostinger.in","u298484267_vishu","vishal90023") or die("Couldn't connect to server");
  $db = mysqli_select_db($connection,"u298484267_vishu");
  echo '<table border=1><tr valign=top><td>';
  $query = mysqli_query($connection,"SELECT friend FROM people where confirmed='Confirm' && usernamesignup='$_SESSION[usernamesignup]'");

  while($r = mysqli_fetch_assoc($query))
  {
    $qry = mysqli_query($connection,"SELECT usernamesignup,status FROM post2 where usernamesignup='$r[friend]'");
    while($rw = mysqli_fetch_assoc($qry))
    {
      $quey =mysqli_query($connection,"SELECT image from vishal WHERE usernamesignup = '$r[friend]'");
      
      while($rowe = mysqli_fetch_assoc($quey))
      {
        echo '<table bgcolor=#dee2f2 border=1>';
        echo '<tr><td>';
        
        if($rowe['image']==null)
        {   
          echo '<img src="logo.png" height=25px width=25px >&nbsp&nbsp';
        }
        else
        {
          echo '<img src="data:image/jpeg;base64,'.base64_encode( $rowe['image']).'" height=25px width=25px />';
        }
        echo '<font color=#dee2f2><b>';
        echo $rw['usernamesignup'];
        echo '<hr/>';
        echo '</font></b>';
        echo '<h2><b>';
        echo $rw['status'];
        echo '</h2></b>';
        echo '</td></tr>';
        echo '<tr bgcolor=white><td>';
        echo '<form  method=POST><input class=v type=button name=submit  value='.$row['friend'].'>
        <div id=emojis style=display:inline>&nbsp</div><input class=vi type=button name=submit  value='.$row['friend'].'>
        <div id=emojis style=display:inline>&nbsp</div><input class=vis type=button name=submit  value='.$row['friend'].'>
        <div id=emojis style=display:inline>&nbsp</div><input class=vish type=button name=submit  value='.$row['friend'].'>
        <div id=emojis style=display:inline>&nbsp</div><input class=visha type=button name=submit  value='.$row['friend'].'>
        <div id=emojis style=display:inline>&nbsp</div><input class=vishal type=button name=submit  value='.$row['friend'].'>
        <div id=emojis style=display:inline>&nbsp</div><input class=vishala type=button name=submit  value='.$row['friend'].'>
        </form>';
        echo '</td></tr>';
        echo '<tr bgcolor=white><td>';
        echo '<form>';
        echo '<input style=font-size:15px type=text placeholder="Type a comment" >';
        echo '<input type=image name=submit class=hidden src=post.png  style=border-radius:500px;height:50px;width:50px;>';
        echo '</form>';
        echo '</td></tr>';
        echo '</table>';
        echo '<br>';
      }
    }
  }

echo '</td>';
echo '<div id=dattas class=checkonline style=position:fixed;right:0px;top:85px>&nbsp</div>';
echo '</tr></table>';
 ?>

<script>
  function ajaxFunction()
  {
  var ajaxRequest;  // The variable that makes Ajax possible!
  try
  {
  // Opera 8.0+, Firefox, Safari
  ajaxRequest = new XMLHttpRequest();
  }
  catch (e)
  {
  // Internet Explorer Browsers
  try
  {
   ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
  }catch (e) 
  {
  try
  {ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
      }
      catch (e)
      {
         // Something went wrong
         alert("Your browser broke!");
         return false;
      }
    }
  }
}
   //on the click of the submit button
   $("#submit").click(function(){
    //get the form values
   var ID = $('#message').val();
   var NAME = $('#submit').val();
   // make the postdata
   // var postData = '&ID='+ID+'&NAME='+NAME+'&PASSWORD='+PASSWORD+'&CREDITS'+CREDITS+'&EMAIL_ID'+EMAIL_ID+'&CREATED_ON'+CREATED_ON+'&MODIFIED_ON'+MODIFIED_ON;
   // alert(postData);
   var myData={"message":ID,"submit":NAME};
   //call your .php script in the background,
   //when it returns it will call the success function if the request was successful or
   //the error one if there was an issue (like a 404, 500 or any other error status)
   $.ajax({
    url : "messagedata.php",
    type: "POST",
    data : myData,
    success: function(data,status,xhr)
     {//if success then just output the text to the status div then clear the form inputs to prepare for new data
      $("#status_text").html(data);
      $('#message').val('');}});});
</script>

</body>
</html>