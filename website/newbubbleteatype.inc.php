<?php
/*
Name: Aliyah Panjon
Course: IT 202-004
Date: 3/12/2026
Assignment: IT-202 Phase 3 - HTML Website Layout
Email: aep@njit.edu
*/
?>
<h2>Enter New Bubble Tea Type Information</h2>

<form name="newbobateatype" action="index.php" method="post">

   <table cellpadding="1" border="0">

       <tr>
           <td>Bubble Tea Type ID:</td>
           <td><input type="text" name="bubbleteaTypeID" size="4"></td>
       </tr>

       <tr>
           <td>Bubble Tea Type Code:</td>
           <td><input type="text" name="bubbleteaTypeCode" size="20"></td>
       </tr>

       <tr>
           <td>Bubble Tea Type Name:</td>
           <td><input type="text" name="bubbleteaTypeName" size="20"></td>
       </tr>

       <tr>
           <td>Series Location:</td>
           <td><input type="text" name="bubbleteaSeriesLocation" size="20"></td>
       </tr>

   </table>

<br>

<input type="submit" value="Submit New Bubble Tea Type">

<input type="hidden" name="content" value="addbubbleteatype">

</form>