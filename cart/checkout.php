<?php
session_start();

// Ensure cart data exists in session
if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    echo "No items found in the cart.";
    exit();
}

$cart = $_SESSION['cart'];
$total = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation - BiteSize</title>
    <style>
        /* General Body Styling */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
    color: #333;
}

/* Header Styling */
h1 {
    background-color: #ff7f50; /* Orange background */
    color: white;
    text-align: center;
    padding: 20px;
    margin: 0;
    font-size: 30px;
}

/* Message Styling */
p {
    text-align: center;
    font-size: 18px;
    color: #333;
}

/* Order Summary Title */
h3 {
    text-align: center;
    font-size: 24px;
    margin-top: 30px;
    color: #4caf50; /* Green */
}

/* Table Styling */
table {
    width: 80%;
    margin: 30px auto;
    border-collapse: collapse;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

th, td {
    padding: 12px;
    text-align: center;
}

th {
    background-color: #ff7f50;
    color: white;
    font-size: 16px;
}

td {
    background-color: #f4f4f4;
    font-size: 14px;
}

tr:nth-child(even) td {
    background-color: #f9f9f9;
}

tfoot td {
    font-weight: bold;
    font-size: 16px;
    color: #ff7f50;
}

/* Total Styling */
h4 {
    text-align: center;
    font-size: 24px;
    color: #ff7f50;
    margin-top: 20px;
}

/* Button Styling */
button {
    background-color: #ff7f50;
    color: white;
    padding: 12px 25px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    margin: 30px auto;
    display: block;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #ff4500; /* Darker orange on hover */
}

/* Responsive Styling for Mobile */
@media (max-width: 768px) {
    table {
        width: 100%;
    }

    h1, h3, h4 {
        font-size: 20px;
    }

    p, button {
        font-size: 16px;
    }
}
</style>
</head>
<body>

<h1>Order Confirmation</h1>
<p>Your order has been successfully placed!</p>

<h3>Order Summary</h3>
<table>
    <thead>
        <tr>
            <th>Product Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        foreach ($cart as $item): 
            $price = isset($item['product_price']) ? str_replace('₹', '', $item['product_price']) : 0;
            $quantity = isset($item['quantity']) ? $item['quantity'] : 0;
            $subtotal = (float)$price * $quantity;
            $total += $subtotal;
        ?>
            <tr>
                <td><?= htmlspecialchars($item['product_name']); ?></td>
                <td>₹<?= number_format($price, 2); ?></td>
                <td><?= htmlspecialchars($quantity); ?></td>
                <td>₹<?= number_format($subtotal, 2); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<h4>Total: ₹<?= number_format($total, 2); ?></h4>

</body>
</html>
