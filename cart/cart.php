<?php 
session_start();

// Retrieve the cart from the session, or initialize it as an empty array if not set
$cart = $_SESSION['cart'] ?? [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>
    <style>
        
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #fff5f2; 
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #FF4500; 
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: #ffe0d1; /* Soft orangish-red for headers */
            color: #FF4500;
            font-weight: bold;
        }

        .total {
            font-weight: bold;
            background-color: #ffe0d1;  
            color: #FF4500;
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        .button-container form button {
            padding: 10px 20px;
            background-color: #FF4500; 
            color: white;
            border: none;
            border-radius: 5px;
            margin: 0 10px;
            cursor: pointer;
            font-size: 1rem;
        }

        .button-container form button:hover {
            background-color: #e03e00; 
        }

        .button-container a {
            text-decoration: none;
            padding: 10px 20px;
            background-color: #FF4500; 
            color: white;
            border-radius: 5px;
            margin: 0 10px;
            display: inline-block;
            font-size: 1rem;
        }

        .button-container a:hover {
            background-color: #e03e00; 
        }

        .empty-cart {
            text-align: center;
            font-size: 1.2em;
            color: #FF4500; 
        }
    </style>
</head>
<body>
    <h1>Your Cart</h1>

    <?php if (count($cart) > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Pre-order Delivery Date</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $total = 0;
                foreach ($cart as $index => $item): 
                    
                    $item_price = 150.00;
                    $quantity = isset($item['quantity']) ? intval($item['quantity']) : 1;
                    $subtotal = $item_price * $quantity;
                    $total += $subtotal;
                ?>
                    <tr>
                        <td><?= htmlspecialchars($item['product_name']); ?></td>
                        <td>₹<?= number_format($item_price, 2); ?></td>
                        <td><?= htmlspecialchars($quantity); ?></td>
                        <td>
                            <!-- Display pre-order date -->
                            <?= htmlspecialchars($item['delivery_date'] ?? 'Not Set'); ?>
                        </td>
                        <td>₹<?= number_format($subtotal, 2); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4" class="total">Total</td>
                    <td class="total">₹<?= number_format($total, 2); ?></td>
                </tr>
            </tfoot>
        </table>

        <div class="button-container">
            <!-- Options for Order Now or Pre-order -->
            <form action="checkout.php" method="POST" style="display: inline;">
                <button type="submit" name="order_type" value="order_now">Order Now</button>
            </form>
            <form action="checkout_preorder.php" method="POST" style="display: inline;">
                <button type="submit" name="order_type" value="pre_order">Pre-order</button>
            </form>
            <a href="menu.php">Continue Shopping</a>
        </div>
    <?php else: ?>
        <p class="empty-cart">Your cart is empty. Go back to the <a href="../food delivery/menu.php">menu</a>.</p>
    <?php endif; ?>
</body>
</html>
