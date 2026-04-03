
<?php
/*
Name: Aliyah Panjon
Course: IT 202-004
Date: 2/11/2026
Assignment: IT-202 Phase 2 - CRUD Categories and Items
Email: aep@njit.edu
*/
?>
<?php
require_once('bubbletea.php');

if (isset($_SESSION['login'])) {

//$bubbleteaID = $_POST['bubbletea_id'];
$bubbleteaID = filter_input(INPUT_POST, 'bubbletea_id', FILTER_VALIDATE_INT);

if ((trim($bubbleteaID) == '') or (!is_int($bubbleteaID))) {

    echo "<h2>Sorry, you must enter a valid Bubble Tea Item ID number</h2>";

} else if (BubbleTeaItem::findBubbleTeaItem($bubbleteaID)) {

    echo "<h2>Sorry, A Bubble Tea Item with the ID #$bubbleteaID already exists</h2>";

} else {

    $bubbleteaCode = $_POST['bubbletea_code'];
    $bubbleteaName = $_POST['bubbletea_name'];
    $bubbleteaDescription = $_POST['bubbletea_description'];
    $bubbleteaBrand = $_POST['bubbletea_brand'];
    $bubbleteaSize = $_POST['bubbletea_size'];
    $bubbleteaSugarLevel = $_POST['bubbletea_sugar_level'];
    $bubbleteaIceLevel = $_POST['bubbletea_ice_level'];
    $bubbleteaTypeID = !empty($_POST['bubbletea_type_id']) ? $_POST['bubbletea_type_id'] : NULL;
    $bubbleteaBuyPrice = $_POST['bubbletea_buy_price'];
    $bubbleteaSellPrice = $_POST['bubbletea_sell_price'];

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
        echo "<h2>New Bubble Tea Item #$bubbleteaID successfully added</h2>";
    else
        echo "<h2>Sorry, there was a problem adding that Bubble Tea Item</h2>";
}

} else {

echo "<h2>Please login first</h2>";

}
?>