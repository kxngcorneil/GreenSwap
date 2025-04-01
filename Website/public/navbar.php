<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="css\navbar.css">
    <script src="https://kit.fontawesome.com/85df64fd4d.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <img src="images/logo_whitebackground.png" alt="GreenSwap Logo">
        </div>
        <ul class="nav-links">
            <li><a href="index.php" class="active"><i class="fas fa-home"></i> Home</a></li>
            <li><a href=""><i class="fas fa-store"></i> Market</a></li>
            <li><a href="#"><i class="fas fa-recycle"></i> Sustainability</a></li>
            <li><a href="Listings.php"><i class="fas fa-list"></i> Listing</a></li>
        </ul>
        <div class="search-bar">
            <input type="text" placeholder="Search items or categories">
            <button><i class="fas fa-search"></i></button>
        </div>
        <div class="nav-buttons">
            <button class="join"><a href="signup.html">Get Started</a></button>
            <button class="login"><a href="login.html">Login</a></button>
        </div>
    </nav>
</body>
</html>
