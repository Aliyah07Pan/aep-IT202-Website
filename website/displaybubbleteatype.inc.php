/*
Name: Aliyah Panjon
Course: IT 202-004
Date: 04/18/2026
-- Assignment: IT-202 Phase 05 - JavaScript 
Email: aep@njit.edu
*/
<?php
require_once("bubbleteatype.php");
require_once("bubbletea.php");

if (!isset($_REQUEST['bubbletea_type_id']) || !is_numeric($_REQUEST['bubbletea_type_id'])) {
?>

<h2>You did not select a valid Bubble Tea Type.</h2>
<a href="index.php?content=listbubbleteatypes">List Bubble Tea Types</a>

<?php
} else {

$typeID = $_REQUEST['bubbletea_type_id'];

$type = BubbleTeaType::findBubbleTeaType($typeID);

if ($type) {

echo "<h2>Bubble Tea Type: $type->bubbleteaTypeName</h2>";

$items = BubbleTeaItem::getBubbleTeaItems();

if ($items) {
?>

<br><br>
<b>Bubble Tea Drinks:</b>

<table border="1" cellpadding="5">

<tr>
<th>ID</th>
<th>Name</th>
<th>Price</th>
</tr>

<?php

$total = 0;

foreach ($items as $item) {

if ($item->bubbletea_type_id == $typeID) {

?>

<tr>
<td><?php echo $item->bubbletea_id; ?></td>
<td><?php echo $item->bubbletea_name; ?></td>
<td><?php echo "$" . number_format($item->bubbletea_sell_price, 2); ?></td>
</tr>

<?php

$total += $item->bubbletea_sell_price;

}
}
?>

<tr>
<td></td>
<td><b>Total</b></td>
<td><?php echo "$" . number_format($total, 2); ?></td>
</tr>

</table>

<?php

} else {
echo "<h2>No Bubble Tea drinks found for this type.</h2>";
}

} else {
echo "<h2>Sorry, Bubble Tea Type $typeID not found.</h2>";
}

}
?>