<?php
require_once("bubbleteatype.php");

$typeID = $_POST['bubbleteaTypeID'];

if ((trim($typeID) == '') or (!is_numeric($typeID))) {

   echo "<h2>Sorry, you must enter a valid Bubble Tea Type ID number</h2>\n";

} else if (BubbleTeaType::findBubbleTeaType($typeID)) {

   echo "<h2>Sorry, A Bubble Tea Type with the ID #$typeID already exists</h2>\n";

} else {

   $typeCode = $_POST['bubbleteaTypeCode'];
   $typeName = $_POST['bubbleteaTypeName'];
   $typeLocation = $_POST['bubbleteaSeriesLocation'];

   $type = new BubbleTeaType(
        $typeID,
        $typeCode,
        $typeName,
        $typeLocation
   );

   $result = $type->saveBubbleTeaType();

   if ($result)
       echo "<h2>New Bubble Tea Type #$typeID successfully added</h2>\n";
   else
       echo "<h2>Sorry, there was a problem adding that Bubble Tea Type</h2>\n";
}
?>