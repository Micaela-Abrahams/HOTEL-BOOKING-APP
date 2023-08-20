<?
error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . "/../includes/db.php";
session_start();

if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: ../pages/login.php");
    exit();
}

// Retrieve user ID
$userId = $_SESSION['user_id'];

// Fetch user's bookings from the database
$query = "SELECT * FROM bookings_table WHERE user_id = $userId";
$result = mysqli_query($connection, $query);

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Landing Page CSS -->
    <link rel="stylesheet" href="../css/landingPage.css">
    <!-- View Booking CSS -->
    <link rel="stylesheet" href="../css/view-booking.css">
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- Include Bootstrap CSS (place this in the <head> section) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Include Bootstrap Icons CSS (place this in the <head> section) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <header class="bg-white shadow-sm ">
        <h1 class="userWelcome">Traveltopia</h1>

        <nav class="navigation">
            <a href="../landingPage.php#about">About</a>
            <a href="../pages/gallery.php">Gallery</a>
            <a href="../landingPage.php#contact">Contact</a>
            <a href="../pages/dashboard.php">View Hotels</a>
            <a href="../pages/view-bookings.php">Bookings</a>
            <a href="../pages/logout.php"><button class="btnLogout-popup">Logout</button></a>
        </nav>
    </header>


    <main>
        <h1>Your Bookings</h1>

        <?php
        // Check if there are bookings for the user
        if (mysqli_num_rows($result) > 0) {
            echo "<table>
                    <tr>
                        <th>Booking ID</th>
                        <th>Hotel Name</th>
                        <th>Room Type</th>
                        <th>Check-in Date</th>
                        <th>Check-out Date</th>
                        <th>Cost Per Night</th>
                        <th>Cost Per Night (Including VAT)</th>
                        <th>Booking Total</th>
                    </tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                // Displaying each booking's information as a table row
                echo "<tr>                        
                        <td>{$row['booking_id']}</td>
                        <td>{$row['hotel_name']}</td>
                        <td>{$row['room_type']}</td>
                        <td>{$row['check_in_date']}</td>
                        <td>{$row['check_out_date']}</td>
                        <td>ZAR {$row['cost_per_night']}</td>
                        <td>ZAR {$row['Inc_Vat']}</td>
                        <td>ZAR {$row['total_cost']}</td>
                        <td><a href='edit-booking.php?booking_id={$row['booking_id']}' class='edit-btn'>Edit Booking</a></td>
                        <td><a href='cancel-booking.php?booking_id={$row['booking_id']}' class='delete-btn'>Cancel Booking</a></td>
                    </tr>";
            }

            echo "</table>";
        } else {
            echo "<p>No bookings found.</p>";
        }
        ?>
    </main>

</body>

</html>