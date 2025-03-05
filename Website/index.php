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

            <h1>GreenSwap</h1>
        
            <h2> Swap, Save, Sustain, Together</h2>
            
            <p> Join the marketplace that turns pre-loved goods into new opportunities with reducing waste.</p>

            <div id = "get-started-button">
                <button><a href = "#"> Get Started! </a></button>
            </div>

            <div id = "browse-listings-button">
                <button><a href = "#"> Browse Listings </a></button>
            </div>
        </div>

        <br>
        <br>

        <h1><strong>Featured Listings</strong></h1>

        <div class="image-container">
        <?php
            // Define a single array with item details (Temporary) 
            // Needs to be updated when currenly just to get look of finished page
            $item_listings = array(
                "Image" => "images/placeholder.png",
                "Name" => "Fancy Pot",
                "Description" => "This is a very fancy pot and plant my grandmother gave to me. Look how nice it is.",
                "Price" => "€25.00",
            );

            // Loop 10 times to reuse the same array (Temporary) 
            // Needs to be updated when currenly just to get look of finished page
            for ($i = 0; $i < 8; $i++) {
                echo ' 
                <div class="image-box">
                    <img src="'.$item_listings["Image"].'" width="340" height="340" alt="Product Image">
                    <h3>'.$item_listings["Name"].'</h3> 
                    <p>'.$item_listings["Description"].'</p>
                    <div class="buy">
                        <div class="price"><h3>'.$item_listings["Price"].'</h3></div>
                        <div class="buy-button"><h3>Buy</h3></div>
                    </div>  
                </div>'; 
            }
        ?>
    </div>

    <br>
    <br>

        <h1>How It Works</h1>
        <div class="how-it-works">
        <?php
        $works_array = array(
            "Image" => "images/circleplaceholder.png",
            "Title" => "Placeholder",
            "Text" => "Lorem ipsum dolor sit amet Lorem ipsum"
        );
        
        for($i=0;$i < 3; $i++){
            echo '<div class="works">
                        <img src="'.$works_array["Image"].'" width="120" height="120" alt = "Image">
                        <h4>'.$works_array["Title"].'</h4>
                        <p>'.$works_array["Text"].'</p>
                </div>';
        };?>
        </div>

            <br>
            <br>

        <footer>
            <?php require 'footer.html' ?>
        </footer>
        
    </body>
</html>