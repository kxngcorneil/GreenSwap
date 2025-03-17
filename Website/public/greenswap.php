<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='minimal.css'>
    <script src='main.js'></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    
  <div class="container">  
 
    <ul>
        <li>Text </li>
        <li>|</li>
        <li>Text </li>
        <li>|</li>
        <li>Text</li>
        <li>|</li>
        <li>Text</li>

    </ul>
</div>

    <img class="banner" src="images/greenswapbanner2.png" alt=""  srcset="">


    <h1><strong>Featured Listings</strong></h1>


    <?php 
    $listing1 = 'Rose'
    $listing2 = 'Lily'
    $listing3 = 'Sunflower'
    $listing4 = 'Orchid'
    $listing5 = 'Marigold' 
    
    $listing = array($listing1, $listing2, $listing3, $listing4)

    ?>
   
    
 

    <div class="image-container">

    <?php
    foreach ($listing as $itemlisting)
    

      echo   <div class="image-box">
        echo    <img src="images/listing1.webp" length =340 width=340 alt ="Screencap">
        echo    <h3>$itemlisting</h3> 
        echo    <p>This is a very fancy pot and plant my grandmother gave to me. Look how nice it is</p>

       echo     <div class="buy">
       echo   <div class="price"> <h3>$25.00</h3></div>
       echo  <div class="buy-button"><h3>Buy</h3> </div>
       echo     </div>
       echo </div>

      echo  <div class="image-box">
      echo      <img src="images/placeholder.png" length =340 width=340 alt ="Screencap">
        echo    <h3>ITEM</h3> 



        
            
        </div>
        ?>

        die;

        <div class="image-box">
            <img src="images/placeholder.png" length =340px width=340px alt ="Screencap">
            <h3>ITEM</h3> 
        </div>

        <div class="image-box">
            <img src="images/placeholder.png" length =340 width=340 alt ="Screencap">
            <h3>ITEM</h3> 
        </div>

        <div class="image-box">
            <img src="images/placeholder.png" length =340 width=340 alt ="Screencap">
            <h3>ITEM</h3> 
        </div>


    </div>

    <footer>
        <p>Text</p> 
    </footer>
   
    

    

</body>
</html>