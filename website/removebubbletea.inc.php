/*
Name: Aliyah Panjon
Course: IT 202-004
Date: 04/18/2026
-- Assignment: IT-202 Phase 05 - JavaScript 
Email: aep@njit.edu
*/
<?php
require_once("bubbletea.php");
if (isset($_SESSION[ 'login'])) {

$bubbleteaID = $_POST['bubbletea_id'];

if ((trim($bubbleteaID) == '') or (!is_numeric($bubbleteaID))) {

   echo "<h2>Sorry, you must enter a valid Bubble Tea Item ID</h2>\n";

} else if (!BubbleTeaItem::findBubbleTeaItem($bubbleteaID)) {

   echo "<h2>Sorry, A Bubble Tea Item with ID #$bubbleteaID does not exist</h2>\n";

} else {

   $item = BubbleTeaItem::findBubbleTeaItem($bubbleteaID);
   $result = $item->removeBubbleTeaItem();

   if ($result)
       echo "<h2>Bubble Tea Item $bubbleteaID removed</h2>\n";
   else
       echo "<h2>Sorry, problem removing Bubble Tea Item $bubbleteaID</h2>\n";
}
} else {
   echo "<h2>Please login first</h2>\n";
}
?>