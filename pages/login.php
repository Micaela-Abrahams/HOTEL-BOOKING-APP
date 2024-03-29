<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Document</title>

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- EXTERNAL CSS CDN LINKS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- Header Section at the Top of the Page that consists of the Logo, links  & Login Button -->
    <header class="bg-white shadow-sm ">
        <a href="../landingPage.php" class="title-link">
            <h1 class="userWelcome">Traveltopia <?php echo $_SESSION['name']; ?></h1>
        </a>

        <nav class="navigation">
            <a href="../landingPage.php#about">About</a>
            <a href="../pages/gallery.php">Gallery</a>
            <a href="../landingPage.php#contact">Contact</a>
            <!-- <a href="#"><button class="btnLogout-popup">Login</button></a> -->
        </nav>
    </header>

    <!-- LOGIN -->
    <div class="card">
        <div class="form-box login">
            <h2>Login</h2>
            <form action="../pages/login-process.php" method="post">

                <!-- Username -->
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
    </div>

    <!-- REGISTRATION -->
    <div class="card">
        <div class="form-box register">
            <h2>Registration</h2>
            <form action="../pages/registration-process.php" method="post">

                <!-- Name -->
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" name="firstname" required>
                    <label for="name">First Name</label>
                </div>

                <!-- Surname -->
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" name="surname" required>
                    <label for="username">Last Name</label>
                </div>

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