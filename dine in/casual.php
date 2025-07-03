<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Listing</title>
    <link rel="stylesheet" href="../css/restaurant.css">
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
                 <script src="js/home.js"></script>
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
        
          <div class=container>
        <h1>Restaurants Near You</h1>
            <div class="filters">
                <button class="filter-button">Filters</button>
                <button class="filter-button">Offers</button>
                <button class="filter-button">Rating: 4.5+</button>
                <button class="filter-button">Pet Friendly</button>
                <button class="filter-button">Outdoor Seating</button>
            </div>
          </div>
          <?php
$casual_dining = [
    [
        "name" => "The Casual Bistro",
        "cuisine" => "Italian, Casual Dining, Pasta",
        "cost" => "₹800 for two",
        "rating" => "4.5",
        "distance" => "2.2 km",
        "discount" => "Flat 15% OFF",
        "image" => "../images/casualbistro.jpg",
        "link" => "food_delivery/casualbistro.php",
    ],
    [
        "name" => "Chill & Grill Cafe",
        "cuisine" => "Grilled Food, Sandwiches, Coffee",
        "cost" => "₹750 for two",
        "rating" => "4.8",
        "distance" => "3.0 km",
        "discount" => "Flat 10% OFF",
        "image" => "../images/chillgrill.jpg",
        "link" => "food_delivery/chillgrill.php",
    ],
    [
        "name" => "Green Leaf Cafe",
        "cuisine" => "Salads, Smoothies, Healthy Snacks",
        "cost" => "₹600 for two",
        "rating" => "4.4",
        "distance" => "2.5 km",
        "discount" => "Flat 20% OFF",
        "image" => "../images/greenleafcafe.jpg",
        "link" => "food_delivery/greenleafcafe.php",
    ],
    [
        "name" => "Baguette & Co.",
        "cuisine" => "French, Sandwiches, Bakery",
        "cost" => "₹700 for two",
        "rating" => "4.6",
        "distance" => "1.6 km",
        "discount" => "Flat 10% OFF",
        "image" => "../images/baguetteco.jpg",
        "link" => "food_delivery/baguetteco.php",
    ],
    [
        "name" => "The Diner's Corner",
        "cuisine" => "American, Comfort Food",
        "cost" => "₹850 for two",
        "rating" => "4.7",
        "distance" => "2.0 km",
        "discount" => "Flat 15% OFF",
        "image" => "../images/dinerscorner.jpg",
        "link" => "food_delivery/dinerscorner.php",
    ],
    [
        "name" => "The Urban Grill",
        "cuisine" => "Grilled Meats, BBQ, Comfort Food",
        "cost" => "₹950 for two",
        "rating" => "4.6",
        "distance" => "2.4 km",
        "discount" => "Flat 10% OFF",
        "image" => "../images/urbangrill.jpg",
        "link" => "food_delivery/urbangrill.php",
    ]
];
?>

<div class="restaurant-list">
    <?php foreach ($casual_dining as $restaurant): ?>
    <div class="restaurant-card">
        <div class="discount"><?= $restaurant['discount']; ?></div>
        <img src="<?= $restaurant['image']; ?>" alt="<?= $restaurant['name']; ?>">
        <div class="restaurant-info">
            <a href="<?= $restaurant['link']; ?>">
                <h2><?= $restaurant['name']; ?></h2>
            </a>
            <p><?= $restaurant['cuisine']; ?></p>
            <p><?= $restaurant['cost']; ?></p>
            <div class="rating"><?= $restaurant['rating']; ?> ★</div>
            <p class="distance"><?= $restaurant['distance']; ?> away</p>
        </div>
    </div>
    <?php endforeach; ?>
</div>

</body>
</html>
