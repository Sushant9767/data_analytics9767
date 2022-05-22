<?php
$name=$_POST['uname'];
$pwd=$_POST['pass'];
session_start();
    if(($name=='abhishek') && ($pwd=='abhishek123'))
    
      echo"WELCOME  ".$name;
     
   else
     {
	if(isset($_SESSION['$chance']))
	$_SESSION['$chance']=0;
	$_SESSION['$chance']++;
	echo"<br><br><br>Wrong Password or Username".$_SESSION['$chance'];
	if($_SESSION['$chance']==3)
	{
	echo"<center><br>Your Chances are Finished</center>";
	$_SESSION['$chance']=0;
	}
	
     }
	
?>
