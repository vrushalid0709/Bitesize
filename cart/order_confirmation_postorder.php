<?php
session_start();

// Ensure the order details are available in the session
if (!isset($_SESSION['order_details'])) {
    echo "No order details found.";
    exit();
}

// Retrieve the order details from the session
$order_details = $_SESSION['order_details'];
$order_date = $order_details['order_date'];
$order_time = $order_details['order_time'];

// Retrieve the cart details (assuming cart is in the session)
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
</head>
<body>

<h1>Order Confirmation</h1>
<p>Your order has been successfully placed!</p>

<h3>Order Details</h3>
<p><strong>Delivery Date:</strong> <?= htmlspecialchars($order_date); ?></p>
<p><strong>Delivery Time:</strong> <?= htmlspecialchars($order_time); ?></p>

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

