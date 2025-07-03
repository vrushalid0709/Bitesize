<?php
// Database credentials
$host = 'localhost';        
$username = 'root';         
$password = '';             
$dbname = 'bitesize';       

// Create the database connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
