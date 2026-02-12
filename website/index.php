<?php
/*
Name: Aliyah Panjon
Course: IT 202-004
Date: 2/11/2026
Assignment: IT-202 Phase 1 - Login and Logout
Email: aep@njit.edu
*/
?>

<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head><title>Bubble Tea Inventory</title></head>
<body>
   <section>
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
</body>
</html>
