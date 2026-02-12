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
 error_log('$_POST ' . print_r($_POST, true));
 require_once('database.php');
 $emailAddress = $_POST['email_address'];
 $password = $_POST['password'];
$query = "SELECT email_address, pronouns, first_name, last_name, phone_number 
          FROM bubbletea_users 
          WHERE email_address = ? AND password = SHA2(?,256)";

 $db = getDB();
 $stmt = $db->prepare($query);
 $stmt->bind_param("ss", $emailAddress, $password);
 $stmt->execute();
$stmt->bind_result($emailAddress, $pronouns, $firstName, $lastName, $phoneNumber);
 $fetched = $stmt->fetch();
 $db->close();
 $name = "$firstName $lastName";

 if ($fetched) {
   $_SESSION['login'] = true;
   $_SESSION['emailAddress'] = $emailAddress;
   $_SESSION['pronouns'] = $pronouns;
   $_SESSION['firstName'] = $firstName;
   $_SESSION['lastName'] = $lastName;
   $_SESSION['phoneNumber'] = $phoneNumber;
   header("Location: index.php");
   exit();
}
 
 else {
   echo "<h2>Sorry, login incorrect for Bubble Tea Inventory Website</h2>\n";
   echo "<a href=\"index.php\">Please try again</a>\n";
 }
?>
