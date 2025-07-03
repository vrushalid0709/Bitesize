<?php
// Start session
session_start();

// Database connection
include '../cart/db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $user_password = $_POST['Password'];

    if (empty($name) || empty($email) || empty($user_password)) {
        echo "Please fill in all fields.";
    } else {
        
        $hashed_password = password_hash($user_password, PASSWORD_DEFAULT);

        // Create a new connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        
        $stmt = $conn->prepare("INSERT INTO registration (name, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $hashed_password);

        
        if ($stmt->execute()) {
            echo "Registration successful!";
            
           
            $stmt_user = $conn->prepare("INSERT INTO users (email, id) VALUES (?, ?)");
            $stmt_user->bind_param("ss", $email, $hashed_password);
            $stmt_user->execute();
            $stmt_user->close();

            // Set session variables
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email;

        
            header("Location: pregister.php");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close statement and connection
        $stmt->close();
        $conn->close();
    }
}
?>

