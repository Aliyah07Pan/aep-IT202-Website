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
Date: 3/12/2026
Assignment: IT-202 Phase 3 - HTML Website Layout
Email: aep@njit.edu
*/
?>

<?php
 //session_start();

require_once('database.php');

$emailAddress = filter_var($_POST['email_address']);
$password = $_POST['password'];
if (filter_var($emailAddress, FILTER_VALIDATE_EMAIL)) {

$query = "SELECT email_address, pronouns, first_name, last_name, phone_number 
          FROM bubbletea_users 
          WHERE email_address = ? AND password = SHA2(?,256)";

 $db = getDB();

 $stmt = $db->prepare($query);
 $stmt->bind_param("ss", $emailAddress, $password);
 $stmt->execute();

 $stmt->bind_result($emailAddress, $pronouns, $firstName, $lastName, $phoneNumber);
 $fetched = $stmt->fetch();

 $stmt->close();
 $db->close();

 if ($fetched) {
  $_SESSION['login'] = $firstName;

    $_SESSION['firstName'] = $firstName;
    $_SESSION['lastName'] = $lastName;
    $_SESSION['pronouns'] = $pronouns;
    $_SESSION['phoneNumber'] = $phoneNumber;
    $_SESSION['emailAddress'] = $emailAddress;

    header("Location: index.php");
    exit();
}
 
 else {
   echo "<h2>Sorry, login incorrect for Bubble Tea Inventory Website</h2>\n";
   echo "<a href=\"index.php\">Please try again</a>\n";
 }
} else{
  echo "<h2>Please eneter a valid email address </h2>/n";
  echo '<a href="index.php">Please try again</a>';
}
?>
