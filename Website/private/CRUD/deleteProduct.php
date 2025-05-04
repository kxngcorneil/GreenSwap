<?php
session_start();
require '../database_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id'])) {
    $product_id = (int)$_POST['product_id'];
    $user = $_SESSION['Username'];

    try {
        $conn = new PDO($dsn, $username, $password, $options);

        $sql = "DELETE FROM products WHERE product_id = :product_id AND created_by = :user";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':product_id', $product_id, PDO::PARAM_INT);
        $stmt->bindParam(':user', $user, PDO::PARAM_STR);
        $stmt->execute();

        if ($stmt->rowCount()) {
            echo "Success";
        } else {
            echo "No matching product found or not authorized.";
        }

    } catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
    }

} else {
    echo "Invalid request.";
}
?>
