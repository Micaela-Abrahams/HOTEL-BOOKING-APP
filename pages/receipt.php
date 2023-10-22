<?php
if (isset($_GET['booking_id'])) {
    $bookingID = $_GET['booking_id'];

    // Connect Database
    require __DIR__ . "/../includes/db.php";

    // Create a SQL query to fetch booking details for the given booking ID
    $query = "SELECT * FROM bookings_table WHERE booking_id = $bookingID";
    $result = mysqli_query($connection, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result); // Fetch the booking details

        // Construct the receipt content
        $receiptContent = "Booking Name: " . $row['firstName'] . $row['surname'] . "\n";
        $receiptContent = "Booking ID: " . $row['booking_id'] . "\n";
        $receiptContent .= "Hotel Name: " . $row['hotel_name'] . "\n";
        $receiptContent .= "Room Type: " . $row['room_type'] . "\n";
        $receiptContent .= "Check-in Date: " . $row['check_in_date'] . "\n";
        $receiptContent .= "Check-out Date: " . $row['check_out_date'] . "\n";
        $receiptContent .= "Cost Per Night: ZAR " . $row['cost_per_night'] . "\n";
        $receiptContent .= "Total Cost: ZAR " . $row['total_cost'] . "\n";

        // Set the content type to force download as .txt
        header('Content-Type: text/plain');
        header('Content-Disposition: attachment; filename="receipt.txt');

        // Output the receipt content
        echo $receiptContent;
    } else {
        echo "Booking not found or no results.";
    }

    // Close the database connection
    mysqli_close($connection);
} else {
    echo "Invalid booking ID.";
}
