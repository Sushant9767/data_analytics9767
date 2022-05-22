<?php
$dom = new DOMDocument();
		$dom->encoding = 'utf-8';
		$dom->xmlVersion = '1.0';
		$dom->formatOutput = true;

	$xml_file_name = 'Book.xml';
                $root = $dom->createElement('BookInfo');
                $book_node = $dom->createElement('book');
                $attr_book_id = new domChild('bookno', '1');
                $book_node->setAttributeNode($attr_book_id);

	$child_node_bookname = $dom->createElement('bookname', 'Java');
                $book_node->appendChild($child_node_bookname);
        $child_node_authorname = $dom->createElement('authorname', 'Balguru Swami');
                $book_node->appendChild($child_node_authorname);
        $child_node_price = $dom->createElement('Price', 350);
                $book_node->appendChild($child_node_price);
        $child_node_year = $dom->createElement('Year', 2006);
                 $book_node->appendChild($child_node_year);

                $root = $dom->createElement('BookInfo');
                $book_node2 = $dom->createElement('book');
                $attr_book_id = new domChild('bookno', '2');
                $book_node2->setAttributeNode($attr_book_id);

	$child_node_bookname = $dom->createElement('bookname', 'C');
                $book_node2->appendChild($child_node_bookname);
        $child_node_authorname = $dom->createElement('authorname', 'Denis Ritchie');
                $book_node2->appendChild($child_node_authorname);
        $child_node_price = $dom->createElement('Price', 650);
                $book_node2->appendChild($child_node_price);
        $child_node_year = $dom->createElement('Year', 1971);
                 $book_node2->appendChild($child_node_year); 

		$root->appendChild($book_node);
                $root->appendChild($book_node2);
                $dom->appendChild($root);

	$dom->save($xml_file_name);

	
