<?php require __DIR__ . '../../../public/templates/navbarforCRUD.php'; ?>
<?php

try {
    if (isset($_POST["submit"])) {
        require '../database_connection.php';
        $conn = new PDO($dsn, $username, $password, $options);
        $conn->exec("USE Greenswap");

        $targetDir = __DIR__ . '/../../public/images/productImages/';
        $imageName = basename($_FILES['productImages']['name']);
        $imagePath = $targetDir . $imageName;

        if (move_uploaded_file($_FILES['productImages']['tmp_name'], $imagePath)) {
            echo "File uploaded to: $imagePath";
        } else {
            echo "File upload failed.";
        }

        $newProduct = [
            "productName" => $_POST["productName"],
            "productPrice" => $_POST["productPrice"],
            "productDesc" => $_POST["productDesc"],
            "productImage" => 'images/productImages/' . $imageName,
            "productCategory" => $_POST["productCategory"],
            "deliveryMethod" => $_POST["deliveryMethod"]
        ];

        $sql = "INSERT INTO products (product_name, product_desc, price, product_image_link, product_category, delivery_method)
                VALUES (:productName, :productDesc, :productPrice, :productImage, :productCategory, :deliveryMethod)";

        $stmt = $conn->prepare($sql);
        $stmt->execute($newProduct);
    }
} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}
?>

<html>

<head>
    <link rel='stylesheet' type='text/css' media='screen' href='css/navbar.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/footer.css'>
    <link rel="icon" type="image" href="images/favicon.ico">
</head>

</html>

<br><br><br><br><br>


<h2>Create a new Product</h2>

<form method="POST" enctype="multipart/form-data">

    <label for="productName">Product Name:</label>
    <input type="text" name="productName" id="productName" required>
    <br><br>

    <label for="productPrice">Product Price: </label>
    <input type="text" name="productPrice" id="productPrice" required>
    <br><br>

    <label for="productDesc">Product Description: </label>
    <input type="text" name="productDesc" id="productDesc" required>
    <br><br>

    <label for="productImages">Product Image</label>
    <input type="file" name="productImages" id="productImages">
    <br><br>

    <label for="productCategory">Category</label>
    <select name="productCategory">
        <option value="Books">Books</option>
        <option value="Toys">Toys</option>
        <option value="Clothing">Clothing</option>
        <option value="Plants">Plants</option>
        <option value="Indoor_Furniture">Indoor Furniture</option>
        <option value="Outdoor_Furniture">Outdoor Furniture</option>
    </select>
    <br><br>

    <label for="location">Location</label>
    <input type="text" name="location" id="location">
    <br><br>

    <label for="deliveryMethod">Delivery Method</label>
    <select name="deliveryMethod">
        <option value="Home_Dropoff">Home Dropoff</option>
        <option value="Collection">Collection</option>
        <option value="Post">Post</option>
    </select>
    <br><br>

    <lable for="isSwapable"> Do you wish to Swap your Item?</lable>
    <input type="checkbox" name="isSwapable" id="isSwapable">
    <br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<br><br>
<a href="../../public/index.php">Back to home</a>

<?php require __DIR__ . '../../../public/templates/footer.php'; ?>