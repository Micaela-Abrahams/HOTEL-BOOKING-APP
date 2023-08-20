<?php

class BookingCalculator
{
    private $costPerNight;
    private $vatRate;

    public function __construct($costPerNight, $vatRate)
    {
        $this->costPerNight = $costPerNight;
        $this->vatRate = $vatRate;
    }

    public function calculateTotalCost()
    {
        $vatAmount = $this->costPerNight * $this->vatRate;
        $totalCost = $this->costPerNight + $vatAmount;
        return $totalCost;
    }

    public function calculateTotalCostWithStayDuration($numOfDays)
    {
        $totalCost = $this->calculateTotalCost();
        $totalCostWithStay = $totalCost * $numOfDays;
        return $totalCostWithStay;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $checkin = $_POST["checkin"];
    $checkout = $_POST["checkout"];
    $roomType = $_POST["roomtype"];

    // Initialize variables
    $costPerNight = 0.00; // Default cost
    $hotelName = "Majestic Horizons Resort"; // Default hotel name

    // Create BookingCalculator instance with appropriate cost and VAT rate
    $vatRate = 0.15; // 15% VAT rate
    if ($roomType == "single") {
        $costPerNight = 1364.00;
        $hotelName = "Majestic Horizons Resort";
    } elseif ($roomType == "double") {
        $costPerNight = 1999.00;
        $hotelName = "Majestic Horizons Resort";
    } elseif ($roomType == "twin") {
        $costPerNight = 1050.00;
        $hotelName = "Majestic Horizons Resort";
    } elseif ($roomType == "suite") {
        $costPerNight = 2450.00;
        $hotelName = "Majestic Horizons Resort";
    }

    // Create BookingCalculator instance
    $bookingCalculator = new BookingCalculator($costPerNight, $vatRate);

    // Calculate total cost and total cost with stay duration
    $numOfDays = (strtotime($checkout) - strtotime($checkin)) / (60 * 60 * 24); // Calculate days difference
    $totalCost = $bookingCalculator->calculateTotalCost();
    $totalCostWithStay = $bookingCalculator->calculateTotalCostWithStayDuration($numOfDays);

    // Generate a unique booking ID
    $bookingId = uniqid();

    // Redirect to checkout page with the data as query parameters
    header("Location:../pages/checkout.php?bookingId=$bookingId&hotelName=$hotelName&checkin=$checkin&checkout=$checkout&roomType=$roomType&costPerNight=$costPerNight&totalCost=$totalCost&totalCostWithStay=$totalCostWithStay");
    exit();
}
