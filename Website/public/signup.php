<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Sign up</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/signup.css'>
    <script src='main.js'></script>
    <script src="https://kit.fontawesome.com/85df64fd4d.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="icon" type="image" href="./images/favicon.ico">
</head>
<body>

<?php
try {
    if (isset($_POST["submit"])) {
        require '../private/database_connection.php'; // Ensure this file defines $dsn, $username, $password, $options
        $conn = new PDO($dsn, $username, $password, $options);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->exec("USE Greenswap");

        $newUser = [
            "username"   => $_POST["username"],
            "email"      => $_POST["email"],
            "firstName"  => $_POST["firstName"],
            "lastName"   => $_POST["lastName"],
            "password"   => password_hash($_POST["password"], PASSWORD_BCRYPT),
            "createDate" => strval(date("Y-m-d"))
        ];

        $sql = "INSERT INTO users (username, user_password, user_firstname, user_lastname, user_email, user_account_create_date)
                VALUES (:username, :password, :firstName, :lastName, :email, :createDate)";

        $stmt = $conn->prepare($sql);
        $stmt->execute($newUser);

        echo "<p style='color: green; font-weight: bold;'>Signup successful!</p>";

        // Optional debug:
        // echo "<pre>"; print_r($newUser); echo "</pre>";
    }
} catch (PDOException $e) {
    echo "<p style='color: red;'>Database error: " . $e->getMessage() . "</p>";
}
?>

<form style="border:1px solid #ccc" method="POST">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Enter details below:</p>
    <hr>

    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Your Username" name="username" required> <br>

    <label for="fname"><b>First Name</b></label>
    <input type="text" placeholder="Enter Your First Name" name="firstName" required> <br>

    <label for="sname"><b>Surname</b></label>
    <input type="text" placeholder="Enter Your Surname" name="lastName" required> <br>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Your Email" name="email" required> <br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Your Password" name="password" required> <br>

    <div class="button">
      <button type="submit" name="submit" class="signupbtn">Sign Up</button>

      <button class="existinguser"><a href="login.html" class="existinguser">Existing User?</a></button>

      <button class="existinguser"><a href="index.php" class="existinguser">Return to Homepage</a></button>
    </div>
  </div>
</form>

</body>
</html>
