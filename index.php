<?php
include_once('LinkList.php');

$linkedList = new LinkList();

$linkedList->insertFirst(22);
$linkedList->insertFirst(11);
$linkedList->insertLast(44);
$linkedList->insertLast(55);
$linkedList->insert(33,2);
$totalNodes = $linkedList->totalNodes();
$linkData = $linkedList->readList();
echo $totalNodes . "<br>";
echo implode('-', $linkData);
