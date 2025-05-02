<?php
session_start();
require '../private/database_connection.php';


if (isset($_POST['submit'])) {
    $inputUsername = $_POST['username'];
    $inputPassword = $_POST['password'];

    try {
        $pdo = new PDO($dsn, $username, $password, $options);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $pdo->prepare("SELECT account_id, username, user_password, user_firstname FROM users WHERE username = :username LIMIT 1");
        $stmt->execute(['username' => $inputUsername]);

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            $_SESSION['Username'] = $user['user_firstname'];
            $_SESSION['UserID'] = $user['account_id'];
            $_SESSION['Active'] = true;

            header("Location: index.php");
            exit;
        } else {
            $error = "Invalid username or password.";
        }
    } catch (PDOException $e) {
        $error = "Database error: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel='stylesheet' href='css/login.css'>
</head>
<body>
<form method="POST" action="login.php">
    <div class="container">
        <h1>Login</h1>
        <p>Enter your username and password to log in.</p>
        <hr>

        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>  <br>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>  <br>

        <div class="button">
            <button type="submit" name="submit" class="signupbtn">Log In</button>
            <button class="newuser"><a href="register.php" class="newuser">New User?</a></button>
            <button class="newuser"><a href="index.php" class="newuser" >Return to Homepage</a></button>
        </div>

        <?php if (!empty($error)): ?>
            <p style="color:red;"><?= htmlspecialchars($error) ?></p>
        <?php endif; ?>

        <?php if (isset($_SESSION['Active']) && $_SESSION['Active'] === true): ?>
            <p>Welcome, <?= htmlspecialchars($_SESSION['Username']) ?>!</p>
        <?php endif; ?>
    </div>
</form>
</body>
</html>
