/* Create a XML file which gives details of movies available in “Movie CD Store “ from following categories
a) Classical
b) Horror
c) Action
Elements in each category are in the following format 
<Category>
<MovieTitle> ……………. </ MovieTitle >
<ActorName> ……………….</ActorName>
<ReleaseYear> ………………… </ReleaseYear>
</Category>
Save the file with name “movies.xml” */

<?php
$xmlstr = '<?xml version="1.0" encoding="UTF-8" ?>';
$sxe = new SimpleXMLElement("<Movie_CD_Store></Movie_CD_Store>");

$item1 = $sxe->addChild('Movie');
$item1->addAttribute('Category','Classical');
$item1->addChild('MovieTitle','KGF');
$item1->addChild('ActorName', 'Yash');
$item1->addChild('ReleaseYear', 2022);

$item2 = $sxe->addChild('Movie');
$item2->addAttribute('Category','Classical');
$item2->addChild('MovieTitle','Jersey');
$item2->addChild('ActorName', 'Sahid');
$item2->addChild('ReleaseYear', 2022);

$item3 = $sxe->addChild('Movie');
$item3->addAttribute('Category','Horror');
$item3->addChild('MovieTitle','Gangubai');
$item3->addChild('ActorName', 'Alia');
$item3->addChild('ReleaseYear', 2022);

$item4 = $sxe->addChild('Movie');
$item4->addAttribute('Category','Horror');
$item4->addChild('MovieTitle','RRR');
$item4->addChild('ActorName', 'Jr.NTR');
$item4->addChild('ReleaseYear', 2022);

$item5 = $sxe->addChild('Movie');
$item5->addAttribute('Category','Action');
$item5->addChild('MovieTitle','KashmirFiles');
$item5->addChild('ActorName', 'Rohit');
$item5->addChild('ReleaseYear', 2022);

$item6 = $sxe->addChild('Movie');
$item6->addAttribute('Category','Action');
$item6->addChild('MovieTitle','Dhoom');
$item6->addChild('ActorName', 'John');
$item6->addChild('ReleaseYear', 2004);
$sxe->asXML('setc.xml');

?>

