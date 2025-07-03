<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Profile</title>
    <link rel="stylesheet" href="../css/book.css">
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
                <a href="index.php">Home
                </a>
                </li>
            <li>
                <a href="aboutus.html" target="_blank">About us
                </a>
                </li>
            <li>
                <a href="dinein.html" target="_blank" style="color: #ff4500;">Dine in
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
            <a href="cart.html">
            <i class="fa-solid fa-bag-shopping"></i>
            <p>Cart</p>
            </a>
        </div>
    </div>

    </div>

   </nav>
   </header>
   <section class="booking">
        <h2>Select your booking details</h2>
        <div class="booking-options">
            <div>
                <label for="date">Date:</label>
                <input type="date" id="date" value="2023-11-14">
            </div>
            <div>
                <label for="guests">Guests:</label>
                <select id="guests">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    </select>
            </div>
            <div>
                <label for="time">Time:</label>
                <select id="time">
                    <option value="11:30 AM">11:30 AM</option>
                    </select>
            </div>
        </div>
        <button class="book-button">Proceed to Cart</button>
   </section>