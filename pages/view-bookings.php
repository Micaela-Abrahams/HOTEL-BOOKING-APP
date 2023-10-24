<?
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

// Link Database
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

// Checks if the 'CANCEL' button was clicked
if (isset($_GET['cancel'])) {
    $bookingID = $_GET['cancel']; // Ensure it's a string

    // SQL query to delete the booking 
    $query = "DELETE FROM bookings_table WHERE booking_id = '$bookingID'";

    if (mysqli_query($connection, $query)) {
        // Booking canceled successfully, you can redirect or show a success message
        header("Location: ../pages/view-bookings.php");
    } else {
        // Error handling, display a detailed error message for debugging
        echo "Error canceling booking: " . mysqli_error($connection) . "<br>";
        echo "Query: $query"; // Add this line to display the actual SQL query being executed
    }
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

    <!-- Cancellation Pop-up Message -->
    <script>
        function confirmCancel(bookingID) {
            if (confirm("Are you sure you want to cancel this booking?")) {
                // If the user confirms, redirect to the cancellation URL
                window.location.href = 'view-bookings.php?cancel=' + bookingID;
            }
        }
    </script>


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


    <!-- Additional styling -->
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

        <!-- Add a download button above the table -->
        <button id="download-receipt" class="download-receipt-btn" onclick="downloadReceipt()">Download Receipt (.txt)</button>

        <!-- JavaScript function to handle the download -->
        <script>
            function downloadReceipt() {
                // Use JavaScript to trigger a download link to a PHP script
                window.location.href = 'receipt.php';
            }
        </script>

        <?php
        // Check if there are bookings for the user
        if (mysqli_num_rows($result) > 0) {;


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
                <td><a href='#' onclick=\"confirmCancel('{$row['booking_id']}')\" class='delete-btn'>Cancel</a></td>              
            </tr>";
            }

            "</table>";

            // echo "<button id='download-receipt' class='download-receipt-btn' onclick='redirectDownload({$row['booking_id']})'>Download Receipt</button>";
        } else {
            // echo "<p>No bookings found.</p>";
        }
        ?>

    </main>

    <script>
        function redirectDownload(bookingID) {
            // Redirect to the receipt.php script with the booking ID
            window.location.href = 'receipt.php?booking_id=' + bookingID;
        }
    </script>

</body>

</html>