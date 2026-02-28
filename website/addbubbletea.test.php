<?php
require_once('bubbletea.php');

$bubbleteaID = $_POST['bubbleteaID'];

if ((trim($bubbleteaID) == '') or (!is_numeric($bubbleteaID))) {

   echo "<h2>Sorry, you must enter a valid Bubble Tea Item ID number</h2>\n";

} else if (BubbleTeaItem::findBubbleTeaItem($bubbleteaID)) {

   echo "<h2>Sorry, A Bubble Tea Item with the ID #$bubbleteaID already exists</h2>\n";

} else {

   $bubbleteaCode = $_POST['bubbleteaCode'];
   $bubbleteaName = $_POST['bubbleteaName'];
   $bubbleteaDescription = $_POST['bubbleteaDescription'];
   $bubbleteaBrand = $_POST['bubbleteaBrand'];
   $bubbleteaSize = $_POST['bubbleteaSize'];
   $bubbleteaSugarLevel = $_POST['bubbleteaSugarLevel'];
   $bubbleteaIceLevel = $_POST['bubbleteaIceLevel'];
   $bubbleteaTypeID = !empty($_POST['bubbleteaTypeID']) ? $_POST['bubbleteaTypeID'] : NULL;
   $bubbleteaBuyPrice = $_POST['bubbleteaBuyPrice'];
   $bubbleteaSellPrice = $_POST['bubbleteaSellPrice'];

   $item = new BubbleTeaItem(
       $bubbleteaID,
       $bubbleteaCode,
       $bubbleteaName,
       $bubbleteaDescription,
       $bubbleteaBrand,
       $bubbleteaSize,
       $bubbleteaSugarLevel,
       $bubbleteaIceLevel,
       $bubbleteaTypeID,
       $bubbleteaBuyPrice,
       $bubbleteaSellPrice
   );

   $result = $item->saveBubbleTeaItem();

   if ($result)
       echo "<h2>New Bubble Tea Item #$bubbleteaID successfully added</h2>\n";
   else
       echo "<h2>Sorry, there was a problem adding that Bubble Tea Item</h2>\n";
}
?>