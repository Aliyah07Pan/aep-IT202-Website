/*
Name: Aliyah Panjon
Course: IT 202-004
Date: 04/18/2026
-- Assignment: IT-202 Phase 05 - JavaScript 
Email: aep@njit.edu
*/
<?php

ob_start();
include("bubbleteatype.php");
include("bubbletea.php");

$totalCategories = BubbleTeaType::getTotalCategories();
$totalItems      = BubbleTeaItem::getTotalItems();
$totalBuyPrice   = BubbleTeaItem::getTotalListPrice();
$totalSellPrice  = BubbleTeaItem::getTotalSellPrice();

$doc = new DOMDocument("1.0");
$inventoryElement = $doc->appendChild($doc->createElement("inventory"));

$inventoryElement->appendChild($doc->createElement("categories",   $totalCategories));
$inventoryElement->appendChild($doc->createElement("items",        $totalItems));
$inventoryElement->appendChild($doc->createElement("buypricetotal",  number_format($totalBuyPrice, 2)));
$inventoryElement->appendChild($doc->createElement("sellpricetotal", number_format($totalSellPrice, 2)));

$output = $doc->saveXML();
header("Content-type: application/xml");
ob_end_clean();
echo $output;
?>

