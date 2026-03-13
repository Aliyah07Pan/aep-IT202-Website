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
require_once('bubbletea.php');

if (!isset($_REQUEST['bubbletea_id']) or (!is_numeric($_REQUEST['bubbletea_id']))) {
?>
  <h2>You did not select a valid Bubble Tea ID value</h2>
  <a href="index.php?content=listbubbletea">List Bubble Tea Items</a>

<?php
} else {

  $bubbleteaID = $_REQUEST['bubbletea_id'];
  $item = BubbleTeaItem::findBubbleTeaItem($bubbleteaID);

  if ($item) {
?>

<h2>Update Bubble Tea Item <?php echo $item->bubbletea_id; ?></h2><br>

<form name="bubbletea" action="index.php" method="post">

<table>

<tr>
    <td>Bubble Tea ID</td>
    <td><?php echo $item->bubbletea_id; ?></td>
</tr>

<tr>
    <td>Code</td>
    <td>
        <input type="text" name="bubbletea_code"
        value="<?php echo htmlspecialchars($item->bubbletea_code); ?>">
    </td>
</tr>

<tr>
    <td>Name</td>
    <td>
        <input type="text" name="bubbletea_name"
        value="<?php echo htmlspecialchars($item->bubbletea_name); ?>">
    </td>
</tr>

<tr>
    <td>Description</td>
    <td>
        <input type="text" name="bubbletea_description"
        value="<?php echo htmlspecialchars($item->bubbletea_description); ?>">
    </td>
</tr>

<tr>
    <td>Brand</td>
    <td>
        <input type="text" name="bubbletea_brand"
        value="<?php echo htmlspecialchars($item->bubbletea_brand); ?>">
    </td>
</tr>

<tr>
    <td>Size</td>
    <td>
        <input type="text" name="bubbletea_size"
        value="<?php echo htmlspecialchars($item->bubbletea_size); ?>">
    </td>
</tr>

<tr>
    <td>Sugar Level</td>
    <td>
        <input type="text" name="bubbletea_sugar_level"
        value="<?php echo htmlspecialchars($item->bubbletea_sugar_level); ?>">
    </td>
</tr>

<tr>
    <td>Ice Level</td>
    <td>
        <input type="text" name="bubbletea_ice_level"
        value="<?php echo htmlspecialchars($item->bubbletea_ice_level); ?>">
    </td>
</tr>

<tr>
    <td>Type ID</td>
    <td>
        <input type="text" name="bubbletea_type_id"
        value="<?php echo htmlspecialchars($item->bubbletea_type_id); ?>">
    </td>
</tr>

<tr>
    <td>Buy Price</td>
    <td>
        <input type="text" name="bubbletea_buy_price"
        value="<?php echo htmlspecialchars($item->bubbletea_buy_price); ?>">
    </td>
</tr>

<tr>
    <td>Sell Price</td>
    <td>
        <input type="text" name="bubbletea_sell_price"
        value="<?php echo htmlspecialchars($item->bubbletea_sell_price); ?>">
    </td>
</tr>

</table><br><br>

<input type="submit" name="answer" value="Update Bubble Tea">
<input type="submit" name="answer" value="Cancel">

<input type="hidden" name="bubbletea_id"
value="<?php echo $bubbleteaID; ?>">

<input type="hidden" name="content" value="changebubbletea">

</form>

<?php
  } else {
?>

<h2>Sorry, Bubble Tea Item <?php echo $bubbleteaID; ?> not found</h2>
<a href="index.php?content=listbubbletea">List Bubble Tea Items</a>

<?php
  }
}
?>