<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>PHP Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $_SESSION["useremail"] = $_POST["useremail"];
            $_SESSION["password"] = $_POST["password"];
            if ($_SESSION["useremail"] && $_SESSION["password"]) {
                header("Location: http://localhost/PHP_crud/index.php");
            }
        }
    ?>
    <div class="login-box">
        <h2>Login</h2>
        <form action="webfile.php" method="post">
            <div class="user-box">
                <input type="text" name="useremail">
                <label>Email</label>
            </div>
            <div class="user-box">
                <input type="password" name="password">
                <label>Password</label>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>

</body>

</html>