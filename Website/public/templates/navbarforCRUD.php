<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="css/navbar.css">
    <script src="https://kit.fontawesome.com/85df64fd4d.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar">
        <div class="logo">
            <img src="../../public/images/greenswap.png" alt="GreenSwap Logo">
        </div>
        <ul class="nav-links">
            <li><a href="../../public/index.php" class="active"><i class="fas fa-home"></i> Home</a></li>
            <li class="dropdown">
                <a href="#"><i class="fas fa-list"></i> Market <i class="fa-solid fa-caret-down"></i></a>
                <div class="Listings-Dropdown">
                    <a href="../../public/Marketplace.php">All Products</a>
                    <a href="../../public/productpages/Plants.php">Plants</a>
                    <a href="../../public/productpages/Toys.php">Toys</a>
                    <a href="../../public/productpages/Indoor_Furniture.php">Indoor Furniture</a>
                    <a href="../../public/productpages/Outdoor_Furniture.php">Outdoor Furniture</a>
                    <a href="../../public/productpages/Clothing.php">Clothing</a>
                    <a href="../../public/productpages/Books.php">Books</a>
                    <a href="../../public/productpages/Cars.php">Cars</a>
                </div>
            </li>
            <li><a href="../../public/sustainability.php"><i class="fas fa-recycle"></i> Sustainability</a></li>
            <li class="dropdown">
                <a href="#"><i class="fas fa-list"></i> Listing <i class="fa-solid fa-caret-down"></i></a>
                <div class="Listings-Dropdown">
                    <a href='createProduct.php'>List New Product</a>
                    <a href="#">Edit Existing Product</a>
                    <a href="#">Delete Existing Product</a>
                </div>
            </li>
        </ul>

        <!-- TODO Searchbar - Take all product names and allow the user to search -->
        <div class="search-bar">
            <input type="text" placeholder="Search items or categories">
            <button><i class="fas fa-search"></i></button>
        </div>

        <?php
        if (isset($_SESSION['Active']) && $_SESSION['Active'] === true) {
            echo '<li class="dropdown">
                    <p class="username">Welcome, ' . htmlspecialchars($_SESSION['FirstName']) . '! <i class="fa-solid fa-caret-down"></i></p>
                    <div class="Listings-Dropdown">
                        <A href="../../public/cart.php">View Cart</a>
                        <a href="../../public/Logout.php">Logout</a>
                    </div>
                </li>';
        } else {
            echo '<div class="nav-buttons">
                    <button class="join"><a href="signup.php">Get Started</a></button>
                    <button class="login"><a href="login.php">Login</a></button>
                 </div>';
        }
        ?>
    </nav>
</body>

</html>
