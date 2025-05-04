<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>User Listings</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/userListing.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>


<body>
    <header>
        <?php require __DIR__ . '/../public/templates/navbar.php'; ?>
        <?php require __DIR__ . '/../private/functions.php'; ?>
    </header>

    <?php if ($_SESSION['Active'] == false) {
    header("location: ../../public/login.php");
}
?>

<br>
<br>

    <h1>Your Listings</h1>
    <table class="product-table">
        <thead>
            <tr>
                <th>Listing Image</th>
                <th>Item Name</th>
                <th>Created Date</th>
                <th>View Product</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php getUserItems(); ?>
        </tbody>
    </table>
</body>

</html>