<?php
 session_start();
 if(!isset($_SESSION['friend']))
 {
    header('location:messages.php');
 }
 if (!isset($_SESSION['usernamesignup'])) {
 header('Location:index.php');} 
?>
<!DOCTYPE html>
  <html lang="en">
  <head>
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="icon"
      type="image/png"
      href="logo.png">
   <link rel="stylesheet" type="text/css" href="vis.css">
 <title>Kokosocial-Simplified way to connect</title>
<style>
  body {margin:0;padding-bottom:100px;}
  ul {list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    position: fixed;
    bottom: 0;
    width: 100%;
}
  li {float: left;}
  li a { display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
  li a:hover:not(.active) {
    background-color: #111;
}
  .active{
    background-color: #4CAF50;
}
  .container {
    overflow: hidden;
    background-color: #00cccc;
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
    border-radius:4px;}
  .dropdown:hover .dropdown-content {display: block;}
  .totto{
 display:block;
 background-color:lightgreen;
 font-family:tahoma, sans-serif;
 font-size:15px;
 border-radius:9px;
 width:55%;
 overflow:hidden;
 word-wrap:break-word;
 }
  .lotto{
  display:block;
 background-color:skyblue;
 font-family:tahoma, sans-serif;
 font-size:15px;
 border-radius:9px;
 float:right;
 width:55%;
 overflow:hidden;
 text-overflow:ellipsis;
 word-wrap:break-word;
 }
  .notifier{
    display:block;
    background-color:white;
    border-radius:5px;
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
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
  .modal-content {
    background-color: white;
    margin: auto;
    padding: 12px;
    border: 1px solid #888;
    width: 60%;
}
  .close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}
  .close:hover,.close:focus {
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
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
  .moda-content {
    background-color: white;
    margin: auto;
    padding: 12px;
    border: 1px solid #888;
    width: 60%;
}
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
  }.mod {
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
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
  .mod-content {
     background-color: white;
     margin: auto;
    padding: 12px;
    border: 1px solid #888;
    width: 80%;
 }
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
.visha{
  background-image: url(post.png);
  background-size:30px;
  border:none;
  border-radius: 4px;
  width:40px;
  height:40px;
  background-repeat: no-repeat;
margin:0px;
  padding:0px;
  font-size:0.01px;
}
 </style>
 </head>
 <body bgcolor="white">
 <script src="jquery.min.js"></script>
  <script>
 var auto_refresh = setInterval(
 function()
 {
 $('#datas').load('live.php');
 }, 1000);
 </script>
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
 <button class="dropbtn"><br/>
 <?php session_start();
  $connection = mysqli_connect("mysql.hostinger.in","u298484267_vishu","vishal90023") or die("Couldn't connect to server");
  $db = mysqli_select_db($connection,"u298484267_vishu");
  $query =mysqli_query($connection,"SELECT image from vishal WHERE usernamesignup = '$_SESSION[usernamesignup]'");
  $row = mysqli_fetch_assoc($query);
  if($row['image']==null)
  {echo '<img src="logo.png" height=26px width=26px style=border-radius:30px;vertical-align:text-top;>&nbsp&nbsp&nbsp&nbsp';}
  else{echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image']).'" height=28px width=28px style=border-radius:70px;/>';}
  ?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>

    <div class="dropdown-content" >
            <a href="users.php">Home</a>
            <a href="profile.php">Edit Profile</a>
            <a href="logout.php">Log out</a>
    </div></div>
    <div style="float:right">
     <div class="container" >
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
 $query =mysqli_query($connection,"SELECT * from people WHERE friend='$_SESSION[usernamesignup]'");
 while($row = mysqli_fetch_assoc($query)){
    if($row['requested']!=null){
    if($row['confirmed']==null){
    echo '<font color=blue><b>';
    echo $row['usernamesignup'];
    echo " sent you a friend request.";
    echo '</b></font>';
    echo '<form action=users.php method=POST>';
    echo '<input type=submit value=Confirm name=submit class=elb></form><hr/>';
 if(isset($_POST['submit'])){
    $qry=mysqli_query($connection,"Update people set confirmed='$_POST[submit]' where friend='$_SESSION[usernamesignup]' ");
    $qry=mysqli_query($connection,"Update people set confirmed='$_POST[submit]' where usernamesignup='$_SESSION[usernamesignup]' ");
    }}}}
    echo '<p align=center><font color=blue><h3>No more friend requests!!</font></h3></p>';
    echo '<hr/>';
 ?>
 <?php session_start();
 $connection = mysqli_connect("mysql.hostinger.in","u298484267_vishu","vishal90023") or die("Couldn't connect to server");
 $db = mysqli_select_db($connection,"u298484267_vishu");
 $query = mysqli_query($connection,"SELECT * from people where usernamesignup='$_SESSION[usernamesignup]'");
 while($row = mysqli_fetch_assoc($query))
  {
  if($row['confirmed']!=null){$qry = mysqli_query($connection,"SELECT * from vishal where usernamesignup='$row[friend]'");
 while($rw = mysqli_fetch_assoc($qry)){
  if($rw['image']!=null){
 echo '<img src="data:image/jpeg;base64,'.base64_encode( $rw['image']).'" height=40px width=40px style=border-radius:70px;vertical-align:text-top;/>';
  }
 else{
 echo '<img src="logo.png" height=40px width=40px style=border-radius:70px;vertical-align:text-top;>';
 }
 echo '<font color=blue>&nbsp&nbsp&nbsp&nbsp';
 echo $rw['usernamesignup'];
 echo '<hr/>';

 }}}
 ?>
 </p></div></div>
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

  <?php session_start();
   $connection = mysqli_connect("mysql.hostinger.in","u298484267_vishu","vishal90023") or die("Couldn't connect to server");
   $db = mysqli_select_db($connection,"u298484267_vishu");
   $query =mysqli_query($connection,"SELECT * from people WHERE friend='$_SESSION[usernamesignup]'");
   while($row = mysqli_fetch_assoc($query)){
   if($row['confirmed']!=null){
   $query = mysqli_query($connection,"SELECT * from people where usernamesignup='$_SESSION[usernamesignup]'");
   echo '<p align=center><font color=blue><h2><b>Message</b></font></h2></p>';
   while($row = mysqli_fetch_assoc($query))
   {
   if($row['confirmed']!=null){$qry = mysqli_query($connection,"SELECT * from vishal where usernamesignup='$row[friend]'");
   while($rw = mysqli_fetch_assoc($qry)){
   if($rw['image']!=null)
   {
   echo '<img src="data:image/jpeg;base64,'.base64_encode( $rw['image']).'" height=40px width=40px style=border-radius:70px;text-align:top;/>';}
   else{ echo '<img src="logo.png" height=40px width=40px >&nbsp&nbsp&nbsp&nbsp';}
   echo '<font color=blue><b>';
   echo $row['friend'];
   echo '</font></b>';
   echo '<div style=float:right><form action=messages.php method=POST>';
   echo '<input type=image src=messages.png width=33px height=33px name=sub  value='.$row['friend'].'></form></div></font>';
   echo '<br/>';echo '<br/>';
   echo '<hr/>';
   if(isset($_POST['sub'])){
   $_SESSION['friend']=$_POST['sub'];echo header('location:inbox.php');
   }}}}}}
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
      moda.style.display = "block";}
   // When the user clicks on <span> (x), close the modal
   span.onclick = function() {
   moda.style.display = "none";}
   // When the user clicks anywhere outside of the modal, close it
   window.onclick = function(event) {
   if (event.target == moda) {
   moda.style.display = "none";}
   }
   </script>
 <a href="notifications.php"><img src="notifications.jpg" height=28px width=28px style="border-radius:200px;text-align:bottom;"/>
  <div id="data">&nbsp</div></a>
 <a href="#" id="myB"><img src="search.png" height=28px width=28px style="border-radius:200px;text-align:bottom;"/></a>
  <div id="myMod" class="mod">
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
    var mod = document.getElementById('myMod');
    var B = document.getElementById("myB");
    var span = document.getElementsByClassName("clo")[0];
    B.onclick = function() {
        mod.style.display = "block";
    }
    span.onclick = function() {
    mod.style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target == mod) {
            mod.style.display = "none";
        }
     }
</script>
 </div></div></div></div><br/>
 <div id="datas"><p align="center">
  <img src="load.gif"  width=300px height=200px/></p></div>
  <ul>
  <form  method="POST" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<div align="center"><input type="text" id="message" required="required" class="textboxchange" name="message" placeholder="Type a message......." ></li>
  <input type="button"  name="submit" class="visha" id="submit" value="<?php if(isset($_SESSION['friend'])){echo $_SESSION['friend'];} else{echo "Not Available";}?>" onclick()></div></form>
  </ul>
 <script>
  function ajaxFunction(){
  var ajaxRequest;  // The variable that makes Ajax possible!
  try{
  // Opera 8.0+, Firefox, Safari
  ajaxRequest = new XMLHttpRequest();
  }catch (e){
  // Internet Explorer Browsers
  try{
   ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
  }catch (e) {
  try{ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
      }catch (e){
         // Something went wrong
         alert("Your browser broke!");
         return false;
      }}}}
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
