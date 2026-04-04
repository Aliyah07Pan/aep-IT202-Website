<?php
/*
Name: Aliyah Panjon
Course: IT 202-004
Date: 2/11/2026
Assignment: IT-202 Phase 1 - Login and Logout
Email: aep@njit.edu
*/
/*
Name: Aliyah Panjon
Course: IT 202-004
Date: 2/11/2026
Assignment: IT-202 Phase 1 - Login and Logout
Email: aep@njit.edu
*/
/*
Name: Aliyah Panjon
Course: IT 202-004
Date: 4/03/2026
Assignment: IT-202 Phase 3 - HTML Website Layout
Email: aep@njit.edu
*/
?>

<?php
if (isset($_SESSION['login'])) {
   unset($_SESSION['login']);
   unset($_SESSION['emailAddress']);
   unset($_SESSION['firstName']);
   unset($_SESSION['lastName']);
   unset($_SESSION['pronouns']);
   unset($_SESSION['phoneNumber']);

}
header("Location: index.php");
?>