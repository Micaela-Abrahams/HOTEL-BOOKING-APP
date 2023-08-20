<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . "/../includes/db.php";

if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Check if the necessary form fields are set

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve data from the form
    $userId = $_SESSION['user_id'];
    $bookingId = $_POST["bookingId"];
    $hotelName = $_POST["hotelName"];
    $roomType = $_POST["roomType"];
    $checkin = $_POST["checkin"];
    $checkout = $_POST["checkout"];
    $costPerNight = $_POST["costPerNight"];
    $totalCost = $_POST["totalCost"];
    $totalCostWithStay = $_POST["totalCostWithStay"];

    $insertQuery = "INSERT INTO bookings_table (user_id, booking_id, hotel_name, room_type, check_in_date, check_out_date, cost_per_night, Inc_Vat, total_cost) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $insertStmt = $connection->prepare($insertQuery);
    $insertStmt->bind_param("isssssddd", $userId, $bookingId, $hotelName, $roomType, $checkin, $checkout, $costPerNight, $totalCost, $totalCostWithStay);
    $insertStmt->execute();
    $insertStmt->close();

    // Redirect to a confirmation page or booking details page
    header("Location: ../pages/thank_you.php");
    exit();
} else {
    // Handle case where form fields are not properly set
    echo "Form data is missing!";
}
