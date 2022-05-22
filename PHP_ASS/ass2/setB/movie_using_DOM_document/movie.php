/* Write a PHP script to read “Movie.xml” file and print all MovieTitle and ActorName of file using DOMDocument 
Parser. “Movie.xml” file should contain following information with at least 5 records with values.
MovieInfo
MovieNo, MovieTitle, ActorName , ReleaseYear */

<?php
$xmlstr = '<?xml version="1.0" encoding="UTF-8" ?>';
$sxe = new SimpleXMLElement("<Movies></Movies>");

$item1 = $sxe->addChild('Movie');
$item1->addChild('MovieNo', 1);
$item1->addChild('MovieTitle','BAHUBALI');
$item1->addChild('ActorName', 'Prabhash');
$item1->addChild('ReleaseYear', 2017);

$item2 = $sxe->addChild('Movie');
$item2->addChild('MovieNo', 2);
$item2->addChild('MovieTitle','SUPER30');
$item2->addChild('ActorName', 'RITIK');
$item2->addChild('ReleaseYear', 2020);

$item3 = $sxe->addChild('Movie');
$item3->addChild('MovieNo', 3);
$item3->addChild('MovieTitle','DRUVA');
$item3->addChild('ActorName', 'Charan');
$item3->addChild('ReleaseYear', 2018);

$item4 = $sxe->addChild('Movie');
$item4->addChild('MovieNo', 5);
$item4->addChild('MovieTitle','RRR');
$item4->addChild('ActorName', 'Jr.NTR');
$item4->addChild('ReleaseYear', 2022);

$item5 = $sxe->addChild('Movie');
$item5->addChild('MovieNo', 5);
$item5->addChild('MovieTitle','SULTAN');
$item5->addChild('ActorName', 'Salman');
$item5->addChild('ReleaseYear', 2019);
$sxe->asXML('movie.xml');

?>

