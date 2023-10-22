<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include the database connection and session management code
require __DIR__ . "/../includes/db.php";
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: ../pages/login.php");
    exit();
}

// Handle booking cancellation
if (isset($_GET['cancel'])) {
    $bookingID = $_GET['cancel'];

    // Debugging: Display the received bookingID
    echo "Received bookingID: " . $bookingID;

    // Use prepared statements to delete the booking
    $query = "DELETE FROM bookings_table WHERE booking_id = ?";
    $stmt = mysqli_prepare($connection, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $bookingID); // 's' represents a string
        if (mysqli_stmt_execute($stmt)) {
            // Booking canceled successfully, you can redirect or show a success message
            header("Location: view-bookings.php");
        } else {
            // Error handling, you can redirect or show an error message
            echo "Error canceling booking: " . mysqli_error($connection);
        }
        mysqli_stmt_close($stmt);
    } else {
        // Handle prepared statement creation error
        echo "Error creating prepared statement: " . mysqli_error($connection);
    }
}
