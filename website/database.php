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
 function getDB($echo_mode = false) {
   $host = 'localhost';
   $port = 3306;
   $dbname = 'bubbletea';
   $username = 'bubbletea_user';
   $password = 'bubbletea_password';

   mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

   try {
       $db = new mysqli($host, $username, $password, $dbname, $port);
       error_log("Database connection successful to " . $host);
       if ($echo_mode) echo "Database connection successful to " . $host;
       return $db;
   } 
   
   catch (mysqli_sql_exception $e) {
       error_log("Database connection failed: " . $e->getMessage());
       if ($echo_mode) echo "Database connection failed: " . $e->getMessage();
   }
 }
 getDB(true);
?>