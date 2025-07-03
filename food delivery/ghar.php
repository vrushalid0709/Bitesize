<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cheesy Cravings</title>
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
                 <a href="index.php" target="_blank">Home
                 </a>
                 </li>
             <li>
                 <a href="aboutus.php" target="_blank">About us
                 </a>
                 </li>
             <li>
                 <a href="dinein.php" target="_blank">Dine in
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
                 <li><a href="profile.php">Signup/SignIn</a></li>
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
            <button class="filter-button">Under 1000</button>
            <button class="filter-button">Under 30 mins</button>
        </div>
      </div>
      <?php
$ghar_ka_pyaar_places = [
    [
        "name" => "Homey Bites",
        "cuisine" => "North Indian, Home-style Cooking",
        "cost" => "₹350 for two",
        "rating" => "4.6",
        "distance" => "2.4 km",
        "discount" => "Flat 15% OFF",
        "image" => "images/homey_bites.jpg"
    ],
    [
        "name" => "Grandma's Kitchen",
        "cuisine" => "Traditional Indian, South Indian",
        "cost" => "₹500 for two",
        "rating" => "4.7",
        "distance" => "1.8 km",
        "discount" => "Flat 20% OFF",
        "image" => "images/grandmas_kitchen.jpg"
    ],
    [
        "name" => "Maa Ki Rasoi",
        "cuisine" => "North Indian, Rajasthani, Punjabi",
        "cost" => "₹400 for two",
        "rating" => "4.8",
        "distance" => "1.2 km",
        "discount" => "Flat 25% OFF",
        "image" => "images/maa_ki_rasoi.jpg"
    ],
    [
        "name" => "Auntie's Kitchen",
        "cuisine" => "Bengali, Assamese, Indian Snacks",
        "cost" => "₹300 for two",
        "rating" => "4.5",
        "distance" => "3.1 km",
        "discount" => "Flat 10% OFF",
        "image" => "images/aunties_kitchen.jpg"
    ],
    [
        "name" => "Tadka Tiffin",
        "cuisine" => "Maharashtrian, Gujarati, Jain",
        "cost" => "₹450 for two",
        "rating" => "4.6",
        "distance" => "2.6 km",
        "discount" => "Flat 15% OFF",
        "image" => "images/tadka_tiffin.jpg"
    ],
    [
        "name" => "Nani's Kitchen",
        "cuisine" => "Sindhi, Punjabi, North Indian",
        "cost" => "₹550 for two",
        "rating" => "4.9",
        "distance" => "2.9 km",
        "discount" => "Flat 30% OFF",
        "image" => "images/nanis_kitchen.jpg"
    ],
    [
        "name" => "Desi Delights",
        "cuisine" => "North Indian, Mughlai",
        "cost" => "₹600 for two",
        "rating" => "4.8",
        "distance" => "1.5 km",
        "discount" => "Flat 20% OFF",
        "image" => "images/desi_delights.jpg"
    ],
    [
        "name" => "Gharwala Swad",
        "cuisine" => "South Indian, Kerala Cuisine, Andhra",
        "cost" => "₹350 for two",
        "rating" => "4.7",
        "distance" => "3.0 km",
        "discount" => "Flat 18% OFF",
        "image" => "images/gharwala_swad.jpg"
    ]
];
?>

<div class="restaurant-list">
    <?php foreach ($ghar_ka_pyaar_places as $restaurant): ?>
    <div class="restaurant-card">
        <div class="discount"><?= $restaurant['discount']; ?></div>
        <img src="<?= $restaurant['image']; ?>" alt="<?= $restaurant['name']; ?>">
        <div class="restaurant-info">
            <a href="food.php">
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

