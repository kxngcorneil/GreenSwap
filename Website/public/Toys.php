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


    <?php require __DIR__ . '/../private/templates/navbar.php'; ?>
    <?php require  __DIR__ . '/../private/functions.php' ?>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h2> Toys </h2>
    <div class="image-container">
        <?php getAllItems("Toys") ?>
    </div>
    <br>
    <br>

    <?php require __DIR__ . '/../private/templates/footer.php'; ?>

</body>

</html>