<?php

session_start(); // Start the session

if (isset($_POST['name'])) {
    $_SESSION['name'] = $_POST['name']; // Store the name in the session variable
} else {
    $_SESSION['name'] = ""; // Set a default value if the name is not provided
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Document</title>
</head>

<body>

    <!-- Header Section at the Top of the Page that consists of the Logo, links  & Login Button -->
    <header>
        <h2 class="logo">Traveltopia</h2>
        <nav class="navigation">
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Contact</a>
            <button class="btnLogin-popup">Login</button>
        </nav>
    </header>

    <div class="wrapper">

        <span class="icon-close">
            <ion-icon name="close"></ion-icon>
        </span>

        <!-- LOGIN -->
        <div class="form-box login">
            <h2>Login</h2>
            <form action="../pages/loginSuccess.php" method="post">

                <!-- Name -->
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" name="username" required>
                    <label for="username">Username</label>
                </div>

                <!-- Email -->
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" name="email" required>
                    <label for="email">Email</label>
                </div>

                <!-- Password -->
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="password" required>
                    <label for="password">Password</label>
                </div>

                <div class="remember-forget">
                    <label><input type="checkbox" name="remember-me">Remember me</label>
                    <a href="#">Forgot Password?</a>
                </div>

                <input type="submit" name="submit" value="Login" id="login-btn">

                <div class="login-register">
                    <p>Don't have an account?<a href="#" class="register-link">Register</a></p>
                </div>
            </form>
        </div>

        <!-- REGISTRATION -->
        <div class="form-box register">
            <h2>Registration</h2>
            <form action="../pages/registerSuccess.php" method="post">

                <!-- Name -->
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" name="name" required>
                    <label for="name">First Name</label>
                </div>

                <!-- Surname -->
                <!-- <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" name="username" required>
                    <label for="username">Last Name</label>
                </div> -->

                <!-- username -->
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" name="username" required>
                    <label for="username">Username</label>
                </div>

                <!-- email -->
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" name="email" required>
                    <label for="email">Email</label>
                </div>

                <!-- password -->
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="password" required>
                    <label for="password">Password</label>
                </div>

                <div class="remember-forget">
                    <label><input type="checkbox" name="remember-me">I agree to the terms & conditions</label>
                </div>

                <input type="submit" name="submit" value="Register" id="login-btn">

                <div class="login-register">
                    <p>Already have an account?<a href="#" class="login-link">Login</a></p>
                </div>
            </form>
        </div>
    </div>



    <script src="../js/script.js"></script>
    <!-- Icons Package -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>