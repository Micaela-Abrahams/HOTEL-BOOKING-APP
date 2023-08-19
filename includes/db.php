<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userNameOrEmail = $_POST['username']; // Change this to the appropriate field name in your form
    $password = $_POST['password'];
}
// Database connection parameters
$ServerName = "localhost";
$Username = "root";
$Password = "root";
$DatabaseName = 'hotel-booking-app';
$Port = 8889;

// Create connection
$connection = new mysqli($ServerName, $Username, $Password, $DatabaseName, $Port);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

    // $checkStmt->close();
    // $connection->close();
