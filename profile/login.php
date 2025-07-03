<?php
// Start session
session_start();

// Database credentials
include '../cart/db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['Email'];
    $user_password = $_POST['Password'];

    if (empty($email) || empty($user_password)) {
        echo "Please fill in all fields.";
    } else {
        // Create a new connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        
        $stmt = $conn->prepare("SELECT email, id FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        
        if ($result->num_rows > 0) {
            // Fetch the user data
            $user = $result->fetch_assoc();
            
            
            if (password_verify($user_password, $user['id'])) {
                $_SESSION['loggedin'] = true;
                $_SESSION['email'] = $user['email'];
                
                // Redirect to menu page
                header("Location: ../dine in/menu.php");
                exit();
            } else {
                echo "Invalid email or password.";
            }
        } else {
            echo "No user found with that email.";
        }

        // Close statement and connection
        $stmt->close();
        $conn->close();
    }
}
?>
