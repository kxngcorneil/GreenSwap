<?php
function getItems($categoryName) {
        include __DIR__ . '/../private/database_connection.php';
        $sql = "SELECT product_name, product_desc, price, product_image_link FROM products WHERE product_category = '$categoryName' LIMIT 12;";
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

    }
?>
<?php
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
?>

<?php

function sendEmail($emailAddress) {
    include __DIR__ . '/../private/database_connection.php';

    $sql = "INSERT INTO newsletter_mailing_list(email) VALUES ($emailaddress)";
    $result = $conn->query($sql);
}
    

    
