<?php

/**
 * Takes an SQL quary and executes in the SQL database searches by Category Name so can be reused for each category of products.
 * This function is used on the Listings page and limits the amount of listings selected to 12 this is hardcoded is for easy changes due to
 * each member of the team using a different sized monitor and can be changed to suit their size monitor.
 * @param mixed $categoryName
 * @return void
 */
function getItems($categoryName) {
        include __DIR__ . '/../private/database_connection.php';
        $stmt =  $conn -> prepare ("SELECT product_id,product_name, product_desc, price, product_image_link FROM products WHERE product_category = ? LIMIT 12;");
        $stmt -> bind_param("s", $categoryName);
        $stmt -> execute();
        $result = $stmt -> get_result();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo ' 
                    <div class="image-box">
                        <img src=" images\productimages' . $row["product_image_link"] . '" width="290" height="240" alt="' . $row["product_name"] . '">
                        <h3>' . $row["product_name"] . '</h3> 
                        <p>' . $row["product_desc"] . '</p>
                        <div class="buy">
                            <div class="price"><h3>€' . number_format($row["price"], 2) . '</h3></div>
                            <div class="buy-button"><a href = "itemListing.php?id=' . $row["product_id"] . '"><button><h3>Buy</h3></button></a></div>
                        </div>  
                    </div>';
            }
        }

        $conn->close();

    }
/**
 * Searches the DB howitworks table and takes the three rows in that table and displays them to the index page under the How It Works section
 * @return void
 */
function getHowitWorks() {
    include __DIR__ . '/../private/database_connection.php';

    $sql = "SELECT photo_link, item_name, item_desc FROM howitworks LIMIT 3";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="works">
                    <img src="' . htmlspecialchars($row["photo_link"]) . '" width="120" height="120" alt="' . htmlspecialchars($row["item_name"]) . '">
                    <h4>' . htmlspecialchars($row["item_name"]) . '</h4>
                    <p>' . htmlspecialchars($row["item_desc"]) . '</p>
                </div>';
        }
    } else {
        echo "<p>No items found in 'How It Works'.</p>";
    }

    $conn->close();
}
/**
 * SQL quary to get all of the listings where the product category matches the paramater set.
 * Used for indivugal listing pages to list all products for that category. 
 * @param mixed $categoryName
 * @return void
 */
function getAllItems($categoryName) {
        include __DIR__ . '/../private/database_connection.php';
        $sql = "SELECT product_id,product_name, product_desc, price, product_image_link FROM products WHERE product_category = ?";
        $stmt =  $conn -> prepare($sql);
        $stmt -> bind_param("s", $categoryName);
        $stmt -> execute();
        $result = $stmt -> get_result();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="image-box">
                        <img src=" ..\images\productimages' . $row["product_image_link"]. '" width="290" height="240" alt="' . $row["product_name"]. '">
                        <h3>' . $row["product_name"] . '</h3> 
                        <p>' . $row["product_desc"] . '</p>
                        <div class="buy">
                            <div class="price"><h3>€' . number_format($row["price"], 2) . '</h3></div>
                            <div class="buy-button">
                                <a href="..\itemListing.php?id=' . $row["product_id"] . '">
                                    <button><h3>Buy</h3></button>
                                </a>
                            </div>
                        </div>
                    </div>';
            }
        } else {
            echo "<p>No products found in this category.</p>";
        }

        $conn->close();

    }

/**
 * Takes information from the ProductID tag stored within the URL to find the product and fill the information to the page.
 * Used for the itemListing.php page.
 * @param mixed $productID
 * @return void
 */
function fillInformation($productID) {
    include __DIR__ . '/../private/database_connection.php';

    $stmt = $conn->prepare("SELECT product_id, product_name, product_desc, price, product_image_link, product_category FROM products WHERE product_id = ?");
    $stmt->bind_param("i", $productID);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
        echo '
        <div class = "left-content">
            <img src=" images\productimages' . $row["product_image_link"]. '" width="290" height="240" alt="' . $row["product_name"]. '">
            <br>
            <br>
        </div>


        <div class="right-content"> 
            <div class="text">
                <h2 class = itemName>'. $row["product_name"] . '</h2>

                <p class="itemPrice">€' . number_format($row["price"], 2) . '</p>

                <div class="desc">
                    <p> '. $row["product_desc"] . '</p>
                </div>

                <div class= Iteminfo>        
                    <table>
                        <tr>
                            <td>
                                <i class="fa-solid fa-layer-group"></i>
                            </td>
                            <td> Category </td>
                            <td>'. $row['product_category'] .' </td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fa-solid fa-location-dot"></i>
                            </td>
                            <td> Location </td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fa-solid fa-truck"></i>
                            </td>
                            <td> Delivery Method </td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fa-solid fa-arrow-right-arrow-left"></i>
                            </td>
                            <td> Item Swap </td>
                        </tr>
                    </table>
                </div>

            <div>   
                <p class="buy"><strong>ADD TO CART</strong></p>
            </div>
</div>';
        }

    } else {
        echo "<p>Product not found.</p>";
    }

    $stmt->close();
    $conn->close();
}
/**
 * Used to check if the column is_featured True (1) or False (0) if true echo information to the page 
 * @return void
 */
function getFeaturedItems() {
        include __DIR__ . '/../private/database_connection.php';
        $sql = "SELECT product_id,product_name, product_desc, price, product_image_link, is_featured FROM products WHERE is_featured = 1";
        $stmt =  $conn -> prepare($sql);
    
        $stmt -> execute();
        $result = $stmt -> get_result();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                    echo '<div class="image-box">
                            <img src=" images\productimages' . $row["product_image_link"]. '" width="290" height="240" alt="' . $row["product_name"]. '">
                            <h3>' . $row["product_name"] . '</h3> 
                            <p>' . $row["product_desc"] . '</p>
                            <div class="buy">
                                <div class="price"><h3>€' . number_format($row["price"], 2) . '</h3></div>
                                <div class="buy-button">
                                    <a href="..\itemListing.php?id=' . $row["product_id"] . '">
                                        <button><h3>Buy</h3></button>
                                    </a>
                                </div>
                            </div>
                        </div>';
            }
        }
        else {
            echo "<p>No products found in this category.</p>";
        }

        $conn->close();

    };


function getProductsforSearchbar() {
    include __DIR__ . '/../private/database_connection.php';
    $sql = 'SELECT product_name, product_id FROM products';
    $stmt =  $conn -> prepare($sql);
    $stmt -> execute();
    $result = $stmt -> get_result();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<li class="product"><a href="..\itemListing.php?id=' . $row["product_id"] . '"></a>' . $row["Product_name"] . "</li>";
    }
};
}

?>

   
