<?php
	session_start();
	
	$q=$_POST["qt"];
	$r=$_POST["ra"];

	echo "Customer Information <br>";
	echo "<br>Customer Name =".$_SESSION["cnm"];
	echo "<br>Customer Address =".$_SESSION["cadd"];
	echo "<br>Customer Mobile No =".$_SESSION["cmno"];

	echo "<br>Product Information";
	
	echo "<br>Product Name =".$_REQUEST["pnm"];
	echo "<br>Qty =".$_REQUEST["qt"];
	echo "<br>Rate =".$_REQUEST["ra"];
	
	echo "<br>Totall Amount =".$q*$r;
	session_destroy();
	
?>	


