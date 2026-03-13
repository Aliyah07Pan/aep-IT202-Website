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
if (isset($_SESSION['login'])) {
?>

<nav class="navigation" style="float:left;height:100%;min-width:175px;width:auto;">
<table width="100%" cellpadding="3">

<?php
echo "<tr><td><h3>Welcome, {$_SESSION['login']}</h3></td></tr>";
?>

<tr>
<td><a href="index.php"><strong>Home</strong></a></td>
</tr>

<tr>
<td><strong>Bubble Tea Types</strong></td>
</tr>

<tr>
<td>&nbsp;&nbsp;&nbsp;
<a href="index.php?content=listbubbleteatypes"><strong>List Bubble Tea Types</strong></a>
</td>
</tr>

<tr>
<td>&nbsp;&nbsp;&nbsp;
<a href="index.php?content=newbubbleteatype"><strong>Add New Bubble Tea Type</strong></a>
</td>
</tr>

<tr>
<td><strong>Bubble Tea</strong></td>
</tr>

<tr>
<td>&nbsp;&nbsp;&nbsp;
<a href="index.php?content=listbubbletea"><strong>List Drinks</strong></a>
</td>
</tr>

<tr>
<td>&nbsp;&nbsp;&nbsp;
<a href="index.php?content=newbubbletea"><strong>Add New Drink</strong></a>
</td>
</tr>

<tr>
<td><hr /></td>
</tr>

<tr>
<td><a href="index.php?content=logout"><strong>Logout</strong></a></td>
</tr>

<tr>
<td>&nbsp;</td>
</tr>

<tr>
<td>

<form action="index.php" method="post">
<label>Search for Bubble Tea:</label><br>
<input type="text" name="bubbletea_id" size="14" />
<input type="submit" value="Find" />
<input type="hidden" name="content" value="updatebubbletea" />
</form>

</td>
</tr>

<tr>
<td>

<form action="index.php" method="post">
<label>Search for Bubble Tea Type:</label><br>
<input type="text" name="bubbletea_type_id" size="14" />
<input type="submit" value="Find" />
<input type="hidden" name="content" value="displaybubbleteatype" />
</form>

</td>
</tr>

</table>
</nav>

<?php
}
?>
