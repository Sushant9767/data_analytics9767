<?php
$dom=new DomDocument();
$dom->load("movie.xml");
echo"<h2>Name of Movie</h2>";
$mname=$dom->getElementsByTagName("MovieTitle");
foreach($mname as $m){
	echo"$m->textContent<br><br>";
}

echo"<h2>Movie Actor Name</h2>";
$mname=$dom->getElementsByTagName("ActorName");
foreach($mname as $b){
	echo"$b->textContent<br><br>";
}



?>
