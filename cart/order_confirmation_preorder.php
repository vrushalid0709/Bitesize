<?php
session_start();

include "../cart/db_connection.php";

// Ensure cart is available in the session
if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    echo "No items found in the cart.";
    exit();
}

$cart = $_SESSION['cart'];
$total = 0;

// Retrieve pre-order details from session
$order_date = isset($_SESSION['order_date']) ? $_SESSION['order_date'] : '';
$order_time = isset($_SESSION['order_time']) ? $_SESSION['order_time'] : '';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pre-order Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }
        h1 {
            text-align: center;
            background-color: #ff7f50;
            color: white;
            padding: 20px 0;
            margin: 0;
            font-size: 28px;
        }
        .order-confirmation {
            text-align: center;
            margin-top: 50px;
        }
        .order-confirmation h2 {
            color: #4caf50;
        }
        .order-summary {
            margin-top: 30px;
        }
        .total {
            font-weight: bold;
            font-size: 20px;
            color: #ff7f50;
        }
        .button-container {
            text-align: center;
            margin: 20px 0;
        }
        .button-container button {
            padding: 10px 20px;
            background-color: #ff7f50;
            color: white;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
        }
        /* Highlight for date and time */
        .highlight {
            font-size: 18px;
            font-weight: bold;
            color: #ff7f50;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #ffecd1;
        }
    </style>
</head>
<body>
    <h1>Pre-order Confirmation</h1>

    <div class="order-confirmation">
        <h2>Your pre-order has been successfully placed!</h2>
        <p class="highlight">Delivery Date: <?= htmlspecialchars($order_date); ?></p>
        <p class="highlight">Delivery Time: <?= htmlspecialchars($order_time); ?></p>

        <div class="order-summary">
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
                        $quantity = isset($item['quantity']) ? $item['quantity'] : 0;
                        $price = isset($item['product_price']) ? $item['product_price'] : '0';

                        // Remove the ₹ symbol and convert to a number
                        $numeric_price = (float) str_replace('₹', '', $price);

                        // Calculate subtotal if quantity is set
                        $subtotal = $numeric_price * $quantity;
                        $total += $subtotal;
                    ?>
                        <tr>
                            <td><?= htmlspecialchars($item['product_name']); ?></td>
                            <td>₹<?= number_format($numeric_price, 2); ?></td>
                            <td><?= htmlspecialchars($quantity); ?></td>
                            <td>₹<?= number_format($subtotal, 2); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3" class="total">Total</td>
                        <td class="total">₹<?= number_format($total, 2); ?></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <!-- Confirmation Button -->
    <div class="button-container">
        <button onclick="window.location.href='index.php'">Go to Home</button>
    </div>
</body>
</html>
