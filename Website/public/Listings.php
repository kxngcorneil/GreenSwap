<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Item</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/listings.css'>
    <script src='main.js'></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    

<?php require 'navbar.html' ?>

<br>
<br>
<br>
<br>

    <div class="image-container">
        
        <?php
            include 'database_connection.php';
            $sql = "SELECT product_name, product_desc, price, product_image_link FROM products";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo ' 
                    <div class="image-box">
                        <img src="' . $row["product_image_link"] . '" width="340" height="340" alt="' . $row["product_name"] . '">
                        <h3>' . $row["product_name"] . '</h3> 
                        <p>' . $row["product_desc"] . '</p>
                        <div class="buy">
                            <div class="price"><h3>€' . number_format($row["price"], 2) . '</h3></div>
                            <div class="buy-button"><button><a href = "#"><h3>Buy</h3></a></button></div>
                        </div>  
                    </div>'; 
                }
            }

            $conn->close();
        ?>
    </div>

</body>
</html>