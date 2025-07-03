<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Set pre-order details in session
    $_SESSION['pre_order'] = [
        'order_date' => $_POST['order_date'],
        'order_time' => $_POST['order_time']
    ];

    $_SESSION['cart'] = [];

    // Redirect to the pre-order confirmation page
    header('Location: order_confirmation_preorder.php');
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pre-order Form</title>
    <style>
        /* Orangish-red themed styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #fff5f2; /* Light background with a soft orangish tint */
        }

        h1 {
            color: #FF4500; /* Orangish-red color */
            text-align: center;
        }

        form {
            background-color: white;
            padding: 20px;
            margin: 0 auto;
            width: 300px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #FF4500; /* Orangish-red color */
            font-weight: bold;
        }

        input[type="date"], input[type="time"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #FF4500; /* Orangish-red button */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: bold;
        }

        button:hover {
            background-color: #e03d00; /* Darker orangish-red on hover */
        }
    </style>
</head>
<body>
    <h1>Pre-order Your Meal</h1>
    <form action="" method="POST"> 
        <label for="order_date">Delivery Date:</label>
        <input type="date" id="order_date" name="order_date" required>

        <label for="order_time">Delivery Time:</label>
        <input type="time" id="order_time" name="order_time" required>

        <button type="submit">Submit Pre-order</button>
    </form>
</body>
</html>
