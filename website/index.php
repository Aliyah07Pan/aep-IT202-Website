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
session_start();

require_once("bubbleteatype.php");
require_once("bubbletea.php");
?>

<!DOCTYPE html>
<html>

<head>
<title>Bubble Tea Inventory Helper</title>

<style>
* {
    font-family: -apple-system, BlinkMacSystemFont, "SF Pro Text",
    "SF Pro Display", "Helvetica Neue", Helvetica, Arial, sans-serif;
}
</style>

</head>

<body>

<?php include("header.inc.php"); ?>

<section style="height:425px;">

<?php include("nav.inc.php"); ?>

<main>

<?php
if (isset($_REQUEST['content'])) {
    include($_REQUEST['content'] . ".inc.php");
} else {
    include("main.inc.php");
}
?>

</main>

</section>

<?php include("footer.inc.php"); ?>

</body>
</html>