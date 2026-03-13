<?php
/*
Name: Aliyah Panjon
Course: IT 202-004
Date: 3/12/2026
Assignment: IT-202 Phase 3 - HTML Website Layout
Email: aep@njit.edu
*/
?>
<?php
require_once("bubbletea.php");

$bobateas = BubbleTeaItem::getBubbleTeaItems();

if ($bobateas) {
?>

<h2>Select Bubble Tea</h2>

<form name="bobateas" method="post" action="index.php">

<select name="bubbletea_id" size="20">
    
<?php
$first = true;

foreach ($bobateas as $bobatea) {

    $bubbleteaID = $bobatea->bubbletea_id;
    $bubbleteaName = $bobatea->bubbletea_name;
    $bubbleteaPrice = number_format($bobatea->bubbletea_sell_price, 2);

    $option = $bubbleteaID . " - " . $bubbleteaName . " - $" . $bubbleteaPrice;

    if ($first) {
        echo "<option value=\"$bubbleteaID\" selected>$option</option>";
        $first = false;
    } else {
        echo "<option value=\"$bubbleteaID\">$option</option>";
    }
}
?>

</select>

<br><br>

<input type="submit" value="Update Bubble Tea">

<input type="hidden" name="content" value="updatebubbletea">

</form>

<?php
} else {
    echo "<h2>No Bubble Tea found.</h2>";
}
?>