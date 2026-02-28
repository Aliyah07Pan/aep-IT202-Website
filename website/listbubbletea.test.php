<?php
/*
Name: Aliyah Panjon
Course: IT 202-004
Date: 2/11/2026
Assignment: IT-202 Phase 2 - CRUD Categories and Items
Email: aep@njit.edu
*/
require_once("bubbletea.php");

$items = BubbleTeaItem::getBubbleTeaItems();

if ($items) {
  foreach ($items as $item) {

     $bubbleteaID = $item->bubbletea_id;
     $bubbleteaName = $item->bubbletea_name;
     $bubbleteaPrice = $item->bubbletea_sell_price;

     $option = $bubbleteaID . " - " . $bubbleteaName . " - " . $bubbleteaPrice;

     echo "$option<br>";
  }
} else {
   echo "<h2>No bubble tea items found.</h2>";
}
?>