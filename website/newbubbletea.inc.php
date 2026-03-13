<?php
/*
Name: Aliyah Panjon
Course: IT 202-004
Date: 3/12/2026
Assignment: IT-202 Phase 3 - HTML Website Layout
Email: aep@njit.edu
*/
?>
<?php require_once("bubbleteatype.php"); ?>

<h2>Enter New Bubble Tea Information</h2>

<form name="newbubbletea" action="index.php" method="post">

<table cellpadding="3">

<tr>
<td>Item ID:</td>
<td><input type="text" name="bubbletea_id" size="5"></td>
</tr>

<tr>
<td>Code:</td>
<td><input type="text" name="bubbletea_code" size="10"></td>
</tr>

<tr>
<td>Name:</td>
<td><input type="text" name="bubbletea_name" size="25"></td>
</tr>

<tr>
<td>Description:</td>
<td><input type="text" name="bubbletea_description" size="40"></td>
</tr>

<tr>
<td>Brand:</td>
<td><input type="text" name="bubbletea_brand" size="20"></td>
</tr>

<tr>
<td>Size:</td>
<td><input type="text" name="bubbletea_size" size="10"></td>
</tr>

<tr>
<td>Sugar Level:</td>
<td><input type="text" name="bubbletea_sugar_level" size="10"></td>
</tr>

<tr>
<td>Ice Level:</td>
<td><input type="text" name="bubbletea_ice_level" size="10"></td>
</tr>

<tr>
<td>Type:</td>
<td>

<select name="bubbletea_type_id">

<?php
$types = BubbleTeaType::getBubbleTeaTypes();

if ($types) {
foreach ($types as $type) {

$id = $type->bubbleteaTypeID;
$name = $type->bubbleteaTypeName;

echo "<option value=\"$id\">$name</option>";
}
}
?>

</select>

</td>
</tr>

<tr>
<td>Buy Price:</td>
<td><input type="text" name="bubbletea_buy_price" size="10"></td>
</tr>

<tr>
<td>Sell Price:</td>
<td><input type="text" name="bubbletea_sell_price" size="10"></td>
</tr>

</table>

<br>

<input type="submit" value="Add Bubble Tea">

<input type="hidden" name="content" value="addbubbletea">

</form>