/*
Name: Aliyah Panjon
Course: IT 202-004
Date: 04/18/2026
-- Assignment: IT-202 Phase 05 - JavaScript 
Email: aep@njit.edu
*/
<?php
require_once("bubbleteatype.php");

$types = BubbleTeaType::getBubbleTeaTypes();

if ($types) {

echo "<h2>Bubble Tea Types</h2>";
echo "<ul>";

foreach ($types as $type) {

    $id = $type->bubbleteaTypeID;
    $code = $type->bubbleteaTypeCode;
    $name = $type->bubbleteaTypeName;
    $location = $type->bubbleteaSeriesLocation;

    echo "<li>$id - $code, $name ($location)</li>";
}

echo "</ul>";

} else {

echo "<h2>No Bubble Tea Types found.</h2>";

}
?>