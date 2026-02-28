<?php
/*
Name: Aliyah Panjon
Course: IT 202-004
Date: 2/11/2026
Assignment: IT-202 Phase 2 - CRUD Categories and Items
Email: aep@njit.edu
*/
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