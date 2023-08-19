<!-- checkout.php -->

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start(); // Start the session

require __DIR__ . "/../includes/db.php";

if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}


// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
    $userId = $_SESSION['user_id'];

    // Fetch user's name and surname from the database
    $query = "SELECT firstName, surname FROM registration_table WHERE id = $userId";
    $result = mysqli_query($connection, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);

        // Retrieve the name and surname
        $name = $row['firstName'];
        $surname = $row['surname'];
    } else {
        // Error handling if the query fails
        $name = "Unknown";
        $surname = "Unknown";
    }
} else {
    // Redirect to the login page if user is not logged in
    header("Location: ../pages/login.php");
    exit();
}


// Retrieve the data from query parameters
$hotelName = $_GET["hotelName"];
$checkin = $_GET["checkin"];
$checkout = $_GET["checkout"];
$roomType = $_GET["roomType"];
$bookingId = $_GET["bookingId"];
$costPerNight = $_GET["costPerNight"];
$totalCost = $_GET["totalCost"];
$totalCostWithStay = $_GET["totalCostWithStay"];

?>

<!------------------------- Checkout-------------------------------->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>

    <link rel="stylesheet" href="../css/landingPage.css">
    <link rel="stylesheet" href="../css/checkout.css">
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- Include Bootstrap CSS (place this in the <head> section) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Include Bootstrap Icons CSS (place this in the <head> section) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
    <!-- Header Section at the Top of the Page that consists of the Logo, links  & Login Button -->
    <header class="bg-white shadow-sm ">
        <h1 class="userWelcome">Traveltopia</h1>


        <nav class="navigation">
            <a href="../landingPage.php#about">About</a>
            <a href="../pages/gallery.php">Gallery</a>
            <a href="../landingPage.php#contact">Contact</a>
            <a href="../pages/dashboard.php">View Hotels</a>
            <a href="#">Bookings</a>
            <a href="../pages/login.php"><button class="btnLogout-popup">Logout</button></a>
        </nav>
    </header>


    <div class="checkout-details">
        <h1>Checkout</h1>
        <p>Customer Name & Surname: <?php echo $name . ' ' . $surname; ?></p>
        <p>Booking ID: <?php echo $bookingId ?></p>
        <p>Hotel Name: <?php echo $hotelName ?></p>
        <p>Check-in Date: <?php echo $checkin; ?></p>
        <p>Check-out Date: <?php echo $checkout; ?></p>
        <p>Room Type: <?php echo $roomType; ?></p>
        <p>Cost per Night: ZAR <?php echo $costPerNight ?>.00</p>
        <p>Cost per Night (Including VAT): ZAR <?php echo $totalCost ?></p>
        <p>Booking Total Cost x Amount of days booked: ZAR <?php echo $totalCostWithStay ?></p>

        <button type="submit" class="confirm-btn">Confirm</button>

    </div>


</body>

</html>