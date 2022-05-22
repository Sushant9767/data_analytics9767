/*Write PHP script to read above created “book.xml” file into simpleXML object. Display attributes and elements 
.(Hint L simple_xml_load_file() function )*/

<?php
$xml=simplexml_load_file("book.xml") or die("eror:cannot create object");
var_dump($xml);

$i=1;
foreach($xml->books as $book)
{
	echo "<br> Book  = $i";
	echo "<br>books category attribute= ".$book->attributes();
	echo "<br>book Number elements= ".$book->bookno;
	echo "<br>book_name element= ".$book-> bookname;
	echo "<br>author_name element= ".$book-> authorname;
	echo "<br>price element = ".$book->price;
	echo "<br>year element = ".$book->year;
$i++;

}

?>

