<?php
/*
Name: Aliyah Panjon
Course: IT 202-004
Date: 04/18/2026
-- Assignment: IT-202 Phase 05 - JavaScript 
Email: aep@njit.edu
*/
session_start();
require_once("config.php");
require_once("bubbletea.php");
require_once("bubbleteatype.php");
?>
<!DOCTYPE html>
<html>
<head>
   <title>Inventory Helper</title>
   <link rel="stylesheet" type="text/css" href="ih_styles.css">
   <link rel="icon" type="image/png" href="images/logo.png">
   <script src="realtime.js"></script>
</head>
<body>
   <header>
       <?php include("header.inc.php"); ?>
   </header>
   <section style="height: 375px;">
       <nav>
           <?php include("nav.inc.php"); ?>
       </nav>
       <main>
           <?php
           if (isset($_REQUEST['content'])) {
               include($_REQUEST['content'] . ".inc.php");
           } else {
               include("main.inc.php");
           }
           ?>
       </main>
       <?php if (isset($_SESSION['login'])) { ?>
        <aside>
            <?php include("aside.inc.php"); ?>
            <script>
             getRealTime();
        setInterval(getRealTime, 5000);
    </script>
</aside>
<?php } ?>
   </section>
   <footer>
       <?php include("footer.inc.php"); ?>
   </footer>
</body>
</html>