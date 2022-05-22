<?php
	session_start();
	$_SESSION["cnm"] = $_POST["nm"];
	$_SESSION["cadd"] = $_POST["add"];
	$_SESSION["cmno"] = $_POST["mno"];
	
	echo "Enter Earnings";
	echo "<form method = 'post' action = 'bill.php'>";
	echo "<b>ProdName<input type = text name = 'pnm'></b>";
	echo "<b>Qty<input type = text name = 'qt'></b>";
	echo "<b>Rate<input type = text name = 'ra'></b>";
	echo "<b><input type = submit value = 'Bill'></b>";
	
?>
