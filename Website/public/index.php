<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Home</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/index.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>
    <body>

        <header>
            <?php require 'navbar.html'; ?> 
        </header>

        <br>
        <br>
        <br>
        <br>

        <div class = "image-container-header">
            <img src="images\Home_Image.jpg">
            <div class = "Front_page_info">
                <h1>GreenSwap</h1>
            
                <h2> Swap, Save, Sustain, Together</h2>
                
                <p> Join the marketplace that turns pre-loved goods into new opportunities with reducing waste.</p>

                <div id = "get-started-button">
                    <button id = "get-started-button"><a href = "signup.html" id = "get-started-button"> Get Started! </a></button>
                </div>

                <div id = "browse-listings-button">
                    <button id = "browse-listings-button"><a href = "#"id = "browse-listings-button"> Browse Listings </a></button>
                </div>
            </div>
        </div>

        <br>
        <br>

        <h1><strong>Featured Listings</strong></h1>

        <div class="image-container">
        <?php
            include __DIR__ . '/../private/database_connection.php';
            $sql = "SELECT product_name, product_desc, price, product_image_link FROM products LIMIT 10";
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

    <br>
    <br>

        <h1>How It Works</h1>
        <div class="how-it-works">
        <?php
            include __DIR__ . '/../private/database_connection.php';
            $sql = "SELECT photo_link, title, text FROM howitworks LIMIT 3";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="works">
                        <img src="'. $row["photo_link"] .'" width="120" height="120" alt = "' . $row["photo_link"] . '">
                        <h4>' . $row["title"] . '</h4>
                        <p>'. $row["text"] .'</p>
                </div>';
                }
            }

            $conn->close();
            ?>
 
        </div>

            <br>
            <br>

        <footer>
            <?php require 'footer.html' ?>
        </footer>
        
    </body>
</html>