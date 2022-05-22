<?php
	session_start();
	echo"<h1>Employee Details</h1>";
	echo"Emp No:".$_SESSION['eno']."</b></br>";
	echo"Emp Name:".$_SESSION['enm']."</b></br>";
	echo"Emp Address:".$_SESSION['add']."</b></br>";

	echo"<br>Earning Details<br>";
	echo"Basic:".$_REQUEST["t4"]."<br>";
	echo"DA:".$_REQUEST["t5"]."<br>";
	echo"HRA:".$_REQUEST["t6"]."<br>";

	$a = $_REQUEST["t4"];
	$b = $_REQUEST["t5"];
	$c = $_REQUEST["t6"];
	$d=($a*$b)/100;
	$e=($a*$c)/100;
	$f=$a+$d+$e;

	echo"<br>Total:".$f;
	session_destroy();
?>
