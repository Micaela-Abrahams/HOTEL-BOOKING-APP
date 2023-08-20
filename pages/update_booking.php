<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Connect Database
require __DIR__ . "/../includes/db.php";
if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
} else {
    // echo "Database Connected!";
}

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_booking'])) {
    $bookingId = $_POST['booking_id'];

    // Retrieve booking data based on the booking ID from the database
    $query = "SELECT * FROM bookings_table WHERE booking_id = ?";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("s", $bookingId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $bookingData = $result->fetch_assoc();
    }

    $updateQuery = "UPDATE bookings_table SET hotel_name=?, check_in_date=?, check_out_date=?, cost_per_night=? WHERE booking_id=?";
    $updateStmt = $connection->prepare($updateQuery);

    $updatedHotelName = $_POST['hotel_name'];
    $updatedCheckin = $_POST['checkin'];
    $updatedCheckout = $_POST['checkout'];
    $updatedCostPerNight = $_POST['cost_per_night'];

    $updateStmt->bind_param("sssds", $updatedHotelName, $updatedCheckin, $updatedCheckout, $updatedCostPerNight, $bookingId);


    if ($updateStmt->execute()) {
        // Redirect or display a confirmation message
        header("Location: view-bookings.php");
        exit();
    }
}
