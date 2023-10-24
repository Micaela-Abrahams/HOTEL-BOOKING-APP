<?php
// Include the necessary database connection code if not already included
require __DIR__ . "/../includes/db.php";

// Check if the user is logged in
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../pages/login.php");
    exit();
}

// Set the content type and headers to force the download
header("Content-type: text/plain");
header("Content-Disposition: attachment; filename=booking_receipt.txt");

// Retrieve the user's booking information
$userId = $_SESSION['user_id'];
$query = "SELECT * FROM bookings_table WHERE user_id = $userId";
$result = mysqli_query($connection, $query);

if (mysqli_num_rows($result) > 0) {
    // Create a variable to store the formatted content
    $content = "Booking Receipt\n\n";

    while ($row = mysqli_fetch_assoc($result)) {
        // Format each booking entry
        $content .= "Booking ID: {$row['booking_id']}\n";
        $content .= "Hotel Name: {$row['hotel_name']}\n";
        $content .= "Room Type: {$row['room_type']}\n";
        $content .= "Check-in Date: {$row['check_in_date']}\n";
        $content .= "Check-out Date: {$row['check_out_date']}\n";
        $content .= "Cost Per Night: ZAR {$row['cost_per_night']}\n";
        $content .= "Cost Per Night (Including VAT): ZAR {$row['Inc_Vat']}\n";
        $content .= "Booking Total: ZAR {$row['total_cost']}\n\n";
    }

    // Output the content to the response, which will trigger the download
    echo $content;
} else {
    // Handle the case where no bookings are found
    echo "No bookings found.";
}

// Close the database connection
mysqli_close($connection);
