
<?php
/*
Name: Aliyah Panjon
Course: IT 202-004
Date: 2/11/2026
Assignment: IT-202 Phase 2 - CRUD Categories and Items
Email: aep@njit.edu
*/
require_once("BubbleTeaType.php");

$bubbleteaTypeID = $_POST['bubbletea_type_id'];

if ((trim($bubbleteaTypeID) == '') or (!is_numeric($bubbleteaTypeID))) {

   echo "<h2>Sorry, you must enter a valid Bubble Tea Type ID</h2>\n";

} else if (!BubbleTeaType::findBubbleTeaType($bubbleteaTypeID)) {

   echo "<h2>Sorry, A Bubble Tea Type with ID #$bubbleteaTypeID does not exist</h2>\n";

} else {

   $type = BubbleTeaType::findBubbleTeaType($bubbleteaTypeID);

   $type->bubbleteaTypeID = $_POST['bubbletea_type_id'];
   $type->bubbleteaTypeCode = $_POST['bubbletea_type_code'];
   $type->bubbleteaTypeName = $_POST['bubbletea_type_name'];
   $type->bubbleteaSeriesLocation = $_POST['bubbletea_series_location'];

   $result = $type->updateBubbleTeaType();

   if ($result) {
       echo "<h2>Bubble Tea Type $bubbleteaTypeID updated</h2>\n";
   } else {
       echo "<h2>Problem updating Bubble Tea Type $bubbleteaTypeID</h2>\n";
   }
}
?>