<?php
require_once("BubbleTeaType.php");

$types = BubbleTeaType::getBubbleTeaTypes();

if ($types) {

  foreach ($types as $type) {

     $id = $type->bubbleteaTypeID;
     $name = $id . " - " . $type->bubbleteaTypeCode . ", " . $type->bubbleteaTypeName . " (" . $type->bubbleteaSeriesLocation . ")";
     
     echo "$name<br>";
  }

} else {
  echo "<h2>No Bubble Tea Types found.</h2>";
}
?>