<?php
require_once("BubbleTeaItem.php");

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