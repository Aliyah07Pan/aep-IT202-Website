/*
Name: Aliyah Panjon
Course: IT 202-004
Date: 04/18/2026
-- Assignment: IT-202 Phase 05 - JavaScript 
Email: aep@njit.edu
*/
<script language="javascript">
    function listbox_dblclick() {
        document.items.displaybubbletea.click()  // ← was: document.categories...
    }
    function button_click(target) {
        var userConfirmed = true;
        if (target == 1) {
            userConfirmed = confirm("Are you sure you want to remove this item?");
        }
        if (userConfirmed) {
            if (target == 0) document.items.action = "index.php?content=updatebubbletea";  // ← was: categories.action, also changed target to updatebubbletea since displaybubbletea.inc.php doesn't exist
            if (target == 1) document.items.action = "index.php?content=removebubbletea";  // ← was: categories.action
            if (target == 2) document.items.action = "index.php?content=updatebubbletea";  // ← was: categories.action
        } else {
            alert("Action canceled.");
        }
    }
</script>
<?php

require_once("bubbletea.php");

$bobateas = BubbleTeaItem::getBubbleTeaItems();

if ($bobateas) {
?>

<h2>Select Bubble Tea</h2>

<form name="items" method="post" action="index.php">

<select ondblclick="listbox_dblclick()" name="bubbletea_id" size="20">
    
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

 <br>
        <input type="submit" onClick="button_click(0)" name="displaybubbleteatype" value="View Item">
        <input type="submit" onClick="button_click(1)" name="removebubbletea" value="Delete Item">
        <input type="submit" onClick="button_click(2)" name="updatebubbletea" value="Update Item">
    </form>
<?php
} else {
    echo "<h2>No categories found.</h2>";
}
?>