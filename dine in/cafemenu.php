<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Listing</title>
    <link rel="stylesheet" href="../css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>
<header>
        <nav>
         <div class="nav-left">
     
             <img class="logo"src="../images\imagekalogo.jpg" alt="logo">
             <span class="website-name">
                 <img src="../images/text.jpg" height="100px">
             </span>
             <ul class="nav-content">
                 <li>
                     <a href="index.html" target="_blank">Home
                     </a>
                     </li>
                 <li>
                     <a href="aboutus.html" target="_blank">About us
                     </a>
                     </li>
                 <li>
                     <a href="dinein.html" target="_blank">Dine in
                     </a>
                     </li>
     
             </ul>
         </div>
         
         <div class="nav-right">
             <div class="search-bar">
                 <i class="fa-solid fa-magnifying-glass"></i>
                 <input type="text" placeholder="Search for restaurant and food">
             </div>
         
             <!-- Profile with Dropdown -->
             <div class="profile-dropdown">
                 <a href="#" class="profile-link">
                     <i class="fa-solid fa-user"></i>
                     <p>Profile</p>
                 </a>
                 <ul class="dropdown-options">
                     <li><a href="profile.html">Signup/SignIn</a></li>
                     <li><a href="userdashborad.html">User dashboard</a></li>
                 </ul>
                 <script src="../js/home.js"></script>
             </div>
             <div>
                 <i class="fa-solid fa-bag-shopping"></i>
                 <a href="cart.html">
                 <p>Cart</p>
             </a>
             </div>
         </div>
     
         </div>
     
        </nav>
        </header>
        <div class="menu-container">
    <div class="restaurant-info">
        <h2>The Eatery Cheese</h2>
        <p>25-30 mins</p>
        <p>Italian, Fast Food, Cheese</p>
    </div>

    <?php
    session_start(); // Ensure the session is started at the top

    // Fetch the user's dietary preference from the session or set it to 'All' by default
    $user_dietary_preference = $_SESSION['user_diet'] ?? 'All'; // 'All' means no filtering

    // Menu items array (example data)
    $cheese_lab_menu = [
        [
            "id" => 1, // Add a unique ID for each item
            "name" => "Cheesy Garlic Bread",
            "price" => "₹150",
            "image" => "food delivery\images\cheese1.jpg",
            "dietary_label" => "Vegetarian"
        ],
        [
            "id" => 2,
            "name" => "Four Cheese Pizza",
            "price" => "₹400",
            "image" => "images/four_cheese_pizza.jpg",
            "dietary_label" => "Non-Vegetarian"
        ],
        [
            "id" => 3,
            "name" => "Mac and Cheese",
            "price" => "₹200",
            "image" => "images/mac_and_cheese.jpg",
            "dietary_label" => "Vegetarian"
        ],
        [
            "id" => 4,
            "name" => "Cheese Fondue",
            "price" => "₹350",
            "image" => "images/cheese_fondue.jpg",
            "dietary_label" => "Vegetarian"
        ],
        [
            "id" => 5,
            "name" => "Cheese Stuffed Mushrooms",
            "price" => "₹250",
            "image" => "images/cheese_stuffed_mushrooms.jpg",
            "dietary_label" => "Vegan"
        ],
        [
            "id" => 6,
            "name" => "Cheesy Nachos",
            "price" => "₹180",
            "image" => "images/cheesy_nachos.jpg",
            "dietary_label" => "Non-Vegetarian"
        ],
        [
            "id" => 7,
            "name" => "Mozzarella Cheese Sticks",
            "price" => "₹220",
            "image" => "images/cheese_sticks.jpg",
            "dietary_label" => "Vegetarian"
        ],
        [
            "id" => 8,
            "name" => "Cheese Fries",
            "price" => "₹150",
            "image" => "images/cheese_fries.jpg",
            "dietary_label" => "Vegetarian"
        ],
        [
            "id" => 9,
            "name" => "Cheese Pull Bread",
            "price" => "₹280",
            "image" => "images/cheese_pull_bread.jpg",
            "dietary_label" => "Vegetarian"
        ],
        [
            "id" => 10,
            "name" => "Cheese Burst Pasta",
            "price" => "₹350",
            "image" => "images/cheese_burst_pasta.jpg",
            "dietary_label" => "Vegetarian"
        ]
    ];
    ?>
    <!-- Loop through the menu items and display based on user's dietary preference -->
<?php foreach ($cheese_lab_menu as $item): ?>
    <?php if ($user_dietary_preference === 'All' || $item['dietary_label'] === $user_dietary_preference): ?>
        <div class="menu-item">
            <img src="<?php echo $item['image']; ?>" alt="<?php echo htmlspecialchars($item['name']) . ' - ' . htmlspecialchars($item['dietary_label']); ?>">
            <div class="menu-item-info">
                <h2><?php echo htmlspecialchars($item['name']); ?></h2>
                <p class="price">₹<?php echo htmlspecialchars($item['price']); ?></p>

                <!-- Form to add item to cart without pre-order date -->
                <form action="../cart/add_to_cart.php" method="POST">
                    <input type="hidden" name="product_name" value="<?php echo htmlspecialchars($item['name']); ?>">
                    <input type="hidden" name="product_price" value="<?php echo htmlspecialchars($item['price']); ?>">
                    <!-- Submit Button to Add Item to Cart -->
                    <button type="submit" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>
    <?php endif; ?>
<?php endforeach; ?>

