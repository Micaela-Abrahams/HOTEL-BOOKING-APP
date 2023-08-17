<?
error_reporting(E_ALL);
ini_set('display_errors', 1);


// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = $_POST['firstname'];
    $lastName = $_POST['surname'];
    $userName = $_POST['username'];
    $email = $_POST['email'];
    $userPassword = $_POST['password'];

    // Hash the password
    // $hashedPassword = password_hash($userPassword, PASSWORD_BCRYPT);


    // Database connection parameters
    $ServerName = "localhost";
    $Username = "root";
    $Password = "root";
    $DatabaseName = 'hotel-booking-app';
    $Port = 8889;

    // Using the above variables as parameter values
    $connection = new mysqli($ServerName, $Username, $Password, $DatabaseName, $Port); // Create connection

    // Check connection and successfully add users details to database
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    // Check if the user already exists
    $checkStmt = $connection->prepare("SELECT username, email FROM registration_table WHERE username = ? OR email = ?");
    $checkStmt->bind_param("ss", $userName, $email);
    $checkStmt->execute();
    $result = $checkStmt->get_result();

    if ($result->num_rows > 0) {
        // User with the same username or email already exists
        $errorMessage = "User with the same username or email already exists.";
    } else {
        // User doesn't exist, proceed with registration
        $insertStmt = $connection->prepare("INSERT INTO registration_table(firstName, surname, username, email,password) VALUES(?,?,?,?,?) ");
        $insertStmt->bind_param("ssssi", $firstName, $lastName, $userName, $email, $userPassword);

        if ($insertStmt->execute()) {
            $registrationSuccess = true;
        } else {
            $errorMessage = "Registration failed.";
        }

        $insertStmt->close();
    }

    $checkStmt->close();
    $connection->close();
}
?>




<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="../css/login.css">
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
            <h1 class="userWelcome">Traveltopia</h1>
        </a>


        <nav class="navigation">
            <a href="../landingPage.php#about">About</a>
            <a href="#">Services</a>
            <a href="../landingPage.php#contact">Contact</a>
            <!-- <a href="#"><button class="btnLogout-popup">Login</button></a> -->
        </nav>
    </header>


    <form action="../pages/login.php" method="post" class="register-success">
        <?php if (isset($registrationSuccess) && $registrationSuccess) : ?>
            <h4>Registration successful.</h4>
            <button class="register-success-login-btn">Login</button>
        <?php elseif (isset($errorMessage)) : ?>
            <h4><?php echo $errorMessage; ?></h4>
            <button class="register-success-login-btn">Login</button>
        <?php else : ?>
            <!-- Default form content -->
        <?php endif; ?>
    </form>


</html>