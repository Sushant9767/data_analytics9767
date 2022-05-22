<?php
	session_start();
	$_SESSION["eno"]=$_POST["t1"];
	$_SESSION["enm"]=$_POST["t2"];
	$_SESSION["add"]=$_POST["t3"];

	echo"<b>Fill Your Earnings</b>";
	echo"<form method='post' action='display.php'>";
	echo"Basic:<input type='numeric' name='t4'></b><br>";
	echo"DA:<input type='numeric' name='t5'></b><br>";
	echo"HRA:<input type='numeric' name='t6'></b><br>";
	echo"
    <button class='w-100 btn btn-lg btn-primary' type='submit'>Submit</button>";

?>
