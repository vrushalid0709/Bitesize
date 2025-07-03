<?php
session_start();

// Ensure cart data exists in session
if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    echo "No items found in the cart.";
    exit();
}

// Redirect to the confirmation page
header("Location: order_confirmation_postorder.php");  // Make sure this points to the correct confirmation page
exit();
