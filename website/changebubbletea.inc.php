
<?php
/*
Name: Aliyah Panjon
Course: IT 202-004
Date: 2/11/2026
Assignment: IT-202 Phase 2 - CRUD Categories and Items
Email: aep@njit.edu
*/
?>
<?php
require_once("bubbletea.php");

$bubbleteaID = $_POST['bubbletea_id'];

if ((trim($bubbleteaID) == '') or (!is_numeric($bubbleteaID))) {

   echo "<h2>Sorry, you must enter a valid Bubble Tea Item ID</h2>\n";

} else if (!BubbleTeaItem::findBubbleTeaItem($bubbleteaID)) {

   echo "<h2>Sorry, A Bubble Tea Item with ID #$bubbleteaID does not exist</h2>\n";

} else {

   $item = BubbleTeaItem::findBubbleTeaItem($bubbleteaID);

   $item->bubbletea_id = $_POST['bubbletea_id'];
   $item->bubbletea_code = $_POST['bubbletea_code'];
   $item->bubbletea_name = $_POST['bubbletea_name'];
   $item->bubbletea_description = $_POST['bubbletea_description'];
   $item->bubbletea_brand = $_POST['bubbletea_brand'];
   $item->bubbletea_size = $_POST['bubbletea_size'];
   $item->bubbletea_sugar_level = $_POST['bubbletea_sugar_level'];
   $item->bubbletea_ice_level = $_POST['bubbletea_ice_level'];
   $item->bubbletea_type_id = $_POST['bubbletea_type_id'];
   $item->bubbletea_buy_price = $_POST['bubbletea_buy_price'];
   $item->bubbletea_sell_price = $_POST['bubbletea_sell_price'];

   $result = $item->updateBubbleTeaItem();

   if ($result) {
       echo "<h2>Bubble Tea Item $bubbleteaID updated</h2>\n";
   } else {
       echo "<h2>Problem updating Bubble Tea Item $bubbleteaID</h2>\n";
   }
}
?>