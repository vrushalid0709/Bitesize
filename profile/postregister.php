<?php
// Start session
session_start();

// Database credentials
include '../cart/db_connection.php';

// Check if form is submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    
    // Diet field to store dietary preference
    $diet = filter_var($_POST['diet'], FILTER_SANITIZE_STRING); 
    
    // Other fields
    $allergies = filter_var($_POST['allergies'], FILTER_SANITIZE_STRING);
    $meal_types = isset($_POST['meal']) ? implode(", ", $_POST['meal']) : ''; // Join multiple meal types
    $address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
    $address_type = filter_var($_POST['addressType'], FILTER_SANITIZE_STRING);

    // Create a new database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO user_profile (name, email, phone, diet, allergies, meal_types,
     address, address_type) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $name, $email, $phone, $diet, $allergies, $meal_types, $address, $address_type);

    // Execute the query
    if ($stmt->execute()) {
        // Success message and optional redirection
        echo "Profile information submitted successfully!";
        
        
        header("Location: ../food_delivery/menu.php"); 
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request method.";
}
?>
