<?php
session_start();
 

$connection = mysqli_connect("mysql.hostinger.in","u298484267_vishu","vishal90023") or die("Couldn't connect to server");
$db = mysqli_select_db($connection,"u298484267_vishu");

    $name = $_GET['search'];
    $query=mysqli_query($connection,"SELECT * FROM vishal WHERE  usernamesignup LIKE '$_GET[search]%'");

   while($row  = mysqli_fetch_assoc($query))
   {
       if($_SESSION['usernamesignup']!=$row['usernamesignup'])
       {
           if($row['image']==null)
              {   echo '<img src="logo.png" height=25px width=25px style=border-radius:30px;vertical-align:center;>';
              }
             else{ echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image']).'" height=25px width=25px style=border-radius:70px;/>';
                 }

          echo '<font color=blue><b>&nbsp';
          echo $row['usernamesignup'];echo '</b></font>';
          $q=mysqli_query($connection,"SELECT * FROM people WHERE  (usernamesignup='$_SESSION[usernamesignup]' && friend='$row[usernamesignup]')");
          $rw = mysqli_fetch_assoc($q);

             if($rw['confirmed']==null)
             {       if($rw['requested']==null)
                   { echo '<form action=connect.php method=POST style=float:right>';
                     echo '<input type=submit name=connect  value='.$row['usernamesignup'].' class=ebb ></form> ';
                     echo '<hr/>';
                   }
                     else{ echo '<button style=float:right class=button>Requested</button> ';
                           echo '<hr/>';    }
             }
             else{echo '<button style=float:right class=button>Friends</button> ';
                  echo '<hr/>';
                 }
       }



}
  echo '<font color=white><p align=center>No more Results</p></font>';

?>
