<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "anik";
$dbPassword = "anik";
$dbName     = "imageupload";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>