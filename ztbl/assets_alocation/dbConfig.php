<?php  
// Database configuration  
$dbHost     = "localhost";  
$dbUsername = "rohan";  
$dbPassword = "test1234";  
$dbName     = "ztbldb";  
  
// Create database connection  
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);  
  
// Check connection  
if ($db->connect_error) {  
    die("Connection failed: " . $db->connect_error);  
}