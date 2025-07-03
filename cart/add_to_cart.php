<?php
session_start(); // Start the session to manage cart data

// Initialize cart if not already initialized
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate required fields
    if (!empty($_POST['product_name']) && !empty($_POST['product_price'])) {
        
        // Retrieve form data
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];

        // Add item to cart (Session-based cart or you can store in a database)
        $item = [
            'product_name' => $product_name,
            'product_price' => $product_price,
        ];

        // Append the new item to the cart session array
        $_SESSION['cart'][] = $item;

        // Redirect to cart page or show success message
        echo "<script>
                alert('Item added to the cart successfully!');
                window.location.href = 'cart.php'; // Redirect to cart page
              </script>";
    } else {
        // If fields are empty, show an error message
        echo "<script>
                alert('Please fill in all the details.');
                window.history.back(); // Go back to the previous page
              </script>";
    }
} else {
    // Redirect to the menu page if the form is not submitted via POST method
    header("Location: ../food delivery/menu.php");
    exit();
}
?>
