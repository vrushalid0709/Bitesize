<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Profile</title>
    <link rel="stylesheet" href="../css/inforest.css">
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
                <a href="index.php" style="color: #ff4500;">Home
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
            <a href="cart.html">
            <i class="fa-solid fa-bag-shopping"></i>
            <p>Cart</p>
            </a>
        </div>
    </div>

    </div>

   </nav>
   </header>
   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Gallery</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<h1>Mystic Flavours</h1>
<p>Continental, Modern Indian, Asian, Oriental</p>
<p>Warje, Pune</p>
<p>Open now - 11am-2:30pm, 7pm-11pm (Today)</p>
<p>+918888289126</p>
<div><br>
<a href="#">Overview </a>
<a href="#">order online</a>
<a href="#">Reviews</a>
<a href="#">Photos</a>
<a href="booking.php">book a table</a>
</div>
<div><br>
<select>
<option>Tomorrow</option>
</select>
<select>
<option>1 guest</option>
</select>
<select>
<option>Lunch</option>
</select>
</div>
</body>


<div class="container">
    <h2>Select Slot</h2>
    <div class="slot">12:00 PM<br>2 offers</div>
    <div class="slot selected">1:00 PM<br>2 offers</div>
    <div class="slot">2:00 PM<br>2 offers</div>

    <h2>Review Booking Details</h2>
    <div class="details">
        <img src="calendar-icon.png" alt="Calendar icon">
        <p>Tomorrow 15 Nov at 1:00 PM</p>
    </div>
    <div class="details">
        <img src="guest-icon.png" alt="Guest icon">
        <p>1 guest</p>
    </div>
    <div class="details">
        <img src="location-icon.png" alt="Location icon">
        <p>Mystic Flavours, Warje, Pune</p>
    </div>
    <div class="offer">
        <img src="offer-icon.png" alt="Offer icon">
        <p>Flat 25% OFF</p>
        <p>Pay bill between 1:00 PM - 5:00 PM</p>
    </div>
</div>
<div class="container">
  <h2 class="title">Booking summary</h2>

  <div class="item">
    <div class="item-name">Cover charge</div>
    <div class="item-price">50 rs</div>
  </div>
  
<div class="item">
    <div> <span>This amount will be adjusted in your final bill</span></div>
  </div>
  
  <div class="item">
    <div class="item-name">Sub total</div>
    <div class="item-price">50 rs</div>
  </div>

  <div class="item">
    <div class="item-name">To be paid</div>
    <div class="item-price">50 rs</div>
  </div>

</div>

    <!DOCTYPE html>
<html>
<head>
<h2>Terms and conditions</h2>
<ul>
<li>Payement should be made through restaurant</li>
<li>An internet handling fee will be applied as a convenience fee during final bill payment</li>
<li>Cover charges, if charged, will be adjusted in your final bill while payment via bitesize app</li>
<li>Extra offer or a freebie, if applicable, can be availed ONLY by pre-booking a slot at the restaurant</li>
<li>Restaurants have limited slots with extra offers or freebies</li>
<li>Cover charges cannot be refunded if slot is cancelled within 3 hours of slot start time</li>
<li>An offer on an app cannot be clubbed with other offers running at the restaurant</li>
<li>This offer may not apply to bottled drinks, buffets, pre-discounted platters/combos/thalis, select seasonal or seafood items, tobacco products, or special menus at the restaurant's discretion</li>
<li>bitesize has no role to play on taxes and charges levied by the Government and restaurants</li>
<li>Additional service charge on the bill is up to restaurant's discretion</li>
<li>The offer will only be honored for selected number of guests or fewer</li>
<li>Other T&Cs may apply</li>
</ul>
<button>Payement should be made through restaurant</button>
</body>
</html>