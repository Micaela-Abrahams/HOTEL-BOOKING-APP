<?
error_reporting(E_ALL);
ini_set('display_errors', 1);

// include '../pages/login.php';

$firstName = $_POST['firstname'];
$lastName = $_POST['surname'];
$userName = $_POST['username'];
$email = $_POST['email'];
$userPassword = $_POST['password'];


// Storing our mysqli class parameters in variables
$ServerName = "localhost";
$Username = "root";
$Password = "root";
$DatabaseName = 'hotel-booking-app';
$Port = 8889;

// Using the above variables as parameter values
$connection = new mysqli($ServerName, $Username, $Password, $DatabaseName, $Port); // Create connection

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} else {
    $stmt = $connection->prepare("insert into registration_table(firstName, surname, username, email, password) values(?,?,?,?,?) ");
    $stmt->bind_param("ssssi", $firstName, $lastName, $userName, $email, $userPassword);
    $stmt->execute();
    // echo "Registration Successful";
    $stmt->close();
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

    <h3> <?php
            // Display the message within the HTML text
            echo "Registration Successful";
            ?></h3>

</body>

</html>