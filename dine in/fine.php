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
$restaurants = [
    [
        "name" => "The Royal Feast",
        "cuisine" => "French, European, Fine Dining",
        "cost" => "₹3000 for two",
        "rating" => "4.9",
        "distance" => "1.2 km",
        "discount" => "Flat 10% OFF",
        "image" => "../images/royalfeast.jpg",
        "link" => "food_delivery/royalfeast.php",
    ],
    [
        "name" => "Opulence",
        "cuisine" => "Italian, Mediterranean, Fine Dining",
        "cost" => "₹3500 for two",
        "rating" => "4.8",
        "distance" => "3.0 km",
        "discount" => "Flat 15% OFF",
        "image" => "../images/opulence.jpg",
        "link" => "food_delivery/opulence.php",
    ],
    [
        "name" => "The Gourmet Garden",
        "cuisine" => "Modern American, Fine Dining",
        "cost" => "₹4000 for two",
        "rating" => "4.7",
        "distance" => "2.5 km",
        "discount" => "Flat 20% OFF",
        "image" => "../images/gourmetgarden.jpg",
        "link" => "food_delivery/gourmetgarden.php",
    ],
    [
        "name" => "Le Grand Luxe",
        "cuisine" => "French, Seafood, Fine Dining",
        "cost" => "₹5000 for two",
        "rating" => "4.9",
        "distance" => "1.8 km",
        "discount" => "Flat 5% OFF",
        "image" => "../images/grandluxe.jpg",
        "link" => "food_delivery/grandluxe.php",
    ],
    [
        "name" => "The Velvet Table",
        "cuisine" => "Indian, Contemporary, Fine Dining",
        "cost" => "₹2500 for two",
        "rating" => "4.6",
        "distance" => "3.2 km",
        "discount" => "Flat 10% OFF",
        "image" => "../images/velvettable.jpg",
        "link" => "food_delivery/velvettable.php",
    ],
    [
        "name" => "Taste of Heaven",
        "cuisine" => "Contemporary European, Fine Dining",
        "cost" => "₹4500 for two",
        "rating" => "4.8",
        "distance" => "2.0 km",
        "discount" => "Flat 15% OFF",
        "image" => "../images/tasteofheaven.jpg",
        "link" => "food_delivery/tasteofheaven.php",
    ],
    [
        "name" => "Euphoria",
        "cuisine" => "Mediterranean, Fine Dining",
        "cost" => "₹4200 for two",
        "rating" => "4.7",
        "distance" => "2.8 km",
        "discount" => "Flat 20% OFF",
        "image" => "../images/euphoria.jpg",
        "link" => "food_delivery/euphoria.php",
    ],
    [
        "name" => "The Majestic Plate",
        "cuisine" => "Continental, Fine Dining",
        "cost" => "₹3800 for two",
        "rating" => "4.8",
        "distance" => "1.5 km",
        "discount" => "Flat 25% OFF",
        "image" => "../images/majesticplate.jpg",
        "link" => "food_delivery/majesticplate.php",
    ]
];
?>

<div class="restaurant-list">
    <?php foreach ($restaurants as $restaurant): ?>
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
