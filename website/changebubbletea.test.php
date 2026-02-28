<?php
require_once("BubbleTeaItem.php");

$bubbleteaID = $_POST['bubbleteaID'];

if ((trim($bubbleteaID) == '') or (!is_numeric($bubbleteaID))) {

   echo "<h2>Sorry, you must enter a valid Bubble Tea Item ID</h2>\n";

} else if (!BubbleTeaItem::findBubbleTeaItem($bubbleteaID)) {

   echo "<h2>Sorry, A Bubble Tea Item with ID #$bubbleteaID does not exist</h2>\n";

} else {

   $item = BubbleTeaItem::findBubbleTeaItem($bubbleteaID);

   $item->bubbletea_id = $_POST['bubbleteaID'];
   $item->bubbletea_code = $_POST['bubbleteaCode'];
   $item->bubbletea_name = $_POST['bubbleteaName'];
   $item->bubbletea_description = $_POST['bubbleteaDescription'];
   $item->bubbletea_brand = $_POST['bubbleteaBrand'];
   $item->bubbletea_size = $_POST['bubbleteaSize'];
   $item->bubbletea_sugar_level = $_POST['bubbleteaSugarLevel'];
   $item->bubbletea_ice_level = $_POST['bubbleteaIceLevel'];
   $item->bubbletea_type_id = $_POST['bubbleteaTypeID'];
   $item->bubbletea_buy_price = $_POST['bubbleteaBuyPrice'];
   $item->bubbletea_sell_price = $_POST['bubbleteaSellPrice'];

   $result = $item->updateBubbleTeaItem();

   if ($result) {
       echo "<h2>Bubble Tea Item $bubbleteaID updated</h2>\n";
   } else {
       echo "<h2>Problem updating Bubble Tea Item $bubbleteaID</h2>\n";
   }
}
?>