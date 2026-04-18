
/*
Name: Aliyah Panjon
Course: IT 202-004
Date: 04/18/2026
-- Assignment: IT-202 Phase 05 - JavaScript 
Email: aep@njit.edu
*/
<?php
require_once("BubbleTeaType.php");
if (isset($_SESSION{'login'})) {

$bubbleteaTypeID = $_POST['bubbletea_type_id'];
$answer = $_POST['answer'];


if ($answer == "Update Category") {

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
    } // ← closes the "ID exists" else — nothing comes after this

} else {  // ← now correctly pairs with if ($answer == "Update Category")
    echo "<h2>Update Cancelled for category $bubbleteaTypeID</h2>\n";
}
}