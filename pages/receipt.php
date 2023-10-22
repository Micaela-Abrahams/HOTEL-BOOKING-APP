<?
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Link Database
require __DIR__ . "/../includes/db.php";
session_start();

if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

if (isset($_GET['booking_id'])) {
    $bookingID = $_GET['booking_id'];

    // Fetch the booking information from your database based on the booking ID
    // Modify this query and retrieval process based on your database structure
    $query = "SELECT * FROM bookings_table WHERE booking_id = '$bookingID'";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // Create the content for the receipt
        $receiptContent = "Booking ID: {$row['booking_id']}\n";
        $receiptContent .= "Hotel Name: {$row['hotel_name']}\n";
        $receiptContent .= "Room Type: {$row['room_type']}\n";
        $receiptContent .= "Check-in Date: {$row['check_in_date']}\n";
        $receiptContent .= "Check-out Date: {$row['check_out_date']}\n";
        $receiptContent .= "Cost Per Night: ZAR {$row['cost_per_night']}\n";
        $receiptContent .= "Cost Per Night (Including VAT): ZAR {$row['Inc_Vat']}\n";
        $receiptContent .= "Booking Total: ZAR {$row['total_cost']}\n";

        // Define the filename for the receipt
        $filename = "booking_receipt_" . $bookingID . ".txt";

        // Set the content type for the response
        header("Content-Type: text/plain");
        header("Content-Disposition: attachment; filename=\"$filename\"");
        header("Content-Length: " . strlen($receiptContent));

        // Output the receipt content
        echo $receiptContent;

        exit;
    }
}
