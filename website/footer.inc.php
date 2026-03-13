<?php
/*
Name: Aliyah Panjon
Course: IT 202-004
Date: 3/12/2026
Assignment: IT-202 Phase 3 - HTML Website Layout
Email: aep@njit.edu
*/
?>
<footer>
    <p>&copy; Bubble Tea Inventory Helper - Making Inventory Management Easier</p>

    <p>Aliyah Panjon | IT202-004 | Instructor: Vorah | Phase 03 | aep@njit.edu</p>

    <p>
        <?php
        date_default_timezone_set("America/New_York");
        echo "The date and time is " . date("D M j h:ia T Y");
        ?>
    </p>
</footer>

</body>
</html>