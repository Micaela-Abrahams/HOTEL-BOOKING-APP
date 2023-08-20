<?
error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . "/../includes/db.php";

if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
} else {
    // echo "Database Connected!";
}

session_start();



if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['booking_id'])) {
    $bookingId = $_GET['booking_id'];

    // Retrieve booking data based on the booking ID from the database
    $query = "SELECT * FROM bookings_table WHERE booking_id = ?";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("s", $bookingId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $bookingData = $result->fetch_assoc();
    }
}

// Process form submission for updating the booking
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_booking'])) {
    $updatedHotelName = $_POST['hotel_name'];
    $updatedCheckin = $_POST['checkin'];
    $updatedCheckout = $_POST['checkout'];
    $updatedRoomType = $_POST['room_type'];
    $updatedCostPerNight = $_POST['cost_per_night'];

    // Update the booking data in the database
    $updateQuery = "UPDATE bookings_table SET hotel_name=?, check_in_date=?, check_out_date=?, room_type=?, cost_per_night=?, total_cost=? WHERE booking_id=?";
    $updateStmt = $connection->prepare($updateQuery);
    $updateStmt->bind_param("ssssdds", $updatedHotelName, $updatedCheckin, $updatedCheckout, $updatedRoomType, $updatedCostPerNight, $bookingTotal, $bookingId);

    if ($updateStmt->execute()) {
        // Redirect or display a confirmation message
        header("Location: view-bookings.php");
        exit();
    }
}



$hotelRoomTypesCosts = array(
    "Radiant Oasis Retreat" => array("Single" => "ZAR 1500.00", "Double" => "ZAR 2300.00", "Twin" => "ZAR 2750.00", "Suite" => "ZAR 3450.00"),
    "Aurora Plaza Hotel" => array("Single" => "ZAR 2324.00", "Double" => "ZAR 2800.00", "Twin" => "ZAR 2500.00", "Suite" => "ZAR 3450.00"),
    "Majestic Horizons Resort" => array("Single" => "ZAR 1364.00", "Double" => "ZAR 1999.00", "Twin" => "ZAR 1050.00", "Suite" => "ZAR 2450.00"),
    "Serene Haven Suites" => array("Single" => "ZAR 950.00", "Double" => "ZAR 1500.00", "Twin" => "ZAR 1290.00", "Suite" => "ZAR 1995.00"),
    "Velvet Sky Inn" => array("Single" => "ZAR 2867.00", "Double" => "ZAR 3300.00", "Twin" => "ZAR 3005.00", "Suite" => "ZAR 3950.00"),
    "Crystal Bay Residency" => array("Single" => "ZAR 1522.00", "Double" => "ZAR 1900.00", "Twin" => "ZAR 1750.00", "Suite" => "ZAR 2300.00")
);

// Function to calculate VAT-inclusive rate
function calculateVatInclusiveRate($costPerNight, $vatPercentage)
{
    $vatAmount = $costPerNight * $vatPercentage;
    $vatInclusiveRate = $costPerNight + $vatAmount;
    return $vatInclusiveRate;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/landingPage.css">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- Include Bootstrap CSS (place this in the <head> section) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Include Bootstrap Icons CSS (place this in the <head> section) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>

    <header class="bg-white shadow-sm ">
        <h1 class="userWelcome">Traveltopia</h1>

        <nav class="navigation">
            <a href="../landingPage.php#about">About</a>
            <a href="../pages/gallery.php">Gallery</a>
            <a href="../landingPage.php#contact">Contact</a>
            <a href="../pages/dashboard.php">View Hotels</a>
            <a href="#">Bookings</a>
            <a href="../pages/logout.php"><button class="btnLogout-popup">Logout</button></a>
        </nav>
    </header>

    <form action="update_booking.php" method="post">
        <h1>Edit Booking</h1>


        <label for="hotel_name">Hotel Name:</label>
        <select name="hotel_name" id="hotel_name_select">
            <?php
            foreach ($hotelRoomTypesCosts as $hotel => $roomTypes) {
                $selected = ($bookingData['hotel_name'] === $hotel) ? "selected" : "";
                echo "<option value=\"$hotel\" $selected>$hotel</option>";
            }
            ?>
        </select><br>

        <label for="room_type">Room Type:</label>
        <select name="room_type" id="room_type_select">
            <?php
            $selectedHotel = $bookingData['hotel_name'];
            $roomTypes = $hotelRoomTypesCosts[$selectedHotel];

            foreach ($roomTypes as $roomType => $cost) {
                $selected = ($bookingData['room_type'] === $roomType) ? "selected" : "";
                echo "<option value=\"$roomType\" $selected>$roomType</option>";
            }
            ?>
        </select>
        <br>

        <!-- Check in Date-->
        <label for="checkin">Check-in Date:</label>
        <input type="date" name="checkin" value="<?php echo $bookingData['check_in_date']; ?>"><br>

        <!-- Check out Date-->
        <label for="checkout">Check-out Date:</label>
        <input type="date" name="checkout" value="<?php echo $bookingData['check_out_date']; ?>"><br>

        <!-- Cost Per Night-->
        <label for="cost_per_night">Cost per Night:</label>
        <span id="cost_per_night"><?php echo  $bookingData['cost_per_night']; ?></span> <br>

        <button type="submit" name="update_booking" class="btn btn-success">Update Booking</button>
    </form>

    <?php
    if (isset($_SESSION['update_success'])) {
        if ($_SESSION['update_success']) {
            echo '<p class="update-message">Booking successfully updated!</p>';
        } else {
            echo '<p class="update-message">Update failed. Please try again.</p>';
        }
        unset($_SESSION['update_success']);
    }
    ?>

    <!-- JAVASCRIPT -->
    <script>
        const hotelRoomTypesCosts = <?php echo json_encode($hotelRoomTypesCosts); ?>;

        const hotelNameSelect = document.getElementById('hotel_name_select');
        const roomTypeSelect = document.getElementById('room_type_select');
        const costPerNightSpan = document.getElementById('cost_per_night');

        hotelNameSelect.addEventListener('change', function() {
            const selectedHotel = hotelNameSelect.value;
            const selectedRoomType = roomTypeSelect.value;
            const costPerNight = hotelRoomTypesCosts[selectedHotel][selectedRoomType];

            costPerNightSpan.textContent = costPerNight;
        });

        roomTypeSelect.addEventListener('change', function() {
            const selectedHotel = hotelNameSelect.value;
            const selectedRoomType = roomTypeSelect.value;
            const costPerNight = hotelRoomTypesCosts[selectedHotel][selectedRoomType];

            costPerNightSpan.textContent = costPerNight;
        });
    </script>


</body>

</html>