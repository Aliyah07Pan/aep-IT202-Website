<?php
require_once("BubbleTeaType.php");

$bubbleteaTypeID = $_POST['bubbleteaTypeID'];

if ((trim($bubbleteaTypeID) == '') or (!is_numeric($bubbleteaTypeID))) {

   echo "<h2>Sorry, you must enter a valid Bubble Tea Type ID</h2>\n";

} else if (!BubbleTeaType::findBubbleTeaType($bubbleteaTypeID)) {

   echo "<h2>Sorry, A Bubble Tea Type with ID #$bubbleteaTypeID does not exist</h2>\n";

} else {

   $type = BubbleTeaType::findBubbleTeaType($bubbleteaTypeID);

   $type->bubbleteaTypeID = $_POST['bubbleteaTypeID'];
   $type->bubbleteaTypeCode = $_POST['bubbleteaTypeCode'];
   $type->bubbleteaTypeName = $_POST['bubbleteaTypeName'];
   $type->bubbleteaSeriesLocation = $_POST['bubbleteaSeriesLocation'];

   $result = $type->updateBubbleTeaType();

   if ($result) {
       echo "<h2>Bubble Tea Type $bubbleteaTypeID updated</h2>\n";
   } else {
       echo "<h2>Problem updating Bubble Tea Type $bubbleteaTypeID</h2>\n";
   }
}
?>